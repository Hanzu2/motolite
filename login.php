<?php
session_start();
if(isset($_SESSION["user_id"])){
    header("location: index.php");
}

require 'config.php';
require 'idiorm.php';

ORM::configure('mysql:host='.DB_HOST.';dbname='.DB_NAME);
ORM::configure('username', USERNAME);
ORM::configure('password', PASSWORD);

if ($_POST){
    $login = ORM::for_table("users")->where("email_address", $_POST["email_address"])->where("password", $_POST["password"])->find_one();
    $_SESSION["login"]= true;
    // $_SESSION["user_id"]= $login->id();
    $_SESSION["user_id"]= true;

    header("location: index.php");

}
// $conn = new mysqli("localhost", "root", "", "moto_lite");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $email = $_POST['email'];
// $password = $_POST['password'];

// $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");

// if (!$stmt) {
//     die("Prepare failed: " . $conn->error);
// }

// $stmt->bind_param("ss", $email, $password);
// $stmt->execute();
// $result = $stmt->get_result();

// if ($result->num_rows === 1) {
//     $_SESSION['logged_in'] = true;
//     $_SESSION['email'] = $email;
//     header("Location: index.php");
//     exit();
// } else {
//     echo "Invalid login!";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moto-Lite Login</title>
    <link rel="stylesheet" href="css/styles_designs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Moto-Lite Logo in the top-left corner -->
    <img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large">

    <!-- Profile Icon -->
    <div class="profile-icon">
        <i class="fas fa-user"></i> <!-- FontAwesome user icon -->
    </div>

    <div class="container">
        <div class="login-box">
            <form action="login.php" method="POST">
                <label for="email_address">Email</label>
                <input type="text" id="email_address" name="email_address" placeholder="Email" required>
            
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <!-- Eye icon for show/hide password -->
                    <img src="path/to/your/eye-icon.png" alt="Show Password" class="eye-icon" onclick="togglePassword()">
                </div>
            
                <button type="submit" class="btn">Log in</button>
            </form>
            <p>Don't have an account? <a href="motolite_registration.php">Sign up here</a></p>
        </div>
    </div>

    <script src="functions.js"></script>
</body>
</html>