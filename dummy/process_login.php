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
        // $hashed_password = $row["password"];

        // Verify the password
        //if (password_verify($password, $hashed_password)) {
            // Start the session
            session_start();

            // Set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            
            // Password is correct, set session variables or redirect to homepage
            switch ($row["usertype"]) {
                case "admin":
                    header("Location: ./admin_home.php");
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
            echo "Invalid password";
            header("Location: ./LoginInvalidPass.html");
        }
    } else {
        echo "User not found";
    }

$conn->close();
?>

