<?php

$title = "Card Detail";
$style = "cardDetails.css";
?>

<?php
require_once "../navigation/header.php";
?>
<div class="card-details-container">
  <div class="card-details-left">
    <h2><span>|</span>Card Details</h2>
    <div class="card-container">
      <div class="cards">
        <div class="card card1">
          <label for="visa">
            <img src="visaCard.png" alt="visa card" />
          </label>
          <input type="radio" id="visa" value="visaCard" name="card" required />
        </div>

        <div class="card card2">
          <label for="master">
            <img src="masterCard.png" alt="master card" />
          </label>
          <input type="radio" id="master" name="card" value="masterCard" required />
        </div>

        <div class="card card3">
          <label for="american">
            <img src="americanCard.png" alt="american express" />
          </label>
          <input type="radio" id="american" name="card" value="americanExpress" required />
        </div>
      </div>
      <div class="card-details-form">
        <form action="/submit-card-info" method="post">
          <div class="form-group">
            <label for="name-on-card">Name on Card</label>
            <input type="text" id="name-on-card" name="name-on-card" placeholder="Enter your name" required />
          </div>
          <div class="form-group">
            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card-number" placeholder="Enter your card number" required />
          </div>
          <div class="form-group-inline">
            <div class="form-group">
              <label for="expiration-date">Expiration Date</label>
              <input type="month" id="expiration-date" name="expiration-date" required />
            </div>
            <div class="form-group">
              <label for="cvv">CVV</label>
              <input type="text" id="cvv" name="cvv" placeholder="CVV" required pattern="\d{3,4}" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="card-details-right">
    <h2><span>|</span>Order Summary</h2>
    <div class="order-summary">
      <div class="shopping-cart">
        <table>
          <tr>
            <th></th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
          <?php
          if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $productId => $product) {
              echo "<tr>";
              echo "<td><img src='{$product['productImg']}' alt='{$product['productName']}' width='50'></td>";
              echo "<td>{$product['productName']}</td>";
              echo "<td>{$product['qty']}</td>";
              echo "<td>\${$product['productPrice']}</td>";
              echo "</tr>";
            }
          }
          ?>
        </table>
      </div>
      <div class="summary">
        <?php
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $productId => $product) {
          $subtotal += $product['productPrice'] * $product['qty'];
        }
        $shippingFee = 50.00; // Assuming a fixed shipping fee
        $totalPrice = $subtotal + $shippingFee;
        ?>
        <p>SUBTOTAL: </p>
        <p class="price">$<?= number_format($subtotal, 2) ?></p>
        <p>SHIPPING FEE:</p>
        <p class="price">$<?= number_format($shippingFee, 2) ?></p>
        <p class="total">TOTAL PRICE: </p>
        <p class="total price">$<?= number_format($totalPrice, 2) ?></p>
      </div>
    </div>
    <form id="payment-form" action="shipping_form_action.php" method="post" enctype="multipart/form-data">
      <input type="submit" id="card-check-out" name="card-check-out" value="Check Out">
    </form>
  </div>
</div>
</body>

</html>