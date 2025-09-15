<?php
// Start or resume the user's session
session_start();

// Include the database connection file
include_once('includes/dbconnection.php');

// Check if the 'addcart' button has been clicked (submitted) in the HTML form
if (isset($_POST['addcart'])) {
    // Get the food item's ID from the submitted form data
    $foodid = $_POST['foodid'];

    // Get the quantity of the food item from the submitted form data
    $foodqty = $_POST['foodqty'];

    // Get the user's ID from the session data
    $userid = $_SESSION['fosuid'];

    // Create a new database query to insert the user's ID, food item ID, and food quantity into the 'tblorders' table
    $query = mysqli_query($con, "INSERT INTO tblorders (UserId, FoodId, FoodQty) VALUES ('$userid', '$foodid', '$foodqty')");

    // Check if the query executed successfully
    if ($query) {
        // Display an alert with the message "Food has been added in to the cart."
        echo "<script>alert('Food has been added in to the cart');</script>";
    } else {
        // Display an alert with the message "Something went wrong."
        echo "<script>alert('Something went wrong.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Food Ordering System</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body itemscope>
<?php include_once('includes/header.php');?>

        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/bag.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline"><?php echo $_GET['catid'];?> Menu</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="remove-ext">
                                    <div class="row">

<?php
 $cid=$_GET['catid'];
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

    $total_records_per_page = 12;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2"; 
    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM tblfood where CategoryName='$cid'");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
  $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1
      $result = mysqli_query($con,"SELECT * FROM tblfood where CategoryName='$cid' LIMIT $offset, $total_records_per_page");
      $num=mysqli_num_rows($result);
      if($num>0){
    while($row = mysqli_fetch_array($result)){
    ?>


                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="popular-dish-thumb">
                                                <a href="food-detail.php?fid=<?php echo $row['ID'];?>" title="" itemprop="url"><img src="admin/itemimages/<?php echo $row['Image'];?>" alt="<?php echo $row['ItemName'];?>" itemprop="image" width="400" height="180"></a>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="food-detail.php?fid=<?php echo $row['ID'];?>" title="" itemprop="url"><?php echo $row['ItemName'];?></a></h4>
                                            <form method="post">    
                                                   <p itemprop="description">
    <input type="hidden" name="foodid" value="<?php echo $row['ID'];?>"> 
    <input class="qty" name="foodqty" type="text" value="1">
                                               </p>
                                                <span class="price">£ <?php echo $row['ItemPrice'];?></span>

                                      <?php if($_SESSION['fosuid']==""){?>
  <a class="log-popup-btn btn  pull-right blue-bg brd-rd3" href="#" title="Login" >Order Now</a>
<?php } else {?>
<button type="submit" name="addcart" class="btn  pull-right yellow-bg brd-rd3">Order Now</button>
                                                <?php } ?>
                                        </form>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                              <?php } } else { ?>
<h3 style="color:red;" align="center">No Record Found</h3>

                                                <?php } ?>
                                    </div>
                                </div>
                                <div class="pagination-wrapper text-center">
                                    <ul class="pagination justify-content-center">
                               
<!-- 
<ul class="pagination"> -->
    <?php
// Display "First Page" link if the current page number is greater than 1
if ($page_no > 1) {
    echo "<li><a href='?page_no=1'>First Page</a></li>";
}

// Create "Previous" button and disable it if the current page is 1
$prev_btn_class = ($page_no <= 1) ? "class='disabled'" : "";
echo "<li class='page-item prev' {$prev_btn_class}><a class='page-link brd-rd2' href='?page_no=$previous_page'>Previous</a></li>";

// Determine the range of page numbers to display based on the total number of pages
if ($total_no_of_pages <= 10) {
    // Display all page numbers if the total number of pages is less than or equal to 10
    for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
        if ($counter == $page_no) {
            echo "<li class='active'><a>$counter</a></li>";
        } else {
            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }
    }
} else {
    // Display a range of page numbers depending on the current page number
    // when the total number of pages is greater than 10
    if ($page_no <= 4) {
        $range_end = 8;
        $ellipsis = true;
    } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
        $range_start = $page_no - $adjacents;
        $range_end = $page_no + $adjacents;
        $ellipsis = true;
    } else {
        $range_start = $total_no_of_pages - 6;
        $range_end = $total_no_of_pages;
        $ellipsis = false;
    }

    // Display the range of page numbers
    for ($counter = 1; $counter <= $range_end; $counter++) {
        if ($counter == $page_no) {
            echo "<li class='active'><a>$counter</a></li>";
        } elseif (($counter >= $range_start && $counter <= $range_end) || $counter == 1 || $counter == 2) {
            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        } elseif ($ellipsis) {
            echo "<li><a>...</a></li>";
            echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
            echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
            break;
        }
    }
}

// Create "Next" button and disable it if the current page is the last page
$next_btn_class = ($page_no >= $total_no_of_pages) ? "class='disabled'" : "";
echo "<li class='page-item next' {$next_btn_class}><a class='page-link brd-rd2' href='?page_no=$next_page'>Next</a></li>";

// Display "Last Page" link if the current page is not the last page
if ($page_no < $total_no_of_pages) {
    echo "<li class='page-item next'><a class='page-link brd-rd2' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
}
?>



                                    </ul>
                                </div><!-- Pagination Wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   

  
    
    

      

      <?php include_once('includes/footer.php');
include_once('includes/signin.php');
include_once('includes/signup.php');
      ?>

    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body> 

</html>