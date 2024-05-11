<?php

$title = "shopping cart";
$style = "shoppingCart.css";
session_start();
?>

<?php
require_once "../navigation/header.php";
?>
<div class="shopping-cart-container">
  <h2 class="shopping-title"><span>|</span>Shopping Cart</h2>
  <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) :
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $productId => $product) {
      $subtotal += ($product['productPrice'] ?? 0) * ($product['qty'] ?? 0);
    }
    $shippingFee = 50.00; // Assuming a fixed shipping fee
    $totalPrice = $subtotal + $shippingFee;

    // Calculate the estimated delivery date
    $deliveryDate = new DateTime();
    $deliveryDate->add(new DateInterval('P7D')); // Add 7 days
  ?>


    <div class="shopping-cart-boxes">
      <div class="left-side">
        <div class="shopping-cart">
          <table>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Quantity</th>
              <th>Price</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $productId => $product) : ?>
              <tr>
                <td>
                  <img src="<?= $product['productImg'] ?? '' ?>" alt="Furniture Image 1" width="50" />
                </td>
                <td><?= $product['productName'] ?? 'Unknown' ?></td>
                <td><?= $product['qty'] ?? '0' ?></td>

                <td>$<?= (int) ($product['productPrice'] ?? 0) * (int) ($product['qty'] ?? 0) ?></td>


              </tr>
            <?php endforeach; ?>


            <!-- Add more items as needed -->
          </table>
        </div>
      </div>

      <!-- Right side - Summary and Delivery Date -->
      <div class="right-side">
        <h2><span>|</span>Summary</h2>
        <div class="summary">
          <p>SUBTOTAL: </p>
          <p>$<?= number_format($subtotal, 2) ?></p>
          <p>SHIPPING FEE:</p>
          <p>$<?= number_format($shippingFee, 2) ?></p>
          <p class="total">TOTAL PRICE: </p>
          <p class="total price">$<?= number_format($totalPrice, 2) ?></p>
        </div>

        <!-- Estimated Delivery Date -->
        <div class="delivery-date">
          <h4>EST. <br>Delivery Date</h4>
          <p><?= $deliveryDate->format('F j, Y') ?></p>
        </div>
      </div>
    </div>

  <?php endif; ?>
  <div class="bottom-links">
    <a href="#"> <span class="material-symbols-outlined">
        chevron_left
      </span>Continue Shopping</a>
    <a href="shippingInformation.php"> Proceed to CheckOut<span class="material-symbols-outlined">
        chevron_right
      </span></a>
  </div>

</div>
</body>

</html>