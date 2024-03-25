<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = 'root';
$password = "";
$dbname = "covermymeds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user data if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    // Update user data in the database
    $sql = "UPDATE users SET username='$username', password='$password' WHERE id= '$id'";

    if ($conn->query($sql) === TRUE) {
        // Redirect to user management page after successful update
        echo "Record updated successfully!";
        header("Location: ../request/user_management.php?user_id=$user_id");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
