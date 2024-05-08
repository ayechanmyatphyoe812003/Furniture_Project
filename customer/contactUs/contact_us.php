<?php

$title = "Contact Us";
$style = "contact_us.css";
$script = "";
?>

<?php
require_once "../navigation/header.php";
?>
<div class="contact-us-container">
  <h1><span>|</span>Contact Us</h1>
  <p>
    We'd love to hear from you! Please fill out the form below or reach us
    at:
  </p>
  <p>Email: NOVA@furniturestore.com</p>
  <p>Phone: +95 123 456 789</p>

  <form action="#" method="post" class="contact-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required />

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required />

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit" class="contact-us-submit-btn">Submit</button>
  </form>
</div>
<?php require_once("../navigation/footer.php"); ?>