<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terms & Conditions</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
    />
    <link rel="stylesheet" href="../style/style.css" />
  </head>
  <body>
    <div class="shipping-information-container">
      <div class="shipping-left">
        <div class="shipping-left-top">
          <h2><span>|</span>Shipping Information</h2>
          <div class="shipping-form">
            <form action="/submit-shipping-info" method="post">
              <div class="form-group">
                <label for="name">Name:</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Enter your full name"
                  required
                />
              </div>

              <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="Enter your phone number"
                  required
                />
              </div>

              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                  required
                />
              </div>

              <div class="form-group">
                <label for="state">State/Province:</label>
                <input
                  type="text"
                  id="state"
                  name="state"
                  placeholder="Enter your state/province"
                  required
                />
              </div>

              <div class="form-group address">
                <label for="address">Address:</label>
                <input
                  type="text"
                  id="address"
                  name="address"
                  placeholder="Enter your address"
                  required
                />
              </div>
            </form>
          </div>
        </div>
        <div class="shipping-left-bottom">
          <h2><span>|</span>Payment Method</h2>
          <div class="payment-methods">
            <label>
              <input type="radio" name="payment" value="credit-card" required />Credit Card
            </label>
            <label>
              <input type="radio" name="payment" value="cash-on-delivery" />
              Cash on Delivery
            </label>
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
                  <img
                    src="path_to_image1.jpg"
                    alt="Chair"
                    width="50"
                  />
                <td>Item 1</td> 
                </td>
                <td>2</td>
                <td>$300.00</td>
              </tr>
              <tr>
                <td>
                  <img
                    src="path_to_image2.jpg"
                    alt="Table"
                    width="50"
                  />
                </td>
                <td>Item 2</td>
                <td>1</td>
                <td>$150.00</td>
              </tr>
              <tr>
                <td>
                  <img
                    src="path_to_image2.jpg"
                    alt="Stand"
                    width="50"
                  />
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
        <a href="cardDetails.html"><button>Proceed to Payment</button></a>
      </div>
    </div>
  </body>
</html>
