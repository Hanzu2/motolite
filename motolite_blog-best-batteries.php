<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Batteries for Off-Roading</title>
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


<!-- Blog Article Content -->
<div class="blog-section">
    <article class="blog-post">
        <h1 class="post-title">Best Batteries for Off-Roading</h1>
        <p class="post-meta">Posted on April 17, 2025 by Team Moto-Lite</p>

        <div class="post-snippet">
            <p>
                Off-roading pushes your vehicle — and your battery — to the limit. Whether you're tearing through trails or crossing water hazards, you need a battery that’s built for endurance, vibration resistance, and lasting performance.
            </p>

            <h2>1. What Makes a Battery Off-Road Ready?</h2>
            <p>
                Look for high cold-cranking amps (CCA), deep-cycle capabilities, sealed AGM or gel tech, and resistance to impact or vibration.
            </p>

            <h2>2. Top Choices on the Market</h2>
            <ul>
                <li><strong>Optima YellowTop:</strong> Dual-purpose power for starting and deep cycling.</li>
                <li><strong>Odyssey PC680:</strong> Military-grade build and high vibration resistance.</li>
                <li><strong>Motolite Off-Road Series:</strong> Specially made for extreme terrain riders (you know we had to plug it!).</li>
            </ul>

            <h2>3. Maintenance Tips</h2>
            <p>
                Even the toughest battery can fail if neglected. Always secure your battery properly, clean terminals, and keep it charged — especially if you're not riding often.
            </p>

            <p>
                Choosing the right battery is just as important as picking the right tires or suspension — it’s the power behind your adventure.
            </p>

            <a href="motolite_blog-page.php" class="read-more">&larr; Back to Blog</a>
        </div>
    </article>
</div>

</body>
</html>
