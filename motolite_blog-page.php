<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoLite - Blog</title>
    <link rel="stylesheet" href="css/blog_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Dropdown.css">
</head>
<body>

<!-- Header with Logo -->
<img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large">

<!-- Cart and Login/Signup Box -->
<div class="auth-cart-container">
    <div class="cart-box">
        <a href="cart_menu.php"><i class="fas fa-shopping-cart"></i> Cart</a>
    </div>
    <div class="auth-box">
        <a href="#"><i class="fas fa-user"></i> Log in/Sign up</a>
    </div>
</div>

<!-- Navigation Bar -->
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="motolite_blog-page.php">Blog</a></li>
        <li><a href="motolite_service-page.php">Service</a></li>
        <li><a href="motolite_contact-page.php">Contacts</a></li>
        <li><a href="motolite_about-page.php">About us</a></li>
    </ul>
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
