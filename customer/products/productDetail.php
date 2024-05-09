<?php

$title = "Product Detail";
$style = "productDetail.css";
$script = "";

require_once "../../database/connect.php";

if (isset($_GET["id"]) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<?php
require_once "../navigation/header.php";
?>
<div class="productDetail-container">
    <div class="detail-top">
        <div class="detail-top-left">
            <div class="producat_image">
                <div class="img_thumbnail">
                    <img src="./img/img (1).jpg" alt="" />
                    <div class="img_small">
                        <img src="./img/img (1).jpg" alt="" class="active" />
                        <img src="./img/img (2).jpg" alt="" />
                        <img src="./img/img (3).jpg" alt="" />
                        <img src="./img/img (4).jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-top-right">
            <div class="right1">
                <h3><span>|</span><?php echo isset($row['name']) ? $row['name'] : ''; ?></h3>
                <p>Brand: <?php echo isset($row['brand']) ? $row['brand'] : '';  ?></p>
            </div>
            <div class="right2">
                <p><?php echo isset($row['description']) ? $row['description'] : ''; ?></p>
                <h4>$ <?php echo isset($row['price']) ? $row['price'] : ''; ?></h4>
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

</html>