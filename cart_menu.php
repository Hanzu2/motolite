<?php
session_start();
if(!$_SESSION["user_id"]){
    header("location: login.php");
    exit;
}
$user_id = $_SESSION["user_id"];

require 'config.php';
require 'idiorm.php';

ORM::configure('mysql:host='.DB_HOST.';dbname='.DB_NAME);
ORM::configure('username', USERNAME);
ORM::configure('password', PASSWORD);

    if(!$_SESSION["login"]){
        header("location: index.php");
    }

    $cart = ORM::for_table("cart_master")->where("user_id", $_SESSION["user_id"])->where("cart_status", "O")->find_one();
    $details = ORM::for_table('cart_details')
    ->join('products', array('products.id', '=', 'cart_details.product_id'))->where("cart_id", $cart->id)
    ->find_many();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Motolite</title>
    <link rel="stylesheet" href="css/cart_menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase">
    <div class="container">
    <img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link px-lg-4 rounded" href="index.php"><?php echo $user_id; ?>Home</a>
                <a class="nav-link px-lg-4 rounded" href="motolite_blog-page.php">Blog</a>
                <a class="nav-link px-lg-4 rounded" href="motolite_service-page.php">Service</a>
                <a class="nav-link px-lg-4 rounded" href="motolite_contact-page.php">Contacts</a>
                <a class="nav-link px-lg-4 rounded" href="motolite_about-page.php">About us</a>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="cart-box">
        <a href="cart_menu.php"><i class="fas fa-shopping-cart"></i> Cart</a>
    </div>
    </div>
        <div class="container">
        <div class="auth-box">
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
            <!-- If logged in, show logout -->
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a>
        <?php else: ?>
            <!-- If not logged in, show login -->
            <a href="login.php"><i class="fas fa-user"></i> Log in/Sign up</a>
        <?php endif; ?>
        </div>
        </div>
</nav>

    <!-- Cart Section -->

    <main class="cart-page">
        <div class="cart-container">
            <h2>Items</h2>
            <?php if(!$details){
                    
            ?>
            <div class="cart-items">
                <!-- This will be empty by default -->
                <p class="empty-cart-message">Your cart is currently empty.</p>
            </div>

            <?php } else{ ?>
                <?php 
                    $cart_details = ORM::for_table('cart_item')
                        ->join('cart_details', array('cart_details.id', '=', 'cart_item.id'))
                        // ->join('', array('categories.id', '=', 'products_to_categories.category_id'))
                        ->group_by("cart_status")
                        ->find_one();
                    ?>
            <?php } ?>
            <hr>

            <!-- Cart Summary (Hidden when empty) -->
            <div class="cart-summary hidden">
                <p>Congrats, you enabled free shipping.</p>
                <h3>Total: <?php echo $cart->total; ?></h3>
                
                <button class="checkout-button disabled" disabled>Check out</button>
                
            </div>
        </div>
    </main>

</body>
</html>
