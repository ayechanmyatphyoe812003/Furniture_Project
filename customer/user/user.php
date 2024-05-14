<?php

$title = "User Profile";
$style = "profile.css";
$script = "";

require_once "../../database/connect.php";
?>
<?php
require_once "../navigation/header.php";
if (!isset($_SESSION['user_id'])) {
  echo '<script>
    window.location.href = "/Furniture_Project/customer/authentication/logIn/log_in.php"
    </script>';
  exit();
}
?>

<?php
// session_start();
if (!isset($_SESSION['user_id'])) {
  echo '<script>
    window.location.href = "/Furniture_Project/customer/authentication/logIn/log_in.php"
    </script>';
  exit();
} ?>
<?php
// Retrieve customer information from the database based on customerID
$customerID = $_SESSION['user_id'];

$stmt = $pdo->prepare("SELECT Customer_Name, Customer_Email, Customer_Phone FROM customer WHERE customerID = :customerID");
$stmt->execute(['customerID' => $customerID]);

// Fetch customer information
$customer = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if customer exists
if (!$customer) {
  // Handle case where customer does not exist
  echo "Customer does not exist.";
  exit();
}

// Retrieve customer details
$customerName = $customer['Customer_Name'];
$customerEmail = $customer['Customer_Email'];
$customerPhone = $customer['Customer_Phone'];

?>


<div class="user-profile-container">

  <!-- Main content area -->
  <div class="main-profile-content">
    <div class="links">
      <form action="">
        <a href="user.php" class="active">My Profile</a>
        <a href="myOrders.php">My Orders</a>
      </form>

    </div>
    <div class="profile-card">
      <form action="user_form_action.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $customerName ?>" readonly />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $customerEmail ?>" readonly />

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?= $customerPhone ?>" readonly />

        <button type="button" id="editButton">Edit Profile</button>
        <button type="submit" id="updateButton" style="display: none;">Update Information</button>
        <a href="changePassword.php">Change Password</a>
        <a href="logOut.php">Log Out</a>
      </form>
    </div>
  </div>
</div>

<script>
  document.getElementById('editButton').addEventListener('click', function() {
    var inputs = document.querySelectorAll('input[readonly]');
    for (var i = 0; i < inputs.length; i++) {
      inputs[i].removeAttribute('readonly');
    }
    document.getElementById('editButton').style.display = 'none';
    document.getElementById('updateButton').style.display = 'block';
  });
</script>

<?php require_once("../navigation/footer.php"); ?>