<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /Furniture_Project/customer/authentication/logIn/log_in.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $payment = $_POST["payment"];


    // Store form data in session
    $_SESSION["name"] = $name;
    $_SESSION["phone"] = $phone;
    $_SESSION["email"] = $email;
    $_SESSION["address"] = $address;
    $_SESSION["payment"] = $payment;


    // Check payment method and redirect accordingly
    if ($payment === "credit-card") {
        header("Location: cardDetails.php");
        exit();
    } elseif ($payment === "cash-on-delivery") {


        header("Location: ../ThankYou/thank_you.php");
        exit();
    }
}
