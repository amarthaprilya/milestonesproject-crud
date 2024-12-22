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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Kuis Sederhana</title>
    <style>
        .header {
            background-color: #6c7a67; 
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: #fff; 
        }

        .nav_link {
            color: #fff;
            font-size: 1rem;
            text-decoration: none;
            padding: 5px 10px;
            transition: color 0.3s;
        }

        .nav_link:hover {
            color: #d4edda; 
        }

        .nav_toggle, .nav_close {
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .quiz-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            font-family: 'Roboto Slab', serif;
            position: relative;
        }
        .quiz-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .question {
            font-size: 1.2rem;
            color: #444;
            margin-bottom: 20px;
        }
        .options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        .option-btn {
            padding: 10px 20px;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s ease, color 0.3s ease;
        }
        .option-btn:hover {
            background: #0056b3;
            color: #fff;
        }
        .feedback {
            margin-top: 20px;
            font-size: 1.1rem;
            font-weight: bold;
            text-align: center;
        }
        .feedback.correct {
            color: green;
        }
        .feedback.wrong {
            color: red;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #007BFF;
            text-align: center;
        }
        #next-btn {
            display: none;
            margin-top: 20px;
            padding: 10px 20px;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            align-self: flex-end;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
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

    <main>
        <section class="quiz-section">
            <div class="quiz-container">
                <h1>Hiker's Quiz</h1>
                <div id="quiz-content"></div>
                <div class="feedback" id="feedback" style="display: none;"></div>
                <div class="result" id="result" style="display: none;"></div>
                <div class="button-container">
                    <button id="next-btn">Next Question</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="content">
            <div class="left box">
                <div class="topic">Contact us</div>
                <div class="phone">
                    <a href="#"><i class="fas fa-phone-volume"></i>+62 877-772-888</a>
                </div>
                <div class="phone">
                    <a href="#"><i class="fas fa-envelope"></i>hikemore@gmail.com</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="bottom">
            <p>Copyright &copy; 2024 <a href="#">Summit Seeker.</a> All Rights Reserved</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>