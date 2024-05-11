<?php
require_once "../../database/connect.php";

if (isset($_GET['ID'])) {
    $customerID = $_GET['ID'];

    $sql = "DELETE FROM customer WHERE customerID = $customerID";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute()) {
        echo "<script>alert('Customer account deleted successfully.');</script>";
        echo "<script>window.location='customers.php'</script>";
    } else {
        echo "<script>alert('Error deleting account.');</script>";
    }
} else {
    echo "<script>alert('Customer ID not provided.');</script>";
}

echo "<script>window.history.go(-1);</script>";
