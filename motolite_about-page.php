<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motolite - About Us</title>
    <link rel="stylesheet" href="css/about_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

<!-- Header with Logo -->
<nav class="navbar navbar-expand-lg text-uppercase">
  <div class="container d-flex align-items-center justify-content-between">
    
    <!-- Logo -->
    <a class="navbar-brand">
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


<!-- About Us Section -->
<section class="about-us-section">
    <div class="about-us-content">
        <h1>About Us</h1>
        <p>
            Moto-Lite is a leading provider of top-quality motorcycle batteries, offering a wide range of products to keep your ride running smoothly. 
            With over 15 years of experience in the industry, we pride ourselves on delivering high-performance batteries that exceed customer expectations. 
            Our mission is to power your ride with reliability, innovation, and exceptional customer service.
        </p>
        <p>
            We are a team of passionate motorcycle enthusiasts and technical experts, committed to making your motorcycle experience better and more efficient. 
            At Moto-Lite, we prioritize quality, customer satisfaction, and sustainability. Our products undergo rigorous testing to ensure they meet the highest industry standards.
        </p>
        <p>
            Throughout the years, we've been recognized for our dedication to excellence. We have achieved numerous milestones, including:
        </p>
        <ul>
            <li>Successfully shipping over 500,000 batteries worldwide.</li>
            <li>Partnerships with leading motorcycle brands and retailers.</li>
            <li>Our batteries powering championship-winning motorcycles in competitive racing events.</li>
            <li>A commitment to reducing environmental impact through eco-friendly practices and sustainable production.</li>
        </ul>
        <p>
            We continue to innovate and strive for excellence, with a focus on providing our customers with top-of-the-line products and services. 
            Join the Moto-Lite family today, and experience the difference that quality, performance, and passion can make.
        </p>
    </div>
</section>

</body>
</html>
