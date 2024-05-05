<?php
require_once "../../../database/connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $ID = $_POST['orderID'];
    $customerID = $_POST['customerID'];
    $orderDate = $_POST['orderDate'];
    $totalAmount = $_POST['totalAmount'];
    $paymentID = $_POST['paymentID'];
    $orderStatus = $_POST['orderStatus'];

    if ($name == "") {
    } else {
        $sql = "UPDATE `order` SET customerID='$customerID', orderDate='$orderDate', totalAmount='$totalAmount', paymentID='$paymentID', orderStatus='$orderStatus' WHERE ID='$ID'";
        try {
            $statement = $pdo->prepare($sql);
            $statement->execute();
            echo "<script>alert('Customer Updated Successfully');</script>";
            echo "<script>window.location='../customers.php'</script>";
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}


