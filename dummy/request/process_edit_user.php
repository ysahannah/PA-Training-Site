<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $user_id = $_POST["user_id"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "UPDATE users SET username='$username', password='$password' WHERE user_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        // Redirect user back to the user management page
        header("Location: ./user_management.php");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

$conn->close();
?>
