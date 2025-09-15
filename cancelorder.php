<?php
// Start a new session
session_start();

// Disable error reporting
error_reporting(0);

// Include database connection file
include_once('includes/dbconnection.php');

// Check if the cancel order form has been submitted
if(isset($_POST['submit'])) {
    
    // Get the order ID from the URL
    $oid = $_GET['oid'];
    
    // Set the cancellation details
    $ressta = "Order Cancelled";
    $remark = $_POST['restremark'];
    $canclbyuser = 1;
    
    // Insert the cancellation details into the database table 'tblfoodtracking'
    $query = mysqli_query($con, "INSERT INTO tblfoodtracking(OrderId, remark, status, OrderCanclledByUser) VALUES ('$oid', '$remark', '$ressta', '$canclbyuser')"); 
    
    // Update the order final status in the 'tblorderaddresses' table
    $query = mysqli_query($con, "UPDATE tblorderaddresses SET OrderFinalStatus='$ressta' WHERE Ordernumber='$oid'");
    
    // Check if the queries were successful
    if($query) {
        $msg = "Order has been cancelled.";
    }
    else {
        $msg = "Something went wrong. Please try again.";
    }
}

// Display the order cancellation form and current order status
$oid = $_GET['oid'];
$query = mysqli_query($con, "SELECT Ordernumber, OrderFinalStatus FROM tblorderaddresses WHERE Ordernumber='$oid'");
$num = mysqli_num_rows($query);
$cnt = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cancel Order</title>
</head>
<body>
    <div>
        <h2>Cancel Order #<?php echo $oid; ?></h2>
        <table border="1" cellpadding="10" style="border-collapse: collapse; border-spacing: 0; width: 100%; text-align: center;">
            <tr align="center">
                <th colspan="2">Order Details</th>
            </tr>
            <tr>
                <th>Order Number</th>
                <th>Current Status</th>
            </tr>
            <?php  
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr> 
                <td><?php echo $oid; ?></td> 
                <td>
                    <?php  
                    $status = $row['OrderFinalStatus'];
                    if($status == "") {
                        echo "Waiting for restaurant confirmation";
                    } 
                    else { 
                        echo $status;
                    }
                    ?>
                </td> 
            </tr>
            <?php 
            } ?>
        </table>
        <?php 
        // If the order is still waiting for restaurant confirmation or is being prepared, display the cancellation form
        if($status == "" || $status == "Order Confirmed" || $status == "Food being Prepared") {
        ?>
        <form method="post">
            <table>
                <tr>
                    <th>Reason for cancellation</th>
                    <td>
                        <textarea name="restremark" placeholder="" rows="12" cols="50" class="form-control wd-450" required="true"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" name="submit" class="btn btn-primary">Cancel Order</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php 
        } 
        else {
        ?>
            <?php 
            // If the order has already been cancelled, display an error message
            if($status == 'Order Cancelled') {
            ?>
                <p style="color:red; font-size:20px;">Order has already been cancelled.</p>
            <?php 
            } 
            // If the order has already been picked up or delivered, display an error message
            else { 
            ?>
                <p style="color:red; font-size:20px;">You cannot cancel this order because it has already been picked up or delivered.</p>
            <?php 
            } 
            ?>
        <?php 
        } 
        ?>
    </div>
</body>
</html>
