<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performance Tuning Tips</title>
    <link rel="stylesheet" href="css/blog_page.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

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


<!-- Blog Article Content -->
<div class="blog-section">
    <article class="blog-post">
        <h1 class="post-title">Performance Tuning Tips</h1>
        <p class="post-meta">Posted on April 15, 2025 by Team Moto-Lite</p>

        <div class="post-snippet">
            <p>
                Looking to get the most out of your motorcycle’s performance? Whether you’re prepping for the track or just want a more responsive ride, fine-tuning your machine can make all the difference. Here are some practical and effective tips every rider should consider.
            </p>

            <h2>1. Upgrade Your Air Intake</h2>
            <p>
                A high-performance air filter or intake system can help your engine breathe better, improving throttle response and power output.
            </p>

            <h2>2. Rejet or Remap Your Fuel System</h2>
            <p>
                When you modify your air intake or exhaust, your fuel system must be adjusted to match.
            </p>

            <h2>3. Optimize Your Exhaust System</h2>
            <p>
                Swapping out your stock exhaust for a performance one can reduce backpressure and boost horsepower.
            </p>

            <h2>4. Fine-Tune Suspension</h2>
            <p>
                Adjust preload, rebound, and compression settings based on your weight and riding style.
            </p>

            <h2>5. Regular Maintenance</h2>
            <p>
                Clean filters, inspect chain tension, use high-quality oil — all of it matters!
            </p>

            <h2>6. Don’t Forget the Tires</h2>
            <p>
                Choose the right compound and maintain proper pressure. Good traction = good performance.
            </p>

            <p>
                Tuning isn’t just about speed. It’s about control, safety, and a smoother, more enjoyable ride.
            </p>

            <a href="motolite_blog-page.php" class="read-more">&larr; Back to Blog</a>
        </div>
    </article>
</div>

</body>
</html>
