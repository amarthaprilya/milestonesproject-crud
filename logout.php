<?php
session_start();

// Delete all session
session_unset();
session_destroy();

// Redirect to login page
header("Location: login.php");
exit;
?>
