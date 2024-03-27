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

// Initialize login attempts counter
if (!isset($_SESSION["login_attempts"])) {
    $_SESSION["login_attempts"] = 0;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Check if maximum login attempts reached
    if ($_SESSION['login_attempts'] >= 5) {
        echo "<script>alert('Maximum login attempts reached. Please try again later.');</script>";
        exit();
    }

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

            // Reset login attempts on successful login
            $_SESSION['login_attempts'] = 0;

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
            $_SESSION['login_attempts']++;
            echo "<script>alert('Incorrect password');</script>";
            header("Location: ./login.php");
        }
    } else {
        // User not found
        $_SESSION['login_attempts']++;
        echo "<script>alert('User not found');</script>";
        header("Location: ./login.php");
    }
}

$conn->close();
?>

