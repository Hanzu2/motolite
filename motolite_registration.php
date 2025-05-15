<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoLite Registration</title>
    <link rel="stylesheet" href="css/styles_designs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <!-- Moto-Lite Logo in the top-left corner -->
    <img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large">

    <!-- Profile Icon -->

    <div class="container">
        <div class="registration-box">
            <form action="register.php" method="POST">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
            
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
            
                <label for="middle_name">Middle Name</label>
                <input type="text" id="middle_name" name="middle_name" placeholder="Middle Name" required>
            
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required>
            
                <label for="address1">Address 1</label>
                <input type="text" id="address1" name="address1" placeholder="Address 1" required>
            
                <label for="address2">Address 2</label>
                <input type="text" id="address2" name="address2" placeholder="Address 2" required>
            
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="City" required>
                
                <label for="country">Country</label>
                <input type="text" id="country" name="country" placeholder="Country" required>
                
                <label for="zip_code">Zip Code</label>
                <input type="text" id="zip_code" name="zip_code" placeholder="Zip Code" required>
                
                <label for="email_address">Email</label>
                <input type="email" id="email_address" name="email_address" placeholder="Example@gmail.com" required>
                
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <img src="path/to/your/eye-icon.png" alt="Show Password" class="eye-icon" onclick="togglePassword()">
                </div>
            
                <button type="submit" class="btn">Sign in</button>
            </form>            
            <p>Already have an account? <a href="login.php">Log in here</a></p>
        </div>
    </div>

    <script src="js/functions.js"></script>
</body>
</html>