<?php
// logout.php
// End the session and redirect to login.php

// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login.php
header("Location: login.php");
exit();
?>
