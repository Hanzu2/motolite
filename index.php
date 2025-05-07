<?php
// Connect to DB
$conn = new mysqli("localhost", "root", "", "motolite");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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

<!-- Main Content -->
<main class="main-container">
    <section class="categories">
        <div class="category-label-box">
            <h2>Category</h2>
            <div class="horizontal-line"></div>
        </div>
        <div class="category-box">
            <ul class="clickable-list">
                <li>
                    <a href="#" class="main-category" data-category="engine">Engines</a>
                    <ul class="sub-categories">
                        <li><a href="#" data-category="pistons">Pistons & Rings</a></li>
                        <li><a href="#" data-category="crankshafts">Crankshafts & Bearings</a></li>
                        <li><a href="#" data-category="camshafts">Camshafts & Valvetrain</a></li>
                        <li><a href="#" data-category="engine-gaskets">Engine Gaskets & Seals</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="main-category" data-category="electrical">Electrical & Ignition</a>
                    <ul class="sub-categories">
                        <li><a href="#" data-category="spark-plugs">Spark Plugs</a></li>
                        <li><a href="#" data-category="ignition-coils">Ignition Coils</a></li>
                        <li><a href="#" data-category="alternators">Alternators</a></li>
                        <li><a href="#" data-category="batteries">Batteries</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="main-category" data-category="fuel-system">Fuel System</a>
                    <ul class="sub-categories">
                        <li><a href="#" data-category="fuel-pumps">Fuel Pumps</a></li>
                        <li><a href="#" data-category="fuel-injectors">Fuel Injectors</a></li>
                        <li><a href="#" data-category="fuel-filters">Fuel Filters</a></li>
                        <li><a href="#" data-category="throttle-bodies">Throttle Bodies</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="main-category" data-category="exhaust-system">Exhaust System</a>
                    <ul class="sub-categories">
                        <li><a href="#" data-category="exhaust-manifolds">Exhaust Manifolds</a></li>
                        <li><a href="#" data-category="catalytic-converters">Catalytic Converters</a></li>
                        <li><a href="#" data-category="mufflers">Mufflers</a></li>
                        <li><a href="#" data-category="o2-sensors">O2 Sensors</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="main-category" data-category="brake-system">Brake System</a>
                    <ul class="sub-categories">
                        <li><a href="#" data-category="brake-pads">Brake Pads</a></li>
                        <li><a href="#" data-category="brake-rotors">Brake Rotors</a></li>
                        <li><a href="#" data-category="brake-calipers">Brake Calipers</a></li>
                        <li><a href="#" data-category="brake-fluid">Brake Fluid</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <div class="product-section">
        <h1 class="section-title">Products</h1>
        <div class="product-list" id="product-list"></div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        window.categoryLinks = document.querySelectorAll("[data-category]");
    });
</script>
<script src="js/home_page-script.js"></script>

</body>
</html>