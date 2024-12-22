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
    
    <title>Summit Seeker</title>
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
                    <i class="ri-search-line nav_search" id="search-btn"></i>
                    <a href="login.php"><i class="ri-user-line nav_login" id="login-btn"></i></a>
                    <div class="nav_toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>
    
        <div class="search" id="search">
            <form action="#" class="search_form">
                <i class="ri-search-line search_icon"></i>
                <input type="search" placeholder="Search" class="search_input">
            </form>
            <i class="ri-close-line search_close" id="search-close"></i>
        </div>
    
        <!-- About Us Section -->
        <section id="aboutus" class="about_us">
            <h2><span>Meet Your</span> Best Hiking Partner</h2>
            <img src="assets/images/aboutus.jpg" alt="About Us">
            <div class="content">
                <h3>Escape to nature with us</h3>
                <p>
                    At Summit Seeker, we believe that every hiker deserves a unique experience. Our personalized itineraries cater to all skill levels, from beginner to expert. We handle all the logistics, from accommodations to transportation, so you can focus on the journey. Relax and enjoy the ride as we take care of every detail.
                </p>
                <p>
                    Summit Seeker also committed to sustainable tourism practices, minimizing our impact on the environment. We partner with local communities and support conservation efforts. By choosing us, you're not just hiking; you're making a positive difference.
                </p>
                <h4>If you have more questions, feel free to hit us up on our email or WhatsApp below.</h4>
            </div>
        </section>
    
        <footer>
            <div class="content">
                <div class="left box">
                    <div class="topic">Contact us</div>
                    <div class="phone">
                        <a href="#"><i class="fas fa-phone-volume"></i>+62 877-772-888</a>
                    </div>
                    <div class="phone">
                        <a href="#"><i class="fas fa-envelope"></i>summitseekere@gmail.com</a>
                    </div>
                </div>
                
                <div class="right box">
                    <form action="#">
                        <input type="text" placeholder="enter your email address">
                        <input type="submit" value="Send">
                        <div class="social">
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="bottom">
                <p>Copyright &copy; 2024 <a href="#">Summit Seeker</a> All Rights Reserved</p>
            </div>
        </footer>
    <script src="assets/js/main.js"></script>
    </body>
    </html>