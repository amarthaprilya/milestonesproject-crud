<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Post Data from Form
$email = $_POST['email'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];

// Validate the Password
if ($newPassword !== $confirmPassword) {
    echo "Password dan Konfirmasi Password tidak sama!";
    exit;
    }

// Conect to Database
$conn = new mysqli("localhost", "root", "", "users"); 
if ($conn->connect_error) {
die("Failed to Connect" . $conn->connect_error);
}

// Encrypt New Password
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Update Password on Database
$sql = "UPDATE users SET password = '$hashedPassword' WHERE email = '$email'";
if ($conn->query($sql) === TRUE) {
    // Password has been updated, redirect to login page
    header("Location: login.php");
    exit; 
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
}
?>
