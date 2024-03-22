<?php
<<<<<<< HEAD
session_start(); // Start the session at the beginning of your script
=======
error_reporting(E_ALL); 
ini_set('display_errors', 1);

session_start();
>>>>>>> 91d14c7 (added signout.php)

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

<<<<<<< HEAD
        // Verify the password using password_verify() function for security
        if (password_verify($password, $stored_password)) {
=======

         //Verify the password
         if ($password === $stored_password) {
>>>>>>> 91d14c7 (added signout.php)
            // Set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            
<<<<<<< HEAD
            // Redirect based on user type
=======
            // Password is correct, set session variables or redirect to homepage
>>>>>>> 91d14c7 (added signout.php)
            switch ($row["usertype"]) {
                case "admin":
                    header("Location: ./request/admin.php");
                    exit();
                case "user":
                    header("Location: ./request/index.html");
                    exit();
                default:
                    echo "Invalid user type";
                    break;
            }
            exit(); // Make sure to exit after redirection
        } else {
<<<<<<< HEAD
            header("Location: ./LoginInvalidPass.html");
            exit();
        }
    } else {
=======
            echo "Invalid password";
          header("Location: ./LoginInvalidPass.html");
        }
    } else {
        echo "User not found";
>>>>>>> 91d14c7 (added signout.php)
        header("Location: ./LoginUserNotFound.html");
        exit();
    }
}
$conn->close();
?>


