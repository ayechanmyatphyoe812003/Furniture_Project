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
    <a href="../ThankYou/thank_you.php"><button>CheckOut</button></a>
  </div>
</div>
</body>

</html>