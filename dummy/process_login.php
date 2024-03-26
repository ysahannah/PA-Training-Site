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

        if ($password === $row['password']) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['usertype'] = $row['usertype'];

            // Redirect user based on usertype
            switch ($row["usertype"]) {
                case "admin":
                    header("Location: ./request/admin.php");
                    exit();
                case "user":
                    header("Location: ./request/index.php");
                    exit();
                default:
                    echo "Invalid user type";
                    exit();
            }
        } else {
            // Password is incorrect
            echo "<script>alert('Incorrect password');</script>";
        }
    } else {
        // User not found
        echo "<script>alert('User not found');</script>";
    }
}

$conn->close();
?>
