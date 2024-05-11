<?php
require_once "../../../database/connect.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];

    if ($password === $confirm) {
        if ($name == "") {
            echo "Name is required";
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Prepare and execute the SQL query
            $sql = "INSERT INTO customer VALUES ('','$name','$email','$phone','$hashedPassword')";
            try {
                $statement = $pdo->prepare($sql);
                $statement->execute();
                // Redirect after successful signup
                echo "<script>window.location='/Furniture_project/customer/user/user.php'</script>";
                exit(); // Ensure script stops execution after redirection
            } catch (PDOException $error) {
                echo $error->getMessage();
            }
        }
    } else {
        echo "Passwords do not match";
    }
}
