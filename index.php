<?php
require 'config.php';
require 'idiorm.php';

ORM::configure('mysql:host='.DB_HOST.';dbname='.DB_NAME);
ORM::configure('username', USERNAME);
ORM::configure('password', PASSWORD);

// Connect to DB
// $conn = new mysqli("database", "mitsumi", "mitsumi", "motolite");
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoLite Home</title>
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Dropdown.css">
</head>
<body>

<!-- Header -->
<img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large">

<!-- Cart and Login/Signup Box -->
<div class="auth-cart-container">
    <!-- Cart Box -->
    <div class="cart-box">
        <a href="cart_menu.php"><i class="fas fa-shopping-cart"></i> Cart</a>
    </div>
    <!-- Login/Signup Box -->
    <div class="auth-box">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
            <!-- If logged in, show logout -->
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a>
        <?php else: ?>
            <!-- If not logged in, show login -->
            <a href="login.php"><i class="fas fa-user"></i> Log in/Sign up</a>
        <?php endif; ?>
    </div>
</div>

<!-- Nav Bar -->
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="motolite_blog-page.php">Blog</a></li>
        <li><a href="motolite_service-page.php">Service</a></li>
        <li><a href="motolite_contact-page.php">Contacts</a></li>
        <li><a href="motolite_about-page.php">About us</a></li>
    </ul>
</nav>

<?php
    $page = !empty($_GET['page']) ? $_GET['page'] : "index";

    require_once 'pages/'.$page.'.php';
?>



</body>
</html>