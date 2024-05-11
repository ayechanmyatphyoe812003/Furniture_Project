<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: log_in.php");
    exit();
}

// Include database connection
require_once "../../database/connect.php";

// Validate form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $customerID = $_SESSION['user_id'];
    $customerName = $_POST["name"];
    $customerEmail = $_POST["email"];
    $customerPhone = $_POST["phone"];

    // Perform data validation
    // You can add more validation as needed

    // Update customer information in the database
    $stmt = $pdo->prepare("UPDATE customer SET Customer_Name = :name, Customer_Email = :email, Customer_Phone = :phone WHERE customerID = :customerID");
    $stmt->execute(['name' => $customerName, 'email' => $customerEmail, 'phone' => $customerPhone, 'customerID' => $customerID]);

    // Redirect back to the user profile page after updating
    header("Location: user.php");
    exit();
}
