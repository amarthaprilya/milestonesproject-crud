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
                    <!-- <div class="nav_item"> -->
                        <!-- <a href="login.php" class="nav-link">Login/Register</a> -->
                    <!-- </div>                    -->
                    <div class="nav_item">
                        <a href="aboutus.php" class="nav_link">About Us</a>
                    </div>                    
                    <!-- <div class="nav_item"> -->
                        <!-- <a href="contactus.php" class="nav-link">Contact Us</a> -->
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


 <!-- Packages Start -->
  <section class="packages" id="packages">
    <div class="heading">
        <h3><span>We Offer</span> Best Services</h3>
    </div>

    <div class="card-content">
        <div class="row">
            <div class="card-body">
                <div class="img">
                    <img src="./assets/images/gamfix2.jpg" alt="let's pretend this is Mt. Gamkonora">
                </div>
                <h3>Mt. Gamkonora <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </h3>
                <p>A symphony of nature's raw power and serene beauty unfolds as you embark on a journey to conquer Mount Gamkonora.
                Enjoy an overnight getaway to this one of the 5 active volcanoes of Halmahera arc from Jakarta, traveling by plane. Experience camping, bushwalking, and stargazing before returning to Jakarta.
                Trouble-free transportation? Awesome accommodations? Epic experiences? You'll find 'em all included on this trip (and so much more).
                </p>
                <h5>Rp 8,500,000 <button>Book</button></h5>
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="img">
                    <img src="./assets/images/kerinci.jpg" alt="let's pretend this is Mt. Kerinci">
                </div>
                <h3>Mt. Kerinci<i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </h3>
                <p>Mount Kerinci, the highest volcano in Southeast Asia, offers a thrilling and unforgettable experience for nature enthusiasts and adventure seekers.
                   Embark on an unforgettable journey through Jambi on our comfortable bus tour.
                   Trouble-free transportation? Awesome accommodations? Epic experiences? You'll find 'em all included on this trip (and so much more).
                </p>
                <h5>Rp 2,500,000 <button>Book</button></h5>
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="img">
                    <img src="./assets/images/rinjani.jpg" alt="Mt Rinjani">
                </div>
                <h3>Mt. Rinjani<i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </h3>
                <p>A majestic volcano located on the island of Lombok in Indonesia is a popular destination for hikers and adventurers, offering a challenging yet rewarding trek to its summit. The journey takes you through diverse landscapes, from lush rainforests to volcanic terrains, and culminates in breathtaking panoramic views of the surrounding area.
                You'll spend two days and one night for mount Rinjani trekking Starting from sembalun village to crater rim sembalun, summit and back to sembalun village.
                </p>
                <h5>Rp 2,500,000 <button>Book</button></h5>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="img">
                    <img src="./assets/images/gal3.jpg" alt="Mt Latimojong">
                </div>
                <h3>Mt. Latimojong<i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </h3>
                <p>Sulawesi offers some extraordinary wildlife, with a hybrid of Australian and Asian features. Spot them on this guided private 2 days 1 night trip to Mount Latimojong, with convenient round-trip transfers from your Makasar hotel. Look out for black crested macaques, endemic species such as the Sulawesi bear cuscus, the Sulawesi dwarf kingfisher, and the Sulawesi hornbill, and view nocturnal tarsiers nestled inside a tree.</p>
                <h5>Rp 3,500,000 <button>Book</button></h5>
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="img">
                    <img src="./assets/images/semerufix.jpg" alt="Mt Semeru">
                </div>
                <h3>Mt. Semeru<i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </h3>
                <p>Highest mountain on the island of Java, Mount Semeru is one of the most popular hiking destinations in Indonesia.
                    We provide a 3 Days and 2 Nights Mount Semeru trekking tour package. We will pick you up at your Hotel in Malang.
                </p>
                <h5>Rp 2,100,000 <button>Book</button></h5>
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="img">
                    <img src="./assets/images/car.jpg" alt="Carstensz">
                </div>
                <h3>Carstensz Pyramid Expedition<i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </h3>
                <p>Carstensz Pyramid is one of the most challenging mountains to climb on earth, with its remote location, rugged terrain and high altitude testing all who attempt it.
                    Take a thrilling 10-day mountaineering program with an expert guide.
                    The price includes the guiding fee, the flights in and out of Bali, two nights of accommodation in Bali before and after the trip, and all accommodation and food during the trek.
                </p>
                <h5>Rp 90,000,000 <button>Book</button></h5>
            </div>
        </div>
    </div>
  </section>
<!-- End of Packages Section -->

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
                    <a href="#"><i class="fas fa-envelope"></i>summitseeker@gmail.com</a>
                </div>
            </div>
          </div>
        </div>

        <!-- <div class="middle box">
            <div class="topic">Usefull Links</div>
            <div><a href="#">Home</a></div>
            <div><a href="#">Packages</a></div>
            <div><a href="#">Gallery</a></div>
        </div> -->
        <!-- <div class="right box">
            <div class="topic"></div>
            <form action="#">
                <input type="text" placeholder="enter your email address">
                <input type="submit" value="Send">
                <div class="social">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                </div>
            </form>
        </div> -->
        <hr>
        <div class="bottom">
            <p>Copyright &copy; 2024 <a href="#">Summit Seeker.</a> All Rights Reserved.</p>
        </div>
  </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>