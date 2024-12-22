<?php
// Session start
session_start();

// Check if the user has been logged in
if (!isset($_SESSION['user_id'])) {
    // if not, go to the login page
    header("Location: login.php");
    exit();
}

// Get the user ID from Session
$user_id = $_SESSION['user_id'];

// Database Configuration
$host = 'localhost'; // Ganti dengan host Anda
$dbname = 'users'; // Ganti dengan nama database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda

// PDO Connection Initialization
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the attribute mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If the connection fails, display an error message
    die("Connection failed: " . $e->getMessage());
}

// Get user record by ID from the database
$sql = "SELECT * FROM users WHERE id = :id"; 
$stmt = $pdo->prepare($sql); 
$stmt->bindParam(':id', $user_id, PDO::PARAM_INT); 
$stmt->execute(); 

// Fetch query results
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if the user exist
if (!$user) {
    echo "User not found.";
    exit();
}

// Account deletion triggered by the 'Yes, Delete' button click
if (isset($_POST['delete_account'])) {
    // Query to delete user from database
    $deleteSql = "DELETE FROM users WHERE id = :id";
    $deleteStmt = $pdo->prepare($deleteSql);
    $deleteStmt->bindParam(':id', $user_id, PDO::PARAM_INT);
    if ($deleteStmt->execute()) {
        // Delete the session and redirect the user to the login page after the account has been deleted
        session_destroy();
        header("Location: login.php");
        exit();
    } else {
        echo "Error deleting account.";
    }
}

// Close PDO COnnection
$pdo = null;
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
    <title>Profile</title>
    <style>
        
        .nav_list {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .nav_item a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .profile-container {
            padding: 40px 20px;
            max-width: 800px;
            margin: 20px auto;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .profile-container h2 {
            text-align: center;
            font-size: 2rem;
            color: #333;
        }

        .profile-info {
            margin-top: 20px;
        }

        .profile-info p {
            font-size: 1.1rem;
            margin: 10px 0;
            color: #555;
        }

        .profile-info span {
            font-weight: bold;
            color: #333;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            padding: 12px 25px;
            border: none;
            cursor: pointer;
            display: block;
            margin: 30px auto;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .delete-btn:hover {
            background-color: #e53935;
        }

        /* Popup styles */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 80%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .popup h3 {
            font-size: 1.3rem;
            color: #333;
        }

        .popup button {
            padding: 12px 20px;
            margin-top: 20px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup button.delete-btn {
            background-color: #f44336;
            color: white;
        }

        .popup button.delete-btn:hover {
            background-color: #e53935;
        }

        .popup button#cancelBtn {
            background-color: #ccc;
            color: black;
        }

        .popup button#cancelBtn:hover {
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <header>
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
            </div>
        </nav>
    </header>

    <div class="profile-container">
        <h2>User Profile</h2>
        <div class="profile-info">
            <p><span>First Name:</span> <?php echo htmlspecialchars($user['first_name']); ?></p>
            <p><span>Last Name:</span> <?php echo htmlspecialchars($user['last_name']); ?></p>
            <p><span>Email:</span> <?php echo htmlspecialchars($user['email']); ?></p>
        </div>

        <form action="profile.php" method="POST">
            <button type="submit" class="delete-btn" id="deleteBtn">Delete Account</button>
        </form>

        <!-- Popup confirmation for account deletion -->
        <div class="popup" id="popup">
            <div class="popup-content">
                <h3>Are you sure you want to delete your account?</h3>
                <form action="profile.php" method="POST">
                    <button type="submit" name="delete_account" class="delete-btn">Yes, Delete</button>
                </form>
                <button id="cancelBtn">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        // Get elements
        const deleteBtn = document.getElementById('deleteBtn');
        const popup = document.getElementById('popup');
        const cancelBtn = document.getElementById('cancelBtn');

        // Show the popup when delete account is clicked
        deleteBtn.addEventListener('click', function (e) {
            e.preventDefault();
            popup.style.display = 'flex';
        });

        // Close the popup when cancel is clicked
        cancelBtn.addEventListener('click', function () {
            popup.style.display = 'none';
        });
    </script>
</body>
</html>
