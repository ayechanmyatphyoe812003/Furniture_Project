<?php

$title = "Log In";
$style = "login.css";

?>
<?php
require_once "../../navigation/header.php";
?>
<div class=" log-in-card">
    <div class="log-in-card-content">
        <!-- Login Form -->
        <div class="login-form">
            <h2>Welcome back</h2>
            <p>Please log in to your account.</p>

            <form action="login_form_action.php" method="POST">
                <div class="input-group">
                    <h3>Email</h3>
                    <input type="email" id="email" name="email" required>

                </div>
                <div class="input-group">
                    <h3>Password</h3>
                    <input type="password" id="password" name="password" required>
                </div>

                <a href="#" class="forgot-password">Forgot password?</a>

                <button type="submit">Log In</button>
            </form>

            <p class="sign-up-text">Don't have an account? <a href="../signUp/sign_up.php">Sign up for free</a></p>
        </div>

        <!-- Photo -->
        <div class="photo-section">
            <img src="logInPic.jpg" alt="Photo">
        </div>
    </div>
</div>

<?php
require_once "../../navigation/footer.php";
?>