<?php
session_start(); // Start the session

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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $_POST["password"];

    // Check if the user has already attempted to log in before
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0;
    }

    // Increment the login attempts
    $_SESSION['login_attempts']++;

    // Check if the user has exceeded the maximum login attempts
    if ($_SESSION['login_attempts'] > 5) {
        exit();
    }

    // Prepare and execute the SQL statement using prepared statements
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];

        // Verify the password
        if ($password === $stored_password) {
            // Set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];

            // Password is correct, redirect to appropriate page
            switch ($row["usertype"]) {
                case "admin":
                    header("Location: ./request/admin.html");
                    exit();
                case "user":
                    header("Location: ./request/index.html");
                    exit();
                default:
                    echo "Invalid user type";
                    break;
            }
        } else {
            // Invalid password, set error session variable
            $_SESSION['login_error'] = "Invalid password";
            header("Location: ./LoginInvalidPass.html");
        }
    } else {
        // User not found, set error session variable
        $_SESSION['login_error'] = "User not found";
        header("Location: ./LoginUserNotFound.html");
    }
}

$conn->close();
?>
