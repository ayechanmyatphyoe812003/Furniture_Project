<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Barlow:wght@200&family=Quicksand:wght@300..700&display=swap");

        body {
            font-family: "Quicksand", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: 1px solid black;
            border-radius: 3px;
            background-color: white;
            color: black;
            cursor: pointer;
            font-size: 1rem;
        }

        .form-group button:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        session_start();
        ?>
        <h2>Admin Login</h2>
        <form action="login_form_action.php" method="post">
            <div class="form-group">
                <label for="admin_name">Admin Name:</label>
                <input type="text" id="admin_name" name="admin_name" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button>Submit</button>
            </div>
        </form>
    </div>
</body>

</html>