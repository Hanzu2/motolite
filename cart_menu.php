<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Moto-Lite</title>
    <link rel="stylesheet" href="css/cart_menu.css">
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
                            <li><a href="motolite_blog-page.php">Blog</a></li>
                            <li><a href="motolite_service-page.php">Service</a></li>
                            <li><a href="motolite_contact-page.php">Contacts</a></li>
                            <li><a href="motolite_about-page.php">About us</a></li>
                        </ul>
                        <div class="nav-right">
                            <a href="cart_menu.php" class="cart-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <a href="login.php" class="login-btn">Log in/Sign up</a>
                            <a href="#" class="profile-icon">
                                <i class="fas fa-user"></i>
                            </a>
                        </div>   
                    </nav>
                </div>
            </div>
        </header>

    <!-- Cart Section -->
    <main class="cart-page">
        <div class="cart-container">
            <h2>Items</h2>
            <div class="cart-items">
                <!-- This will be empty by default -->
                <p class="empty-cart-message">Your cart is currently empty.</p>
            </div>
            
            <hr>

            <!-- Cart Summary (Hidden when empty) -->
            <div class="cart-summary hidden">
                <p>Congrats, you enabled free shipping.</p>
                <h3>Total: ₱0.00</h3>
                <button class="checkout-button disabled" disabled>Check out</button>
            </div>
        </div>
    </main>

</body>
</html>
