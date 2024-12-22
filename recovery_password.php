<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="./assets/images/vec3.jpg">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <title>Recover Password</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
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
                    <div class="nav_item">
                        <a href="aboutus.php" class="nav_link">About Us</a>
                    </div>
                </ul>

                <div class="nav_close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav_actions">
                <a href="login.php"><i class="ri-user-line nav_login" id="login-btn"></i></a>
                <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- Recover Password Section -->
    <div class="register" id="recoverPassword">
        <h1 class="form-title">Recover Password</h1>
        <form method="post" action="update_password.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="newPassword" id="newPassword" placeholder="New Password" required>
                <label for="newPassword">New Password</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
                <label for="confirmPassword">Confirm Password</label>
            </div>
            <input type="submit" class="btn" value="Update Password" name="updatePassword">
        </form>
    </div>
    <!-- End of Recover Password Section -->

    <!-- Footer -->
    <footer>
        <div class="bottom">
            <p>Copyright &copy; 2024 <a href="#">Hike More.</a> All Rights Reserved.</p>
        </div>
    </footer>
    <!-- End of Footer -->
</body>
</html>
