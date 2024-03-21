<?php
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
            echo "Error: Username already exists.";
            exit();
        }
    } else {
        echo "Error: " . $conn->error;
        exit();
    }

    // Default user type
    $user_type = "user";

    // Insert new user into database with default user type
    $sql = "INSERT INTO users (username, password, user_type) VALUES ('$username', '$password', '$user_type')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to user_management page after successful insertion
        header("Location: ../request/user_management.html");
        exit();
    } else {
        echo "Error: Unable to add new user. Please try again.";
        error_log("Error in adding new user: " . $conn->error);
    }
}

// Close connection
$conn->close();
?>
