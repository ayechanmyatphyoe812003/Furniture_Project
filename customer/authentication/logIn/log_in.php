<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="../../style/main.css" />
    <link rel="stylesheet" href="../../style/login.css" />
</head>

<body>
    <?php
    require_once "../../navigation/header.php";
    ?>
    <div class=" log-in-card">
        <div class="log-in-card-content">
            <!-- Login Form -->
            <div class="login-form">
                <h1>Welcome back</h1>
                <p>Please log in to your account.</p>

                <form action="/login" method="POST">
                    <div class="input-group">
                        <h3>Email</h3>
                        <input type="email" name="email" placeholder="" required>
                    </div>
                    <div class="input-group">
                        <h3>Password</h3>
                        <input type="password" name="password" placeholder="" required>
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
</body>

</html>