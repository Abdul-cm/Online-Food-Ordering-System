<?php
// Start session
session_start();

// Include database connection
include_once('includes/dbconnection.php');

// Check if the submit button has been clicked
if (isset($_POST['submit'])) {
    // Get the contact number and email from the submitted form
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];

    // Query to find a user with the specified email and contact number
    $query = mysqli_query($con, "SELECT ID FROM tbluser WHERE Email='$email' AND MobileNumber='$contactno'");

    // Fetch the result of the query as an associative array
    $ret = mysqli_fetch_array($query);

    // Check if a user is found with the given email and contact number
    if ($ret > 0) {
        // Store the email and contact number in session variables
        $_SESSION['contactno'] = $contactno;
        $_SESSION['email'] = $email;

        // Redirect the user to the reset-password page
        header('location:reset-password.php');
    } else {
        // Display an alert to the user, notifying them that the entered details are invalid
        echo "<script>alert('Invalid Details. Please try again');</script>";

        // Redirect the user back to the forgot-password page
        echo "<script>window.location.href='forgot-password.php'</script>";
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
    <title>Food Ordering System | Password Recovery</title>
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
                <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Recover your Password</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Recover your Password </li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="login-register-wrapper">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="sign-popup-wrapper brd-rd5">
                                            <div class="sign-popup-inner brd-rd5">
                                                <div class="sign-popup-title text-center">
                                                    <h4 itemprop="headline">Recover your Password</h4>
                                            
                                                </div>
                                
                                             
                                                <form class="sign-form" method="post">
                                                    <div class="row">
<!--Email Id-->
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <input class="brd-rd3" type="email" placeholder="Registered Email id" name="email" id="email" required="true">
                                                        </div>


<!--Mobile Number-->
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <input class="brd-rd3" type="text" placeholder="Registered Mobile Number" name="contactno" maxlength="10" pattern="[0-9]{10}" required="true">
                                                        </div>
                                                     
                                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                            <button class="red-bg brd-rd3" type="submit" name="submit">Submit</button>
                                                        </div>
                                               
                                                    </div>
                                                </form>
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

 <?php
// Include the footer file, which contains the HTML code and any necessary PHP or JavaScript for the footer section
include_once('includes/footer.php');

// Include the signin file, which likely contains the code or HTML for the sign-in form or modal
include_once('includes/signin.php');

// Include the signup file, which likely contains the code or HTML for the sign-up form or modal
include_once('includes/signup.php');
?>

    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>