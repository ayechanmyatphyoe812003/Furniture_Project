<?php
session_start();
require_once "../../database/connect.php";
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
    $userid = $_SESSION['user_id'];

    // Store form data in session
    $_SESSION["name"] = $name;
    $_SESSION["phone"] = $phone;
    $_SESSION["email"] = $email;
    $_SESSION["address"] = $address;
    $_SESSION["payment"] = $payment;


    if ($payment === "credit-card") {
        header("Location: cardDetails.php");
        exit();
    } elseif ($payment === "cash-on-delivery") {


        $totalAmount = 0;
        foreach ($_SESSION['cart'] as $product) {

            $qty = $product['qty'];
            $unitPrice = $product['productPrice'];
            $totalAmount += ($unitPrice * $qty);
        }
        $orderQuery = "INSERT INTO orders (customerID, Address, total_amount, paymentID, status) VALUES ($userid, '$address', $totalAmount, 2, 'pending')";
        $orderStmt = $pdo->prepare($orderQuery);
        $orderStmt->execute();

        $orderId = $pdo->lastInsertId();

        // Insert into orderItems table
        foreach ($_SESSION['cart'] as $product) {
            $productID = $product['productID'];
            $qty = $product['qty'];
            $unitPrice = $product['productPrice'];
            $orderItemsQuery = "INSERT INTO orderitem (orderID, productID, quantity,unitPrice) VALUES ($orderId, $productID, $qty,   $unitPrice)";
            $orderItemsStmt = $pdo->prepare($orderItemsQuery);
            $orderItemsStmt->execute();
        }
        unset($_SESSION['cart']);
        header("Location: ../ThankYou/thank_you.php");
        exit();
    }

    if (isset($_POST['card-check-out'])) {


        $totalAmount = 0; // You need to calculate the total amount based on the products in the cart
        foreach ($_SESSION['cart'] as $product) {

            $qty = $product['qty'];
            $unitPrice = $product['productPrice'];
            $totalAmount += ($unitPrice * $qty);
        }
        $orderQuery = "INSERT INTO orders (customerID, Address, total_amount, paymentID, status) VALUES ($userid, '$address', $totalAmount, 1, 'pending')";
        $orderStmt = $pdo->prepare($orderQuery);
        $orderStmt->execute();

        $orderId = $pdo->lastInsertId();

        // Insert into orderItems table
        foreach ($_SESSION['cart'] as $product) {
            $productID = $product['productID'];
            $qty = $product['qty'];
            $unitPrice = $product['productPrice'];
            $orderItemsQuery = "INSERT INTO orderitem (orderID, productID, quantity,unitPrice) VALUES ($orderId, $productID, $qty,   $unitPrice)";
            $orderItemsStmt = $pdo->prepare($orderItemsQuery);
            $orderItemsStmt->execute();
        }
        unset($_SESSION['cart']);
        header("Location: ../ThankYou/thank_you.php");
        exit();
    }
}
