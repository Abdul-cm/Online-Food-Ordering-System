<?php
session_start();
include_once('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Online Food Ordering System | About us</title>

    

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
	<style>
     .image-box {
        display: inline-block;
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 20px;
    }
    .image-box img {
        max-width: 100%;
        height: auto;
    }
</style>
</style>
</head>
<body itemscope>
   
<?php include_once('includes/header.php');?>
        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/bag.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">About Us</h1>
                            <span>A Greate Restaurant Website</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>

       <section>
    <div class="block less-spacing gray-bg top-padd30">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="sec-box">
                        <div class="about-feat text-center wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="title3" itemprop="headline">We Are open 24/7</h2>
                            <div class="image-box">
                                <img src="assets/images/waitress-6767345.jpg" alt="waitress-6767345.jpg" itemprop="image">
                            </div>
                        </div>
                        <div class="title1-wrapper text-center style2">
                            <div class="title1-inner">
                                <h2 itemprop="headline">About Us</h2>
                                <p itemprop="description"><p>Our online food ordering system is designed to make it easy and convenient for customers to order food from their favorite restaurants. With just a few clicks, customers can browse menus, select items, and place their orders for delivery or pickup. Our system is user-friendly and intuitive, making it easy for customers to navigate and find what they're looking for. We work with a wide range of restaurants to offer a diverse selection of cuisines and dishes, ensuring that there's something for everyone. Our goal is to provide a seamless and enjoyable experience for both customers and restaurants, making it easier than ever to enjoy delicious food from the comfort of your own home.</p></p>
                            </div>
                        </div>
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