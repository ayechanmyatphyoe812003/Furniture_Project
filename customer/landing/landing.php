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
                    "New Original Visionary Aesthetics" <br>
                    Welcome to Nova: Where Vision Meets Comfort.<br> Discover your new furniture muse today!
                </div>
                <div class="buttons">
                    <button>ABOUT US</button>
                    <button><a href="../Products/products.php">Explore Us</a></button>
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
                    -Sofas & Sectionals-
                    <br>
                    Sink into luxury and embrace relaxation like never before. <br>Discover your perfect piece today.
                </div>
                <div class="buttons">
                    <button>ABOUT US</button>
                    <button>EXPLORE</button>
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
                    <br> Discover your dream with NOVA bed frames andmattresses. <br>Luxury and blissful sleep like never before with NOVA.
                </div>
                <div class="buttons">
                    <button>ABOUT US</button>
                    <button>EXPLORE</button>
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
                    -Rugs & Carpets-
                    <br>
                    Step into luxury with NOVA's rugs and carpets.<br> Let NOVA redefine the art of comfort and style.
                </div>
                <div class="buttons">
                    <button>ABOUT US</button>
                    <button>EXPLORE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- list thumnail -->
    <div class="thumbnail">
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
        <div class="item">
            <img src="image/img2.jpg">
            <div class="content">
                <div class="title">
                    NOVA Furniture
                </div>
                <div class="description">
                    Sofas & Sectionals
                </div>
            </div>
        </div>
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
        <div class="item">
            <img src="image/img4.jpg">
            <div class="content">
                <div class="title">
                    NOVA Furniture
                </div>
                <div class="description">
                    Rugs & Carpets
                </div>
            </div>
        </div>
    </div>
    <!-- next prev -->

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
</body>

</html>