<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motolite - Services</title>
    <link rel="stylesheet" href="css/service_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

<!-- Header with Logo -->
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

<!-- Main Service Content -->
<div class="service-section">
    <h1>Our Services</h1>
    <p>
        At Moto-Lite, we’re dedicated to delivering high-quality motorcycle batteries and expert service to support your riding experience. Whether you’re a casual weekend cruiser or a daily commuter, we’ve got your battery needs covered with premium products and dependable support.
    </p>

    <p>
        <strong>Battery Installation:</strong><br>
        Our team provides fast and reliable battery installation. We offer both on-site services and in-store installation at any of our authorized locations.
    </p>

    <p>
        <strong>Battery Check-Up:</strong><br>
        Not sure about your battery’s health? We offer free diagnostic checks to assess charge levels, voltage output, and general battery condition. This ensures your ride is always ready to go.
    </p>

    <p>
        <strong>Emergency Battery Replacement:</strong><br>
        Dead battery on the road? No worries. Our mobile units can deliver and replace your battery wherever you are (within service areas).
    </p>

    <p>
        <strong>Battery Maintenance & Advice:</strong><br>
        Want your battery to last longer? We provide practical tips and maintenance plans tailored to your bike’s usage. From charging habits to storage advice, we keep you powered up.
    </p>

    <p>
        <strong>Warranty & Support:</strong><br>
        All our batteries come with a warranty. Our support team is always here to answer your questions and handle replacements or service claims quickly and professionally.
    </p>

    <p>
        At Moto-Lite, we believe in power you can trust. Visit us or contact our service team to learn more about how we can support your ride — every mile of the way.
    </p>
</div>

</body>
</html>
