<?php


require_once "../../database/connect.php";

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch product details
    $sql = "SELECT * FROM products WHERE id = $productId";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $productId]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // Save product details in variables
    $productName = $product[0]['Product_Name'];
    $productBrand = $product[0]['Product_Brand'];
    $productCategory = $product[0]['Product_Category'];
    $productPrice = $product[0]['Product_Price'];
    $productDescription = $product[0]['Product_Description'];
    $productImage1 = "../../images/" . $product[0]['Product_Name'] . $product[0]['Product_Brand'] . "/" . $product[0]['product_img1'];
    $productImage2 = "../../images/" . $product[0]['Product_Name'] . $product[0]['Product_Brand'] . "/" . $product[0]['product_img2'];
    $productImage3 = "../../images/" . $product[0]['Product_Name'] . $product[0]['Product_Brand'] . "/" . $product[0]['product_img3'];
    $productImage4 = "../../images/" . $product[0]['Product_Name'] . $product[0]['Product_Brand'] . "/" . $product[0]['product_img4'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Detail</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="productDetail.css" />
</head>

<body>
    <?php
    require_once "../navigation/header.php";
    ?>
    <div class="productDetail-container">
        <form action="cart_function.php" method="post" id="addToCartForm">
            <input type="hidden" id="productId" name="product_id" value="<?= $productId ?>">
            <input type="hidden" id="quantity" name="quantity" value="1">
            <div class="detail-top">
                <div class="detail-top-left">
                    <div class="product_image">
                        <div class="img_thumbnail">
                            <img src="<?= $productImage1 ?>" alt="" />
                            <div class="img_small">
                                <img src="<?= $productImage1 ?>" alt="" class="active" />
                                <img src="<?= $productImage2 ?>" alt="" />
                                <img src="<?= $productImage3 ?>" alt="" />
                                <img src="<?= $productImage4 ?>" alt="" />
                            </div>
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


                    <div class="right3">
                        <p>Qty: </p>
                        <button type="button" id="decrementQty">-</button>
                        <input type="number" id="quantityDisplay" value="1" readonly>
                        <button type="button" id="incrementQty">+</button>
                    </div>
                    <div class="right4">
                        <button type="button" id="addToCartBtn">Add to Cart</button>
                        <button type="button" class="btn2">Buy Now</button>
                    </div>

                </div>
            </div>
        </form>
        <div class="detail-bottom">
            <div class="relate">
                <h3>Related Products</h3>
            </div>
            <div class="product_cards">
                <?php foreach (range(1, 4) as $i) : ?>
                    <div class="card">
                        <div class="product_brand">
                            <h3><?= $productBrand ?></h3>
                            <p><?= $productCategory ?></p>
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

            <form action="POST">
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
                        <h3>IKEA</h3>
                        <p>product category</p>
                    </div>
                    <div class="card_image">
                        <img src="img/sofa1.png" alt="sofa1">
                    </div>
                    <div class="product_info">
                        <p>name</p>
                        <h3>$0000.00</h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</body>


<script>
    const incrementBtn = document.getElementById('incrementQty');
    const decrementBtn = document.getElementById('decrementQty');
    const quantityInput = document.getElementById('quantity');
    const quantityDisplay = document.getElementById('quantityDisplay');
    const addToCartBtn = document.getElementById('addToCartBtn');
    const addToCartForm = document.getElementById('addToCartForm');

    incrementBtn.addEventListener('click', () => {
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
        // Set the quantity value before submitting the form
        document.getElementById('quantity').value = quantityInput.value;
        // Submit the form
        addToCartForm.submit();
    });
</script>

</html>