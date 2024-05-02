<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="../../style/style.css" />
</head>

<body>
    <div class="sign-up-card">
        <div class="sign-up-card-content">
            <!-- Sign-Up Form -->
            <div class="sign-up-form">
                <h2>Sign Up Here</h2>
                <p>Please fill in your details to create an account.</p>

                <form action="/signup" method="POST">
                    <div class="input-group">
                        <h3>Name</h3>
                        <input type="text" name="name" placeholder="" required>
                    </div>
                    <div class="input-group">
                        <h3>Email</h3>
                        <input type="email" name="email" placeholder="" required>
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

                <p class="login-text">Already have an account? <a href="#">Log in here</a></p>
            </div>

            <!-- Photo Section -->
            <div class="photo-section">
                <img src="signUpPic.jpg" alt="Photo">
            </div>
        </div>
    </div>
</body>