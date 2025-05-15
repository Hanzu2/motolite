<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoLite - Blog</title>
    <link rel="stylesheet" href="css/blog_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

<!-- Header with Logo -->
<nav class="navbar navbar-expand-lg text-uppercase">
  <div class="container d-flex align-items-center justify-content-between">
    
    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large" height="50">
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


<!-- Blog Section -->
<div class="main-container">
    <section class="blog-section">
        <h1 class="section-title">Latest from the Moto-Lite Blog</h1>

        <div class="blog-post">
            <h2 class="post-title">Performance Tuning Tips</h2>
            <p class="post-meta">Posted on April 15, 2025 by Team Moto-Lite</p>
            <p class="post-snippet">
                Discover essential tips to maximize your engine’s performance without compromising durability.
            </p>
            <a href="motolite_blog-performance-tuning.php" class="read-more">Read more &rarr;</a>
        </div>

        <div class="blog-post">
            <h2 class="post-title">Best Batteries for Off-Roading</h2>
            <p class="post-meta">Posted on April 10, 2025 by Tech Experts</p>
            <p class="post-snippet">
                Off-road riders need batteries that won’t give up in tough terrain. Here's our top picks...
            </p>
            <a href="motolite_blog-best-batteries.php" class="read-more">Read more &rarr;</a>
        </div>

        <div class="blog-post">
            <h2 class="post-title">How to Maintain Your Motorcycle Battery</h2>
            <p class="post-meta">Posted on April 2, 2025 by Moto-Lite Crew</p>
            <p class="post-snippet">
                Keep your battery in peak condition with this easy maintenance routine every rider should know.
            </p>
            <a href="motolite_blog-battery-maintenance.php" class="read-more">Read more &rarr;</a>
        </div>
    </section>
</div>

</body>
</html>
