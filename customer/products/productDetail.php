<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terms & Conditions</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="productDetail.css" />
</head>

<body>
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
                    <h3><span>|</span>Product Name</h3>
                    <p>Brand: IKEA</p>
                </div>
                <div class="right2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, aperiam dolore. Nulla minus ipsum delectus eum maxime, iste, assumenda quisquam repellat tempore exercitationem in aliquid at aspernatur magnam! Ipsam, expedita.</p>
                    <h4>$ 000.00</h4>
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