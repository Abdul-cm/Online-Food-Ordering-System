<?php
// Establish a connection to a MySQL database named "fosdb" running on the local machine
$con=mysqli_connect("localhost", "root", "", "food_delivery");

// Check if there was an error during the connection process
if(mysqli_connect_errno()){
  // If there was an error, print an error message with the description of the error
  echo "Connection Fail".mysqli_connect_error();
}
