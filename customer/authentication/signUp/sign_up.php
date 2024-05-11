<?php

$title = "Sign Up";
$style = "sign_up.css";

?>
<?php
require_once "../../navigation/header.php";
?>
<div class="sign-up-card">
    <!-- Sign-Up Form -->
    <div class="sign-up-form">
        <h2>Sign Up Here</h2>
        <p>Please fill in your details to create an account.</p>

        <form action="signUp_form-action.php" method="POST" enctype="multipart/form-data">
            <div class=" input-group">
                <h3>Name</h3>
                <input type="text" name="name" placeholder="" required>
            </div>
            <div class="input-group">
                <h3>Email</h3>
                <input type="email" name="email" placeholder="" required>
            </div>
            <div class="input-group">
                <h3>Phone Number</h3>
                <input type="text" name="phone" placeholder="" required>
            </div>
            <div class="input-group">
                <h3>Password</h3>
                <input type="password" name="password" placeholder="" required>
            </div>

            <div class="input-group">
                <h3>Confirm Password</h3>
                <input type="password" name="confirm_password" placeholder="" required>
            </div>
            <button type="submit">Create an Account</button>
        </form>

        <p class="login-text">Already have an account? <a href="/Furniture_Project/customer/authentication/logIn/log_in.php">Log in here</a></p>
    </div>

    <!-- Photo Section -->
    <div class="photo-section">
        <img src="signUpPic.jpg" alt="Photo">
    </div>
</div>
<?php
require_once "../../navigation/footer.php";
?>