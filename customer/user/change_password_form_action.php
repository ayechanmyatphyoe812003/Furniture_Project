<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: log_in.php");
    exit();
}

// Include database connection
require_once "../../database/connect.php";

// Initialize error message
$errorMessage = "";

// Validate form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve new password and confirm password from form
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    // Perform password validation
    if (empty($newPassword) || empty($confirmPassword)) {
        $errorMessage = "*New password and confirm password are required.";
    } elseif ($newPassword !== $confirmPassword) {
        $errorMessage = "*New password and confirm password are not the same.";
    } else {
        // Hash the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Retrieve customerID from session
        $customerID = $_SESSION['user_id'];

        // Update the password in the database
        $stmt = $pdo->prepare("UPDATE customer SET Customer_Password = :password WHERE customerID = :customerID");
        $stmt->execute(['password' => $hashedPassword, 'customerID' => $customerID]);

        // Redirect back to change password page with success message
        header("Location: changePassword.php?success=Password changed successfully.");
        exit();
    }
}

// Redirect back to change password page with error message
header("Location: changePassword.php?error=" . urlencode($errorMessage));
exit();
