<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id']) || !isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: ./login.php");
    exit();
}
?>
