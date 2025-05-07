<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoLite Registration</title>
    <link rel="stylesheet" href="css/styles_designs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Moto-Lite Logo in the top-left corner -->
    <img src="images/Motolite_Logo.png" alt="Moto-Lite Logo" class="logo-large">

    <!-- Profile Icon -->
    <div class="profile-icon">
        <i class="fas fa-user"></i> <!-- FontAwesome user icon -->
    </div>

    <div class="container">
        <div class="registration-box">
            <form action="register.php" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" required>
            
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Example@gmail.com" required>
            
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <img src="path/to/your/eye-icon.png" alt="Show Password" class="eye-icon" onclick="togglePassword()">
                </div>
            
                <div class="gender">
                    <label>Gender:</label>
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female" required>
                    <label for="female">Female</label>
                </div>
            
                <button type="submit" class="btn">Sign in</button>
            </form>            
            <p>Already have an account? <a href="login.php">Log in here</a></p>
        </div>
    </div>

    <script src="js/functions.js"></script>
</body>
</html>