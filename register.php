<?php
// Include the connection file
include 'connect.php';

if (isset($_POST['signUp'])) {
    // Retrieve and sanitize form data
    $fName = htmlspecialchars($_POST['fName']);
    $lName = htmlspecialchars($_POST['lName']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt the password

    // Prepare the query with placeholders to prevent SQL injection
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (:fName, :lName, :email, :password)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters and execute the query
    $stmt->bindParam(':fName', $fName);
    $stmt->bindParam(':lName', $lName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    
    try {
        $stmt->execute();
        // Redirect upon success
        echo "<script>
                alert('Registration successful!');
                window.location.href = 'login.php';
              </script>";
    } catch (PDOException $e) {
        echo "<script>
                alert('Registration failed: " . $e->getMessage() . "');
              </script>";
    }
}
?>
