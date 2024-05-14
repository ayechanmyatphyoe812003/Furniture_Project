<?php
require_once "../../../database/connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $ID = $_POST['orderID'];
    $customerID = $_POST['customerID'];
    $orderDate = $_POST['orderDate'];
    $totalAmount = $_POST['totalAmount'];
    $paymentID = $_POST['paymentID'];
    $orderStatus = $_POST['orderStatus'];

    if ($ID == "") {
    } else {
        $sql = "UPDATE `orders` SET customerID='$customerID', order_date='$orderDate', total_amount='$totalAmount', paymentID='$paymentID', status='$orderStatus' WHERE orderID='$ID'";
        try {
            $statement = $pdo->prepare($sql);
            $statement->execute();
            echo "<script>alert('Order Status Updated Successfully');</script>";
            echo "<script>window.location='../orders.php'</script>";
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}
