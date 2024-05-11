<?php
$title = "About Us";
$style = "about_us.css";
$script = "about_us.js";
require_once "../navigation/header.php";
?>
<div class="about-us-container">
  <!-- Top Image -->
  <div class="top-image">
    <img src="topImg.jpg" alt="Furniture Image" />
  </div>

  <!-- About Us Text -->
  <div class="about-us-text">
    <h2>NOVA.</h2>
    <p>
      New Original Visionary Aesthetics. <br>Our handpicked selection of furniture
      transforms any room into a sanctuary of elegance and warmth. Our diverse range offers something for every
      taste and lifestyle.
    </p>
  </div>

  <div class="about-us-mid">
    <div class="about-us-mid-left">
      <div class="about-us-text1">
        <div class="head">
          <span>|</span>
          <p>Our Values</p>
        </div>
        <div class="text">
          <p>
            At NOVA Furniture Store, our values are at the heart of everything we do. We are committed to integrity, honesty, and transparency in all our interactions, ensuring that our customers can trust in the quality and authenticity of our products. We believe in the power of design to inspire and enhance lives, striving to create furniture that not only looks beautiful but also functions seamlessly in the modern home. Sustainability is a fundamental value for us, and we are dedicated to sourcing materials responsibly and minimizing our environmental footprint throughout the production process.
          </p>
        </div>

      </div>
      <div class="about-us-text2">
        <div class="head">
          <p>Our Mission</p>
          <span>|</span>
        </div>
        <div class="text">
          <p>
            At NOVA Furniture Store, our mission is to enrich lives through inspired design and exceptional craftsmanship. We are passionate about helping our customers create homes that reflect their unique style and personality, offering a curated selection of furniture and decor that combines beauty, functionality, and affordability. Our mission is to make the furniture shopping experience enjoyable, effortless, and rewarding, providing personalized assistance and guidance to help customers find the perfect pieces for their space. We are committed to continuous improvement and innovation, constantly seeking new ways to elevate our products and services to better meet the evolving needs and desires of our customers.
          </p>
        </div>

      </div>
    </div>
  </div>
  <!-- Pagination and Cards -->
  <div class="slider-header">
    <h2>-Our Creations, Our Arts-</h2>
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
require_once "../navigation/footer.php";
?>