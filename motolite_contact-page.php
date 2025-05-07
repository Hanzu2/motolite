<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact_page.css">
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

<!-- Contact Info Section -->
<div class="contact-section">
    <h1>Get in Touch</h1>

    <p><strong>Address:</strong><br>
    Moto-Lite Headquarters<br>
    742 Velocity Avenue, Unit 5<br>
    Speedtown, ST 42001, Philippines</p>

    <p><strong>Phone:</strong><br>
    (+63) 912 345 6789</p>

    <p><strong>Email:</strong><br>
    support@motolite.ph</p>

    <p><strong>Customer Hours:</strong><br>
    Monday – Saturday, 9:00 AM to 6:00 PM</p>

    <p>If you have questions about our services, products, or just want to say hello — feel free to reach out! Our team is always happy to assist.</p>

    <!-- Optional contact form -->
    <form class="contact-form">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>





<form action="contact-form-handler.php" method="POST" class="contact-form">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="5" required></textarea>

    <button type="submit">Send Message</button>
</form>


</body>
</html>
