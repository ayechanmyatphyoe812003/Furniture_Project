<?php

$title = "Order History";
$style = "myOrders.css";
$script = "";

require_once "../../database/connect.php";
?>
<?php
require_once "../navigation/header.php";
?>

<body>
  <!-- Main content area -->
  <div class="main-profile-content">
    <div class="links">
      <form action="">
        <a href="user.php">My Profile</a>
        <a href="myOrders.php" class="active">My Orders</a>
      </form>
    </div>
    <div class="order-history-card">
      <div class="order-info">
        <h2>Order ID : 1111 </h2>
        <span>Order Date : 8/8/8</span>
        <span>Status : Pending </span>
      </div>
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Items</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="" alt="stand" /></td>
            <td>chair</td>
            <td>3</td>
            <td>$250.00</td>
          </tr>
          <tr>
            <td><img src="" alt="chair" /></td>
            <td>bed</td>
            <td>1</td>
            <td>$150.00</td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
      <div class="total">
        <p>Payment Method: </p>
        <h2>Total Price : $ 10000.00</h2>
      </div>
    </div>
  </div>
  <?php require_once("../navigation/footer.php"); ?>