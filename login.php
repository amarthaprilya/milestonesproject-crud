<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Prepare query to fetch user by email
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // User is authenticated
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_name'] = $user['first_name'];

        // Redirect to the homepage
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="./assets/images/vec3.jpg">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    
    <title>Hike More</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">

            <!-- <a href="#" class ="nav_logo"><img src="assets/images/vec5.jpg" alt=""></a> -->

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <div class="nav_item">
                        <a href="index.php" class="nav_link">Home</a>
                    </div>
                    <div class="nav_item">
                        <a href="packages.php" class="nav_link">Packages</a>
                    </div>                    
                    <div class="nav_item">
                        <a href="gallery.php" class="nav_link">Gallery</a>
                    </div>                    
                    <!-- <div class="nav_item"> -->
                        <!-- <a href="login.html" class="nav-link">Login/Register</a> -->
                    <!-- </div>                    -->
                    <div class="nav_item">
                        <a href="aboutus.php" class="nav_link">About Us</a>
                    </div>                    
                    <!-- <div class="nav_item"> -->
                        <!-- <a href="contactus.html" class="nav-link">Contact Us</a> -->
                    <!-- </div> -->
                </ul>

                <div class="nav_close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav_actions">
                <!-- search button -->
                 <i class="ri-search-line nav_search" id="search-btn"></i>
                <!-- login button -->
                 <a href="login.php"><i class="ri-user-line nav_login" id="login-btn"></i></a>
                 <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                 </div>
            </div>
        </nav>
    </header>

    <!-- Search -->
     <div class="search" id="search">
        <form action="#" class="search_form">
            <i class="ri-search-line search_icon"></i>
            <input type="search" placeholder="Search" class="search_input">
        </form>
        <i class="ri-close-line search_close" id="search-close"></i>
     </div>
<!-- Header End -->

<!-- start of register page -->

<div class="register" id="signup" style="display: none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="/Applications/XAMPP/xamppfiles/htdocs/hikemore/register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" id="fName" placeholder="First Name" required>
            <label for="fName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="password" required>
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
        <p class="or">
        ---------or---------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </form>
</div>

<!-- end of register page -->

<!-- start of login page -->

<div class="register" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="login.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="password" required>
            <label for="password">Password</label>
        </div>
        <p class="recover">
            <a href="recovery_password.php">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
        <p class="or">
        ---------or---------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </form>
</div>

<!-- end of login page -->

<!-- Start of Footer Section -->
<footer>
    <div class="content">
        <div class="left box">
            <div class="lower">
                <div class="topic">Contact us</div>
                <div class="phone">
                    <a href="#"><i class="fas fa-phone-volume"></i>+62 877-772-888"</a>
                </div>
                <div class="phone">
                    <a href="#"><i class="fas fa-envelope"></i>hikemore@gmail.com</a>
                </div>
            </div>
          </div>
        </div>

        <hr>
        <div class="bottom">
            <p>Copyright &copy; 2024 <a href="#">Summit Seeker</a> All Rights Reserved.</p>
        </div>
  </footer>

 <!-- End of Footer Section -->
    <script src="assets/js/main.js"></script>
</body>
</html>