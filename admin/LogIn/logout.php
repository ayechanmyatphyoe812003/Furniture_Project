<?php
session_start();

// Unset or destroy session variables
unset($_SESSION['admin_id']);
unset($_SESSION['admin_name']);

// Redirect to login page
header("Location: login.php");
exit();
