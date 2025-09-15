<?php
// Start a new session or resume the existing one
session_start();

// Destroy the current session, effectively logging out the user
session_destroy();

// Redirect the user to the 'index.php' page
header("location:index.php");
?>
