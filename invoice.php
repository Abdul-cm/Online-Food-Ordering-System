<?php
// Start session
session_start();

// Turn off error reporting
error_reporting(0);

// Include database connection
include_once('includes/dbconnection.php');
?>
<script language="javascript" type="text/javascript">
// Function to close the window
function f2() {
  window.close();
}

// Function to print the page
function f3() {
  window.print();
}
</script>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Track Order</title>
</head>
<body>

<div style="margin-left:50px;">
<?php  
// Get the order ID from the URL parameter
$oid = $_GET['oid'];

// Query the database for the order details
$query = mysqli_query($con, "SELECT tblfood.Image, tblfood.ItemName, tblfood.ItemDes, tblfood.ItemPrice, tblfood.ItemQty, tblorders.FoodId, tblorders.FoodQty FROM tblorders JOIN tblfood ON tblfood.ID=tblorders.FoodId WHERE tblorders.IsOrderPlaced=1 AND tblorders.OrderNumber='$oid'");

// Get the number of rows in the result
$num = mysqli_num_rows($query);

// Initialize the counter
$cnt = 1;
?>

<!-- Display the order details in a table -->
<table border="1" cellpadding="10" style="border-collapse: collapse; border-spacing:0; width: 100%; text-align: center;">
  <tr align="center">
   <th colspan="6">Invoice of #<?php echo $oid; ?></th> 
  </tr>
  <tr>
    <th>#</th>
    <th>Food</th>
    <th>Food Name</th>
    <th>Quantity</th>
    <th>Price/Unit</th>
    <th>Total</th>
  </tr>
  <?php  
  // Loop through the query results and display each row
  while ($row = mysqli_fetch_array($query)) {
  ?>
  <tr>
    <td><?php echo $cnt; ?></td>
    <td><img src="admin/itemimages/<?php echo $row['Image']; ?>" width="60" height="40" alt="<?php echo $row['ItemName']; ?>"></td> 
    <td><?php echo $row['ItemName']; ?></td>
    <td><?php echo $qty = $row['FoodQty']; ?></td>  
    <td><?php echo $ppu = $row['ItemPrice']; ?></td>
    <td><?php echo $total = $qty * $ppu; ?></td> 
  </tr>
  <?php 
  // Calculate the grand total
  $grandtotal += $total;

  // Increment the counter
  $cnt++;
  } ?>
  <tr>
    <th colspan="5" style="text-align:center">Grand Total</th>
    <td><?php echo $grandtotal; ?></td>
  </tr>
</table>
     
<p>
  <!-- Close and Print buttons -->
  <input name="Submit2" type="submit" class="txtbox4" value="Close" onClick="return f2();" style="cursor: pointer;"  />
  <input name="Submit2" type="submit" class="txtbox4" value="Print" onClick="return f3();" style="cursor: pointer;"  />
</p>
</div>

</body>
</html>
