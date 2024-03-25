<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize inputs to prevent SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Check if username already exists
    $check_username = "SELECT * FROM users WHERE username='$username'";
    $check_result = $conn->query($check_username);
    if ($check_result) {
        if ($check_result->num_rows > 0) {
            // Username already exists
            echo json_encode(array("success" => false, "error" => "Username already exists."));
            exit();
        }
    } else {
        // Error occurred while checking username
        echo json_encode(array("success" => false, "error" => "Error: " . $conn->error));
        exit();
    }

    // Insert new user into database with default user type
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        // User added successfully
    header("Location: ../request/user_management.php?success=true");
        exit();
    } else {
        // Error adding user
    header("Location: ../request/user_management.php?success=false&error=Unable+to+add+new+user.+Please+try+again.");
    exit();
    }
}

// Close connection
$conn->close();
?>

