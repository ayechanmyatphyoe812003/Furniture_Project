<?php
$title = "Shopping Cart";
$style = "shippingInformation.css";

session_start();
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
<div class="shipping-information-container">
  <div class="shipping-left">
    <div class="shipping-left-top">
      <h2><span>|</span>Shipping Information</h2>
      <div class="shipping-form">
        <form action="shipping_form_action.php" method="post" enctype="multipart/form-data">
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
        </form>
      </div>
    </div>
    <div class="shipping-left-bottom">
      <h2><span>|</span>Payment Method</h2>
      <div class="payment-methods">
        <form action="shipping_form_action.php" method="post" enctype="multipart/form-data">
          <label>
            <input type="radio" name="payment" value="credit-card" required />Credit Card
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
          <tr>
            <td>
              <img src="path_to_image1.jpg" alt="Chair" width="50" />
            <td>Item 1</td>
            </td>
            <td>2</td>
            <td>$300.00</td>
          </tr>
          <tr>
            <td>
              <img src="path_to_image2.jpg" alt="Table" width="50" />
            </td>
            <td>Item 2</td>
            <td>1</td>
            <td>$150.00</td>
          </tr>
          <tr>
            <td>
              <img src="path_to_image2.jpg" alt="Stand" width="50" />
            </td>
            <td>Item 3</td>
            <td>1</td>
            <td>$150.00</td>
          </tr>
        </table>
      </div>
      <div class="summary">
        <p>SUBTOTAL: </p>
        <p class="price">$450.00</p>
        <p>SHIPPING FEE:</p>
        <p class="price">$50.00</p>
        <p class="total">TOTAL PRICE: </p>
        <p class="total price">$500.00</p>
      </div>
    </div>

    <form action="shipping_form_action.php" method="post" enctype="multipart/form-data">
      <button type="submit">Proceed to Payment</button>
    </form>

  </div>
</div>
<?php require_once "../navigation/footer.php"; ?>