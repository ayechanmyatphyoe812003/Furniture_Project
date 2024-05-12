<?php

$title = "Thank You";
$style = "thank_you.css";
$script = "";
?>

<?php
require_once "../navigation/header.php";
?>
<div class="thank-you-container">
  <div class="thank-you-card">
    <div class="thank-you-top">
      <h1>Thank You</h1>
      <span class="material-symbols-outlined">
        check_box
      </span>
    </div>

    <p>Your order has been successfully placed</p>

    <a href="../landing/landing.php" class="material-symbols-outlined"> arrow_back </span>
      Back to Home</button>
    </a>


    <p class="contact">
      If you have any issues,
      <a href="../contactUs/contact_us.php">contact us</a>
    </p>
  </div>

</div>
<?php require_once ("../navigation/footer.php"); ?>