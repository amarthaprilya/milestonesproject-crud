<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
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

    <style>        
        /* Navbar styling */
        .nav_menu {
            display: flex;
            align-items: center;
        }

        .nav_list {
            list-style: none;
            display: flex;
        }

        .nav_item {
            margin-right: 20px;
        }

        .nav_link {
            color: #fff;
            text-decoration: none;
        }

        .nav_actions {
            display: flex;
            align-items: center;
        }

        /* Styling user logo */
        .user-logo {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
        }

        /* Dropdown */
        .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            display: flex;
            align-items: center;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #575757;
        }

        /* Show dropdown when hovered */
        .dropdown:hover .dropdown-content {
            display: block;
        }

    </style>
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
                <!-- search button -->
                <i class="ri-search-line nav_search" id="search-btn"></i>

                <!-- login button or user dropdown based on login status -->
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <!-- Jika sudah login -->
                    <div class="dropdown">
                        <!-- <a href="#" class="ri-user-line nav_login"> -->
                            <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                            <!-- <img src="user-logo.png" alt="User Logo" class="ri-user-line nav_login"> -->
                            <!-- <a href="login.php"><i class="ri-user-line nav_login" id="login-btn"></i></a> -->
                        </a>
                        <div class="dropdown-content">
                            <a href="profile.php">Profile</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="login.php"><i class="ri-user-line nav_login" id="login-btn"></i></a>
                <?php endif; ?>

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
 
<!-- Main Section Start -->
 <home class="home" id="home">
    <div class="content">
        <h3>Why Limit Yourself?</h3>
        <h1>Experience the Magic of <span class="change-content"></span></h1>
        <p>Summit Seeker offers more than just a hike. We provide personalized itineraries, expert guides, and a commitment to sustainable travel. 
        <br>Whether you're seeking a challenging trek or a leisurely nature walk, we'll curate the perfect adventure for you.
        </p>
<!-- Additional Feature using JS -->
        <a href="quiz.php">
            <button class="button">Take Quiz</button>
        </a>
    </div>
 </home>
 <!-- End of Main Section -->

 <!-- End of Footer Section -->
    <script src="assets/js/main.js"></script>
</body>
</html>