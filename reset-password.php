<?php
// Start a new session or resume an existing one
session_start();

// Include the database connection script
include_once('includes/dbconnection.php');

// Check if the 'reset' button was pressed
if (isset($_POST['reset'])) {
    // Retrieve the contact number and email from the session variables
    $contactno = $_SESSION['contactno'];
    $email = $_SESSION['email'];

    // Hash the new password using the MD5 algorithm (not recommended for security reasons)
    $password = md5($_POST['newpassword']);

    // Execute an SQL query to update the user's password in the database
    // where the email and contact number match the given values
    $query = mysqli_query($con, "update tbluser set Password='$password' where Email='$email' && MobileNumber='$contactno' ");

    // Check if the query was successful
    if ($query) {
        // Show an alert stating that the password was successfully changed
        echo "<script>alert('Password successfully changed');</script>";

        // Destroy the session
        session_destroy();

        // Redirect the user to the 'index.php' page
        echo "<script>window.location.href='index.php'</script>";
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
    <title>Food Ordering System | Reset Password</title>
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
                            <h1 itemprop="headline">Reset Password</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Reset your Password </li>
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
                                
                                             
                    <form class="sign-form" name="changepassword" method="post" onsubmit="return checkpass();">
                                                    <div class="row">
<!--Email Id-->
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <input class="brd-rd3" type="password" required="true" name="newpassword" id="newpassword" placeholder="New Password">
                                                        </div>


<!--Mobile Number-->
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <input class="brd-rd3" type="password" name="confirmpassword" id="confirmpassword" required="" placeholder="Confirm Your Password">
                                                        </div>
                                                     
                                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                            <button class="red-bg brd-rd3" type="submit" name="reset">Submit</button>
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

          <?php include_once('includes/footer.php');
include_once('includes/signin.php');
include_once('includes/signup.php');
      ?>
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
        <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</body>	

</html>