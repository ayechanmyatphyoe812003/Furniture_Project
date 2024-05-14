<?php
session_start();
$title = "Shopping Cart";
$style = "shippingInformation.css";


require_once "../../database/connect.php";
if (isset($_SESSION['user_id'])) {
  $customerID = $_SESSION['user_id'];
  $stmt = $pdo->prepare("SELECT Customer_Name, Customer_Phone, Customer_Email FROM customer WHERE customerID = :customerID");
  $stmt->execute(['customerID' => $customerID]);
  $customer = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
  header("Location: /Furniture_Project/customer/authentication/logIn/log_in.php");
  exit();
}

require_once "../navigation/header.php";
?>
<form id="payment-form" action="shipping_form_action.php" method="post" enctype="multipart/form-data">
  <div class="shipping-information-container">
    <div class="shipping-left">
      <div class="shipping-left-top">
        <h2><span>|</span>Shipping Information</h2>
        <div class="shipping-form">

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?= $customer['Customer_Name'] ?>" readonly required />
          </div>

          <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" value="<?= $customer['Customer_Phone'] ?>" readonly required />
          </div>

          <div class="form-group address">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $customer['Customer_Email'] ?>" readonly required />
          </div>


          <div class="form-group address">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required />
          </div>

        </div>
      </div>
      <div class="shipping-left-bottom">
        <h2><span>|</span>Payment Method</h2>
        <div class="payment-methods">
          <form action="shipping_form_action.php" method="post" enctype="multipart/form-data">
            <label>
              <input type="radio" name="payment" value="credit-card" required checked />Credit Card
            </label>
            <label>
              <input type="radio" name="payment" value="cash-on-delivery" required />
              Cash on Delivery
            </label>
          </form>
        </div>
      </div>
    </div>
    <div class="shipping-right">
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
      <input type="submit" id="payment-button" name="payment-button" value="Proceed to Payement">
    </div>

  </div>

</form>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const paymentSelect = document.getElementById('payment');
    const paymentForm = document.getElementById('payment-form');
    const paymentButton = document.getElementById('payment-button');
    const orderButton = document.getElementById('order-button');

    paymentSelect.addEventListener('change', function() {
      if (this.value === 'credit-card') {
        paymentButton.style.display = 'inline-block';
        orderButton.style.display = 'none';
      } else if (this.value === 'cash-on-delivery') {
        paymentButton.style.display = 'none';
        orderButton.style.display = 'inline-block';
      }
    });


  });
</script>
<?php require_once "../navigation/footer.php"; ?>