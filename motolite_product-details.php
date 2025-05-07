<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="css/product_details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large">
            </div>
            <div class="nav-wrapper">
                <nav class="navbar">
                    <ul>
                        <li><a href="index.php" class="index">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                    <div class="nav-right">
                        <a href="cart.html" class="cart-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <a href="login.html" class="login-btn">Log in/Sign up</a>
                        <a href="#" class="profile-icon">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>   
                </nav>
            </div>
        </div>
    </header>
    
    
    <main class="product-details">
        <!-- Gray Background Section -->
        <div class="product-section">
            <div class="product-container">
                <img src="engine.jpg" alt="Motor Engine" class="product-image">
                <div class="product-info">
                    <h1>All new Motor engine model Axe-6179A</h1>
                    <p class="product-description">High-performance engine with top-tier specifications for automotive enthusiasts.</p>
                    <h2 class="product-price">₱4999.99</h2> <!-- Changed $ to ₱ -->
                    <div class="button-group">
                        <button class="buy-button">Buy</button>
                        <button class="cart-button">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="script.js"></script>
</body>
</html>
