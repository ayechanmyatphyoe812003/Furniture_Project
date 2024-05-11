<?php

$title = "Product Detail";
$style = "productDetail.css";
$script = "./productDetail.js";

require_once "../../database/connect.php";

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

    <input type="hidden" id="productId" name="product_id" value="<?= $productId ?>">
    <input type="hidden" id="quantity" name="quantity" value="1">
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

            <form action="cart_function.php" method="post" id="addToCartForm">
                <div class="right3">
                    <p>Qty: </p>
                    <button type="button">-</button>
                    <input type="number" value="1" readonly>
                    <button type="button">+</button>
                </div>
                <div class="right4">
                    <button class="btn1">Add to Cart</button>
                    <button class="btn2">Buy Now</button>
                </div>
            </form>

        </div>
    </div>
    <div class="detail-bottom">
        <div class="relate">
            <h3>Related Products</h3>
        </div>
        <div class="product_cards">
            <?php foreach (range(1, 4) as $i) : ?>
                <div class="card">
                    <div class="product_brand">
                        <h3><?= $productBrand ?></h3>
                        <p><?= $categoryID ?></p>
                    </div>
                    <div class="card_image">
                        <img src="<?= $productImage1 ?>" alt="<?= $productName ?>">
                    </div>
                    <div class="product_info">
                        <p><?= $productName ?></p>
                        <h3>$ <?= $productPrice ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
<?php require_once("../navigation/footer.php"); ?>