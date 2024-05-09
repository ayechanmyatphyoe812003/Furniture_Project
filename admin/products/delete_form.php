<?php
require_once "../../database/connect.php";

if (isset($_GET['ID'])) {
    $productID = $_GET['ID'];

    $sql = "DELETE FROM products WHERE productID = $productID";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute()) {
        echo "<script>alert('Product deleted successfully.');</script>";
        echo "<script>window.location='products.php'</script>";
    } else {
        echo "<script>alert('Error deleting product.');</script>";
    }
} else {
    echo "<script>alert('Product ID not provided.');</script>";
}

echo "<script>window.history.go(-1);</script>";
