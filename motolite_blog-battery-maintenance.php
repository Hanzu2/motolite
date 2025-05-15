<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Maintain Your Motorcycle Battery</title>
    <link rel="stylesheet" href="css/blog_page.css">
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


<!-- Blog Article Content -->
<div class="blog-section">
    <article class="blog-post">
        <h1 class="post-title">How to Maintain Your Motorcycle Battery</h1>
        <p class="post-meta">Posted on April 19, 2025 by Team Moto-Lite</p>

        <div class="post-snippet">
            <p>
                Your motorcycle battery is the heart of your bike’s electrical system. Whether you ride daily or only on weekends, proper battery care keeps your bike running strong.
            </p>

            <h2>1. Keep It Charged</h2>
            <p>
                Use a trickle charger if your bike sits for more than a week. Don’t let it drop below 12.4V — anything less shortens its lifespan.
            </p>

            <h2>2. Clean the Terminals</h2>
            <p>
                Dirt, grease, and corrosion can prevent a proper connection. Use a wire brush and a solution of baking soda and water to clean terminals.
            </p>

            <h2>3. Inspect for Damage</h2>
            <p>
                Cracks or bulges in the battery casing are signs of overheating or swelling — replace immediately if you see this.
            </p>

            <h2>4. Secure the Mounting</h2>
            <p>
                A loosely mounted battery can rattle and damage itself. Always make sure it’s tightly strapped or bolted in.
            </p>

            <h2>5. Check Water Levels (if applicable)</h2>
            <p>
                If you're using a conventional flooded battery, check and top off the water level with distilled water monthly.
            </p>

            <p>
                Routine checks and a few minutes of care can add years to your battery’s life — and help you avoid being stranded.
            </p>

            <a href="motolite_blog-page.php" class="read-more">&larr; Back to Blog</a>
        </div>
    </article>
</div>

</body>
</html>
