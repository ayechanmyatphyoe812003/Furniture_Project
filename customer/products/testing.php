<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>testing</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="testing.css" />
</head>

<body>
    <!-- =================Navbar Start===================== -->
    <header class="header" role="banner">
        <div class="container">
            <nav>
                <ul>
                    <div class="logo">
                        <img src="" alt="" />
                    </div>
                    <li><a href="#">Collections</a></li>
                    <li><a href="#"> Men</a></li>
                    <li><a href="#"> Women</a></li>
                    <li><a href="#"> About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="cart_content">
                    <img src="" alt="" />
                    <span class="qty_label">3</span>
                    <div class="user_icon">
                        <img src="" alt="" />
                    </div>
                    <div class="cart_box">
                        <p class="box_header">Cart</p>
                        <div class="pro_content">
                            <!-- <img src="/images/image-product-1-thumbnail.jpg" alt="" />
                <div class="p_details">
                  <p class="pro_txt">Fall Limited Edition Sneakers</p>
                  <p class="price">
                    $125.00 <span>x</span><span class="times"> 3</span>
                    <span class="total">$375</span>
                  </p>
                </div>
                <div class="trash">
                  <img src="/images/icon-delete.svg" alt="" class="trash_img" />
                </div> -->
                        </div>
                        <div class="cart_empty">
                            <p>Your cart is empty :</p>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- =================Navbar Close===================== -->

    <main id="products">
        <div class="container">
            <div class="producat_wrapper">
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
                <div class="producat_content">
                    <p class="company_txt">Sneaker Company</p>
                    <h2>Fall Limited Edition Sneakers</h2>
                    <p class="producat_des">
                        These low-profile sneakers are your perfect casual wear companion.
                        Featuring a durable rubber outer sole, they’ll withstand
                        everything the weather can offer.
                    </p>
                    <div class="price">
                        <div class="dicscount_price">
                            <p class="normal_price">$125.00</p>
                            <p><span class="discount">50%</span></p>
                        </div>
                        <p class="total_price">$250.00</p>
                    </div>
                    <div class="qty">
                        <div class="btns">
                            <button type="button" class="decreament">-</button>
                            <button type="input" class="qty_numbers">1</button>
                            <button type="button" class="increament">+</button>
                        </div>
                        <button class="add_cart" type="button">
                            <!-- <span><svg width="22" height="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="#ffffff" fill-rule="nonzero" />
                                </svg></span> -->
                            <p>Add to Cart</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal">
        <div class="modal_wrapper">
            <img src="./img/img (1).jpg" alt="hi" class="close_icon" />
            <div class="producat_image_modal">
                <div class="img_thumbnail_modal">
                    <img src="./img/img (1).jpg" alt="" class="m_img" />
                    <div class="img_small_modal">
                        <img src="./img/img (1).jpg" alt="" class="active" />
                        <img src="../img/img (2).jpg" alt="" />
                        <img src="./img/img (3).jpg" alt="" />
                        <img src="./img/img (4).jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="testing.js"></script>
</body>

</html>