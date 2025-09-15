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
    <title> | Contact us</title>

    

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
	<style>
  .less-spacing {
    padding: 0;
    margin: 0;
  }

  .gray-bg {
    background-color: #f5f5f5;
  }

  .top-padd30 {
    padding-top: 30px;
  }

  .sec-box {
    padding: 30px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
  }

  .contact-info-box {
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
  }

  .contact-info-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  }

  .contact-info-box i {
    font-size: 40px;
    margin-bottom: 20px;
    display: block;
    color: #333;
  }

  .contact-info-box h5 {
    font-size: 18px;
    margin-bottom: 10px;
    font-weight: 600;
    color: #333;
  }

  .contact-info-box p {
    font-size: 16px;
    margin-bottom: 0;
    color: #999;
  }
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
							<h1 itemprop="headline">Contact Us</h1>
						</div>
					</div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div>
        </div>

       <section>
  <div class="block less-spacing gray-bg top-padd30">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
          <div class="sec-box">
            <div class="contact-info-sec text-center">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                  <div class="contact-info-box">
                    <i class="fa fa-phone-square"></i>
                    <h5 itemprop="headline">PHONE</h5>
                    <p itemprop="description">Phone 01618568744</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                  <div class="contact-info-box">
                    <i class="fa fa-map-marker"></i>
                    <h5 itemprop="headline">ADDRESS</h5>
                    <p itemprop="description">654 Green Bank, Yoshire, M24 6UY</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                  <div class="contact-info-box">
                    <i class="fa fa-envelope"></i>
                    <h5 itemprop="headline">EMAIL</h5>
                    <p itemprop="description">support@yourdomain.com</p>
                  </div>
                </div>
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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="assets/js/google-map-int.js"></script>
    <script src="../../www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>