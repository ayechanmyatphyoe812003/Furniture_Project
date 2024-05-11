<?php

$title = "Change Password";
$style = "change.css";
$script = "";

require_once "../../database/connect.php";
// Retrieve error message from URL, if any
$errorMessage = isset($_GET['error']) ? $_GET['error'] : "";
?>

<?php
require_once "../navigation/header.php";
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
      <h1>Change Password</h1>
      <form action="change_password_form_action.php" method="post" enctype="multipart/form-data">

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" value="" />

        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" value="" />
        <?php if (isset($errorMessage)) : ?>
          <div class="error-message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        <button type="submit">Confirm</button>
      </form>
    </div>
  </div>
</div>
</body>

</html>