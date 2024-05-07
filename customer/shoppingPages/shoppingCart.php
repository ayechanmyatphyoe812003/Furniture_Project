<?php

$title = "shopping cart";
$style = "shoppingCart.css";
?>

<?php
require_once "../navigation/header.php";
?>
<div class="shopping-cart-container">
  <h2 class="shopping-title"><span>|</span>Shopping Cart</h2>
  <div class="shopping-cart-boxes">
    <div class="left-side">
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
              <img src="path_to_image1.jpg" alt="Furniture Image 1" width="50" />
            <td>Furniture Item 1</td>
            </td>
            <td>2</td>
            <td>$300.00</td>
          </tr>
          <tr>
            <td>
              <img src="path_to_image2.jpg" alt="Furniture Image 2" width="50" />
            </td>
            <td>Furniture Item 2</td>
            <td>1</td>
            <td>$150.00</td>
          </tr>

          <tr>
            <td>
              <img src="path_to_image2.jpg" alt="Furniture Image 2" width="50" />
            </td>
            <td>Furniture Item 2</td>
            <td>1</td>
            <td>$150.00</td>
          </tr>
          <!-- Add more items as needed -->
        </table>
      </div>
    </div>

    <!-- Right side - Summary and Delivery Date -->
    <div class="right-side">
      <!-- Order Summary -->
      <h2><span>|</span>Summary</h2>
      <div class="summary">

        <p>SUBTOTAL: </p>
        <p>$450.00</p>
        <p>SHIPPING FEE:</p>
        <p>$50.00</p>
        <p class="total">TOTAL PRICE: </p>
        <p class="total price">$500.00</p>
      </div>

      <!-- Estimated Delivery Date -->
      <div class="delivery-date">
        <h4>EST. <br>Delivery Date</h4>
        <p>April 25, 2024</p>
      </div>
    </div>
  </div>
  <div class="bottom-links">
    <a href="#"> <span class="material-symbols-outlined">
        chevron_left
      </span>Continue Shopping</a>
    <a href="shippingInformation.html"> Proceed to CheckOut<span class="material-symbols-outlined">
        chevron_right
      </span></a>
  </div>

</div>
</body>

</html>