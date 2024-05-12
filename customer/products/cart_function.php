<?php
require_once "../../database/connect.php";
session_start();
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int) $_POST['product_id'];
    $quantity = (int) $_POST['quantity'];


    // Fetch product details
    $sql = "SELECT p.*,c.categoryName FROM products p JOIN category c ON p.categoryID = c.categoryID WHERE p.productID = $product_id";
    $stmt = $pdo->query($sql);
    $product = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $productName = $product[0]['Product_Name'];
    $productBrand = $product[0]['Product_Brand'];
    $productCategory = $product[0]['categoryName'];
    $productPrice = $product[0]['Product_Price'];

    $productImage1 = "../../images/" . $product[0]['Product_Name'] . $product[0]['Product_Brand'] . "/" . $product[0]['product_img1'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = [
            'productID' => $product_id,
            'productName' => $productName,
            'productBrand' => $productBrand,
            'productPrice' => $productPrice,
            'productCategory' => $productCategory,
            'productImg' => $productImage1,
            'qty' => $quantity,
        ];
    } else {
        $_SESSION['cart'][$product_id]['qty'] += $quantity;
    }

    header("Location: /Furniture_Project/customer/products/productDetail.php?id= $product_id");
    exit();
}
