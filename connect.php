<?php
// connect.php

$host = 'localhost'; // Database host
$db   = 'users'; // Database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

try {
    // Initialize PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage()); // Handle connection failure
}
?>
