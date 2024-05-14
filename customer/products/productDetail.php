<?php

$title = "Product Detail";
$style = "productDetail.css";
$script = "./productDetail.js";

require_once "../../database/connect.php";
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch product details
    $sql = "SELECT * FROM products WHERE productID =  $productId";
    $stmt = $pdo->query($sql);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($products as $product) {
        $productName = $product['Product_Name'];
        $productBrand = $product['Product_Brand'];
        $categoryID = $product['categoryID'];
        $productStock = 0;
        if (!isset($_SESSION['cart'][$product_id])) {
            $productStock = $_SESSION['cart'][$product_id]['stock'];
        } else {
            $productStock = $product['Product_Stock'];
        }

        $sql = "SELECT * FROM category WHERE categoryID = $categoryID";
        $stmt = $pdo->query($sql);
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $categoryName = $categories[0]['categoryName'];

        $productPrice = $product['Product_Price'];
        $productDescription = $product['Product_description'];
        $productImage1 = "../../images/" . $product['Product_Name'] . $product['Product_Brand'] . "/" . $product['product_img1'];
        $productImage2 = "../../images/" . $product['Product_Name'] . $product['Product_Brand'] . "/" . $product['product_img2'];
        $productImage3 = "../../images/" . $product['Product_Name'] . $product['Product_Brand'] . "/" . $product['product_img3'];
        $productImage4 = "../../images/" . $product['Product_Name'] . $product['Product_Brand'] . "/" . $product['product_img4'];

    }
    // Save product details in variables
}


?>

<?php
require_once "../navigation/header.php";
?>
<div class="productDetail-container">


    <div class="detail-top">
        <div class="detail-top-left">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded" type="button">
                    <span class="material-symbols-outlined"> chevron_left </span>
                </button>
                <ul class="image-list">
                    <img class="image-item" src="<?= $productImage1 ?>" alt="" />
                    <img class="image-item" src="<?= $productImage2 ?>" alt="" />
                    <img class="image-item" src="<?= $productImage3 ?>" alt="" />
                    <img class="image-item" src="<?= $productImage4 ?>" alt="" />
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded" type="button">
                    <span class="material-symbols-outlined"> chevron_right </span>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
        <div class="detail-top-right">
            <div class="right1">
                <h3><span>|</span><?= $productName ?></h3>
                <p>Brand: <?= $productBrand ?></p>
            </div>
            <div class="right2">
                <p><?= $productDescription ?></p>
                <h4>$ <?= $productPrice ?></h4>
            </div>
            <form id="addToCartForm" action="cart_function.php" method="post">
                <!-- Hidden input fields for product_id and quantity -->
                <input type="hidden" id="productId" name="product_id" value="<?= $productId ?>">

                <input type="hidden" id="quantity" name="quantity" value="1">
                <input type="hidden" id="productStock" name="product_stock" value="<?= $productStock ?>">
                <div class="right3">
                    <p>Qty: </p>
                    <button type="button" id="decrementQty">-</button>
                    <input type="number" id="quantityDisplay" value="1" readonly>
                    <button type="button" id="incrementQty">+</button>
                </div>
                <div class="right4">
                    <input type="submit" id="addToCartBtn" name="add-to-cart" value="Add to Cart" class="btn1">
                    <input type="submit" id="buyNowBtn" class="btn2" name="buy-now" value="Buy Now">
                </div>
            </form>

        </div>
    </div>
</div>
</div>

<?php require_once ("../navigation/footer.php"); ?>



<script>
    const incrementBtn = document.getElementById('incrementQty');
    const decrementBtn = document.getElementById('decrementQty');
    const quantityInput = document.getElementById('quantity');
    const quantityDisplay = document.getElementById('quantityDisplay');
    const addToCartBtn = document.getElementById('addToCartBtn');
    const buyNowBtn = document.getElementById('buyNowBtn');
    const addToCartForm = document.getElementById('addToCartForm');
    const buyNowForm = document.getElementById('buyNowForm');
    const stock = document.getElementById('productStock');

    incrementBtn.addEventListener('click', () => {
        if (parseInt(quantityInput.value) < parseInt(stock.value))
            quantityInput.value = parseInt(quantityInput.value) + 1;
        quantityDisplay.value = quantityInput.value;
    });

    decrementBtn.addEventListener('click', () => {
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
            quantityDisplay.value = quantityInput.value;
        }
    });

    addToCartBtn.addEventListener('click', () => {

        document.getElementById('quantity').value = quantityInput.value;
        // Submit the form
        addToCartForm.submit();
    });
    buyNowBtn.addEventListener('click', () => {

        document.getElementById('quantity').value = quantityInput.value;
        // Submit the form
        buyNowForm.submit();
    });
</script>