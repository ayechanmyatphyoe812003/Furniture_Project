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
    $userid = $_SESSION['user_id'];

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
        $paymentQuery = "INSERT INTO payment (paymentMethods) VALUES (payment)";
        $paymentStmt = $pdo->prepare($paymentQuery);
        $paymentStmt->execute([$payment]);

        $paymentId = $pdo->lastInsertId();

        // Insert into order table
        $orderDate = date("Y-m-d"); // Assuming MySQL date format
        $totalAmount = 0; // You need to calculate the total amount based on the products in the cart

        $orderQuery = "INSERT INTO order (customerID, Address, order_date, total_amount, paymentID, status) VALUES (?, ?, ?, ?, ?, ?)";
        $orderStmt = $pdo->prepare($orderQuery);
        $orderStmt->execute([$userid, $address, $orderDate, $totalAmount, $paymentId, 'pending']);

        $orderId = $pdo->lastInsertId();

        // Insert into orderItems table
        foreach ($_SESSION['cart'] as $product) {
            $productID = $product['productID'];
            $qty = $product['qty'];

            $orderItemsQuery = "INSERT INTO orderItems (orderID, productID, qty) VALUES (?, ?, ?)";
            $orderItemsStmt = $pdo->prepare($orderItemsQuery);
            $orderItemsStmt->execute([$orderId, $productID, $qty]);
        }

        header("Location: ../ThankYou/thank_you.php");
        exit();
    }
}
