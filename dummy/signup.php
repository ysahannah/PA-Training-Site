<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if($_SERVER["REQUEST_METHOD"] === "POST"){
    //CHECK IF USERNAME EMPTY
    if(empty(trim($_POST["username"]))){
        header("location: ./signup-failed.html");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $conn->real_escape_string($_POST["username"]);
     $password = $_POST["password"];

    // Check if email already exists
    $check_username_query = "SELECT * FROM users WHERE username='$username'";
    $check_username_result = $conn->query($check_username_query);
    if ($check_username_result) {
        if ($check_username_result->num_rows > 0) {
            echo "Error: Username already exists.";
            exit();
        }
    } else {
        echo "Error: " . $conn->error;
        exit();
    }

    // Insert new user into the database
    $users_sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($users_sql) === TRUE) {
        echo "Registered successfully!";
<<<<<<< HEAD
        header("Location: ./login.php");
=======
        header("Location: ./signup-success.html");
>>>>>>> b286a538365914632d1804920894f277a674d762
        exit();
    } else {
        echo "Error: Unable to register. Please try again later.";
        error_log("Error in user registration: " . $conn->error);
    }
}

$conn->close();
?>