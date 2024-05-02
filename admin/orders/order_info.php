<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .order-info-main-container {
      display: flex;
    }

    .order-info-main-container h2 {
      margin-left: 20%;
    }

    .form-container {
      max-width: 700px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }

    .left-column,
    .right-column {
      width: calc(50% - 20px);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="text"]:disabled,
    input[type="number"]:disabled,
    input[type="date"]:disabled {
      background-color: #f4f4f4;
    }

    button {
      background-color: #ff4d4d;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-left: 410px;
      margin-top: 20px;
    }

    button:hover {
      background-color: #e60000;
    }
  </style>
</head>

<body>
  <div class="order-info-main-container">
    <?php
    $page = "products";
    require_once "../dashboard/nav.php";
    ?>
    <div class="order-info-container">
      <h2>Order Information</h2>
      <div class="form-container">
        <div class="left-column">
          <div class="form-group">
            <label for="orderID">Order ID:</label>
            <input type="text" id="orderID" value="123456" disabled />
          </div>
          <div class="form-group">
            <label for="customerID">Customer ID:</label>
            <input type="text" id="customerID" value="789" disabled />
          </div>
          <div class="form-group">
            <label for="productID">Product ID:</label>
            <input type="text" id="productID" value="ABC123" disabled />
          </div>
          <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" value="Sample Product" disabled />
          </div>
          <div class="form-group">
            <label for="unitPrice">Unit Price:</label>
            <input type="text" id="unitPrice" value="$20.00" disabled />
          </div>
          <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" value="2" disabled />
          </div>

          <div class="form-group">
            <label for="totalPrice">Total Price:</label>
            <input type="text" id="totalPrice" value="$40.00" disabled />
          </div>
        </div>
        <div class="right-column">
          <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" id="status" value="Shipped" disabled />
          </div>
          <div class="form-group">
            <label for="shippingAddress">Shipping Address:</label>
            <input type="text" id="shippingAddress" value="123 Street, City, Country" disabled />
          </div>
          <div class="form-group">
            <label for="billingAddress">Billing Address:</label>
            <input type="text" id="billingAddress" value="456 Avenue, Town, Country" disabled />
          </div>
          <div class="form-group">
            <label for="paymentMethod">Payment Method:</label>
            <input type="text" id="paymentMethod" value="Credit Card" disabled />
          </div>
          <div class="form-group">
            <label for="deliveryDate">Delivery Date:</label>
            <input type="date" id="deliveryDate" value="2024-04-10" disabled />
          </div>
          <div class="form-group">
            <label for="trackingNumber">Tracking Number:</label>
            <input type="text" id="trackingNumber" value="123456789" disabled />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="text-align: center">
    <button>Delete</button>
  </div>
</body>

</html>