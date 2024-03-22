<?php
session_start(); // Start the session at the beginning of your script

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

    // Prepare and execute the SQL statement using prepared statements
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];

        // Verify the password using password_verify() function for security
        if (password_verify($password, $stored_password)) {
            // Set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            
            // Redirect based on user type
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
            header("Location: ./LoginInvalidPass.html");
            exit();
        }
    } else {
        header("Location: ./LoginUserNotFound.html");
        exit();
    }
}

$conn->close();
?>
