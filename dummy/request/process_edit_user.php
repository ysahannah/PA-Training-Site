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
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_id = $_POST["user_id"];

    $sql = "UPDATE users SET username='$username', password='$password' WHERE user_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        // Redirect user back to the user management page
        header("Location: ../request/user_management.html");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

$conn->close();
?>
