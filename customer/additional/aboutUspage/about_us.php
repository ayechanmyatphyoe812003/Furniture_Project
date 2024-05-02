<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
  <link rel="stylesheet" href="../../style/style.css" />
</head>

<body>
  <?php
  require_once "../../navigation/header.php"
  ?>
  <div class="about-us-container">
    <!-- Top Image -->
    <div class="top-image">
      <img src="topImg.jpg" alt="Furniture Image" />
    </div>

    <!-- About Us Text -->
    <div class="about-us-text">
      <h2>Chic Cove.</h2>
      <p>
        Step into a world where style and comfort collide at
        <span>"Chic Cove"</span>. Our handpicked selection of furniture
        transforms any room into a sanctuary of elegance and warmth. Whether
        you're drawn to the sleek lines of contemporary design or the cozy
        charm of rustic pieces, our diverse range offers something for every
        taste and lifestyle.
      </p>
    </div>

    <div class="about-us-mid">
      <div class="about-us-mid-left">
        <div class="about-us-text1">
          <span>|</span>
          <p>
            We believe that furniture is more than just decor—it's the
            backdrop for your most cherished moments. From intimate dinner
            parties to lazy Sunday mornings, let our thoughtfully crafted
            collections bring your vision to life.
          </p>
        </div>
        <div class="about-us-text2">
          <p>
            With attention to detail and a commitment to excellent customer
            service, we strive to make your shopping experience enjoyable and
            hassle-free. Thank you for choosing "Chic Cove" for your home
            furnishing needs!
          </p>
          <span>|</span>
        </div>
      </div>
      <div class="about-us-mid-right">
        <img src="mid.jpg" alt="Furniture Image" />
      </div>
    </div>
    <!-- Pagination and Cards -->
    <div class="slider-header">
      <h2>-Our Exquisite Interiors-</h2>
    </div>

    <div class="about-us-cards">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          <span class="material-symbols-outlined"> chevron_left </span>
        </button>
        <ul class="image-list">
          <img class="image-item" src="room1.jpg" alt="img-1" />
          <img class="image-item" src="room2.jpg" alt="img-2" />
          <img class="image-item" src="room3.jpg" alt="img-3" />
          <img class="image-item" src="room4.jpg" alt="img-4" />
          <img class="image-item" src="room5.jpg" alt="img-5" />
          <img class="image-item" src="room6.jpg" alt="img-6" />
          <img class="image-item" src="room7.jpg" alt="img-7" />
          <img class="image-item" src="room8.jpg" alt="img-8" />
          <img class="image-item" src="room9.jpg" alt="img-9" />
          <img class="image-item" src="room10.jpg" alt="img-10" />
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          <span class="material-symbols-outlined"> chevron_right </span>
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>
  </div>
  <?php
  require_once "../../navigation/footer.php"
  ?>
  <script src="about_us.js" defer></script>

</body>

</html>