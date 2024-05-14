<?php
require_once "../../database/connect.php";
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

if (!isset($_SESSION['user_id'])) {
  echo '<script>
        window.location.href = "/Furniture_Project/customer/authentication/logIn/log_in.php"
        </script>';
  exit();
}

$title = "Order History";
$style = "myOrders.css";
$script = "";

require_once "../navigation/header.php";

$userid = $_SESSION['user_id'];

// Fetch orders for the logged-in user
$orderQuery =
  "SELECT *, pm.paymentID AS pid, o.paymentID AS id, pm.paymentMethods AS payment 
  FROM orders AS o
  JOIN paymentmethod AS pm ON pm.paymentID = o.paymentID
  WHERE customerID = :userid ORDER BY order_date DESC";


$orderStmt = $pdo->prepare($orderQuery);
$orderStmt->execute(['userid' => $userid]);
$orders = $orderStmt->fetchAll(PDO::FETCH_ASSOC);


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

    <?php foreach ($orders as $order) : ?>
      <div class="order-history-card">
        <div class="order-info">
          <h2>Order ID: <?php echo $order['orderID']; ?></h2>
          <span>Order Date: <?php echo $order['order_date']; ?></span>
          <span>Status: <?php echo $order['status']; ?></span>
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
            <?php
            // Fetch order items for the current order
            $orderItemsQuery =
              "SELECT oi.*, p.product_Name as productName, p.product_brand as brand, p.product_img1 as imagePath
              FROM orderitem AS oi
              JOIN orders AS o ON o.orderID = oi.orderID
              JOIN products AS p ON oi.productID = p.productID
              WHERE oi.orderID = :orderID";
            $orderItemsStmt = $pdo->prepare($orderItemsQuery);
            $orderItemsStmt->execute(['orderID' => $order['orderID']]);
            $orderItems = $orderItemsStmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($orderItems as $item) : ?>
              <tr>
                <td><img src="<?= "../../images/" . $item['productName'] . $item['brand'] . "/" . $item['imagePath'] ?>" /></td>
                <td><?php echo $item['productName']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo number_format($item['unitPrice'], 2); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <div class="total">
          <p>Payment Method: <?php echo $order['payment']; ?></p>
          <h2>Total Price: $<?php echo number_format($order['total_amount'], 2); ?></h2>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <?php require_once("../navigation/footer.php"); ?>
</body>