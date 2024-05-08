<?php

$title = "Products";
$style = "products.css";
$script = "script.js";

require_once "../../database/connect.php";

$sql = "SELECT * FROM products";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);




?>

<?php
require_once "../navigation/header.php";
?>
<div class="products_container">
    <div class="products_head">
        <h2><span>|</span>Products</h2>
        <p>Discover quality craftsmanship, timeless designs, and endless possibilities for transforming your space into
            a haven of beauty and functionality. </p>
        <div class="photo-container">
            <img src="img/img (1).jpg" alt="image1">
            <img src="img/img (2).jpg" alt="image1">
            <img src="img/img (4).jpg" alt="image1">
            <img src="img/img (3).jpg" alt="image1">
        </div>

    </div>

    <div class="products_bottom">
        <div class="products_bottom_left">
            <h3>Filterd By</h3>
            <div class="filter1 filter">
                <h4><span class="material-symbols-outlined">
                        expand_more
                    </span>Category</h4>
                <a href="#">hehe </a>
                <a href="#">hehe</a>
                <a href="#">hehe</a>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
            </div>
            <div class="filter2 filter">
                <h4><span class="material-symbols-outlined">
                        expand_more
                    </span>Brand</h4>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
                <a href="#">hehe </a>
            </div>
            <div class="price_range">
                <h4><span class="material-symbols-outlined">
                        expand_more
                    </span>Price Range</h4>
                <div class="custom-wrapper">
                    <div class="price-input-container">
                        <div class="price-input">
                            <div class="price-field">
                                <span>From</span>
                                <input type="number" class="min-input" value="2500">
                            </div>
                            <div class="price-field">
                                <span>To</span>
                                <input type="number" class="max-input" value="8500">
                            </div>
                        </div>
                        <div class="slider-container">
                            <div class="price-slider">
                            </div>
                        </div>
                    </div>

                    <!-- Slider -->
                    <div class="range-input">
                        <input type="range" class="min-range" min="0" max="10000" value="2500" step="1">
                        <input type="range" class="max-range" min="0" max="10000" value="8500" step="1">
                    </div>
                </div>
            </div>
        </div>
        <div class="products_bottom_right">
            <div class="sorting">
                <h5>Sorted By</h5>
                <div class="dropdown">
                    <button class="dropbtn">select<span class="material-symbols-outlined">
                            expand_more
                        </span>
                    </button>

                    <div class="dropdown-content">
                        <a href="#">A to Z</a>
                        <a href="#">Z to A</a>
                        <a href="#">Price <span class="material-symbols-outlined">
                                south
                            </span> </a>
                        <a href="#"> Price <span class="material-symbols-outlined">
                                north
                            </span></a>
                    </div>
                </div>
            </div>

            <div class="product_cards">

                <?php
                foreach ($products as $product) {
                    $image = "../../images/" . $product['Product_Name'] . $product['Product_Brand'] . "/" . $product['product_img1'];

                    ?>
                    <a href="./productDetail.php?id=<?= $product['ID'] ?>" class="card">
                        <div class="product_brand">
                            <h3><?= $product['Product_Brand'] ?></h3>
                            <p><?= $product['Product_Category'] ?></p>
                        </div>
                        <div class="card_image">
                            <img src="<?= $image ?>" alt="sofa1">
                        </div>
                        <div class="product_info">
                            <p><?= $product['Product_Name'] ?></p>
                            <h3><?= $product['Product_Price'] ?></h3>
                        </div>
                    </a>

                <?php } ?>

            </div>
        </div>
    </div>
</div>


<?php require_once ("../navigation/footer.php"); ?>