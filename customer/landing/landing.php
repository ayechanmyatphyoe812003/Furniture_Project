<?php

$title = "Home Page";
$style = "style.css";
$script = "app.js";

?><?php
    require_once "../navigation/header.php";
    ?>
<div class="carousel">
    <!-- list item -->
    <div class="list">
        <div class="item">
            <img src="image/img1.jpg">
            <div class="content">
                <div class="author">Since 2003</div>
                <div class="title">Nova.</div>
                <div class="topic">Furniture</div>
                <div class="des">
                    "New Original <br>Visionary Aesthetics" <br>
                </div>
                <div class="buttons">
                    <a href="/Furniture_Project/customer/aboutUs/about_us.php">ABOUT US</a>
                    <a href="/Furniture_Project/customer/products/products.php">EXPLORE US</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="image/img2.jpg">
            <div class="content">
                <div class="author">Since 2003</div>
                <div class="title">Nova.</div>
                <div class="topic">Furniture</div>
                <div class="des">
                    -Sofas & Sectionals-<br>
                    Sink into luxury sofas.
                </div>
                <div class="buttons">
                    <a href="../aboutUs/about_us.php">ABOUT US</a>
                    <a href="../Products/products.php">EXPLORE US</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="image/img3.jpg">
            <div class="content">
                <div class="author">Since 2003</div>
                <div class="title">Nova.</div>
                <div class="topic">Furniture</div>
                <div class="des">
                    -Bed Frames & Mattresses-
                    <br> Dream with NOVA beds.
                </div>
                <div class="buttons">
                    <a href="../aboutUs/about_us.php">ABOUT US</a>
                    <a href="../Products/products.php">EXPLORE US</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="image/img4.jpg">
            <div class="content">
                <div class="author">Since 2003</div>
                <div class="title">Nova.</div>
                <div class="topic">Furniture</div>
                <div class="des">
                    -Rugs-
                    <br>
                    Step on NOVA's rugs.
                </div>
                <div class="buttons">
                    <a href="../aboutUs/about_us.php">ABOUT US</a>
                    <a href="../Products/products.php">EXPLORE US</a>
                </div>
            </div>
        </div>
    </div>
    <!-- list thumnail -->
    <div class="thumbnail">
        <!-- <a href="../products/products.php?category=sofa">Sofa Sets</a>
        <a href="../products/products.php?category=bedframes">Bed Frames</a>
        <a href="../products/products.php?category=matteress">Mattresses</a>
        <a href="../products/products.php?category=rugs">Rugs</a> -->
        <a href="/Furniture_Project/customer/products/products.php">
            <div class="item">
                <img src="image/img1.jpg">
                <div class="content">
                    <div class="title">
                        NOVA Furniture
                    </div>
                    <div class="description">
                        All Products
                    </div>
                </div>
            </div>
        </a>
        <a href="/Furniture_Project/customer/products/products.php?category=sofa">
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="title">
                        NOVA Furniture
                    </div>
                    <div class="description">
                        Sofa Set
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="title">
                        NOVA Furniture
                    </div>
                    <div class="description">
                        Bed Frames & Mattresses
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="title">
                        NOVA Furniture
                    </div>
                    <div class="description">
                        Rugs
                    </div>
                </div>
            </div>
        </a>

    </div>

    <div class="arrows">
        <button id="prev">
            < </button>
                <button id="next">></button>
    </div>
    <!-- time running -->
    <div class="time"></div>
</div>

<?php
require_once "../navigation/footer.php";
?>