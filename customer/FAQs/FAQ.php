<?php

$title = "FAQs";
$style = "FAQ.css";
$script = "";
?>

<?php
require_once "../navigation/header.php";
?>
<div class="faq-container">
  <h1><span>|</span>FAQs</h1>
  <div class="faq-card">
    <h2 class="question">Q: How do I place an order?</h2>
    <p class="answer">
      A: You can place an order by visiting our online store and adding
      items to your cart. Then proceed to checkout to complete your order.
    </p>
  </div>
  <div class="faq-card">
    <h2 class="question">Q: What payment methods do you accept?</h2>
    <p class="answer">
      A: We accept Visa, MasterCard and American Express.
    </p>
  </div>
  <div class="faq-card">
    <h2 class="question">Q: Do you offer international shipping?</h2>
    <p class="answer">
      A: Yes, we offer international shipping to most countries. Shipping
      fees may apply.
    </p>
  </div>
  <div class="faq-card">
    <h2 class="question">Q: What is your return policy?</h2>
    <p class="answer">
      A: We offer a 30-day return policy for unused items in their original
      packaging. Please refer to our Returns & Refunds page for more
      details.
    </p>
  </div>
  <div class="faq-card">
    <h2 class="question">Q: How long does delivery take?</h2>
    <p class="answer">
      A: Delivery times vary depending on your location and the item's
      availability. Typically, orders are delivered within 7-14 business
      days. You can find estimated delivery times on the product page or
      contact us for more details.
    </p>
  </div>
</div>
<?php require_once("../navigation/footer.php"); ?>