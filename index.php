<?php
session_start();

if(!$_SESSION["user_id"]){
    header("location: login.php");
}
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
    <title>MotoLite - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home_page.css">
</head>
<body>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg text-uppercase">
  <div class="container d-flex align-items-center justify-content-between">
    
    <!-- Logo -->
    <a class="navbar-brand">
      <img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large" >
    </a>

    <!-- Toggler for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Links and Buttons -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav align-items-center">
        <a class="nav-link px-lg-4 rounded" href="index.php">Home</a>
        <a class="nav-link px-lg-4 rounded" href="motolite_blog-page.php">Blog</a>
        <a class="nav-link px-lg-4 rounded" href="motolite_service-page.php">Service</a>
        <a class="nav-link px-lg-4 rounded" href="motolite_contact-page.php">Contacts</a>
        <a class="nav-link px-lg-4 rounded" href="motolite_about-page.php">About us</a>

        <!-- Cart -->
        <div class="cart-box ms-lg-3">
        <a href="cart_menu.php"><i class="fas fa-shopping-cart"></i> Cart</a>
        </div>

        <!-- Auth -->
        <div class="auth-box ms-lg-3">
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a>
        <?php else: ?>
            <a href="login.php"><i class="fas fa-user"></i> Log in/Sign up</a>
        <?php endif; ?>
        </div>
    </div>
    </div>
</div>
</nav>


<?php
    $page = !empty($_GET['page']) ? $_GET['page'] : "index";

    require_once 'pages/'.$page.'.php';
?>



</body>
</html>