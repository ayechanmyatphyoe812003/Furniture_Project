<?php
session_start();

if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    $productId = (int) $_POST['product_id'];
    $quantity = (int) $_POST['quantity'];

    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['qty'] = $quantity;
    }
}
