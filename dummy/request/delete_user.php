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

// Check if user_id is provided via GET request
if (!isset($_GET["id"])) {
    echo "Error: User ID not provided.";
    exit();
}

$id = $_GET["id"];

// Prepare a delete statement
$sql = "DELETE FROM users WHERE id = ?";

if ($stmt = $conn->prepare($sql)) {
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("i", $param_id);

    // Set parameters
    $param_id = $id;

    // Attempt to execute the prepared statement
    if ($stmt->execute()) {
        // Redirect to user_management page after successful deletion
        header("Location: ../request/user_management.php");
        exit();
    } else {
        echo "Error: Unable to delete user. Please try again.";
        error_log("Error in deleting user: " . $conn->error);
    }

    // Close statement
    $stmt->close();
} else {
    echo "Error: Unable to prepare statement.";
    error_log("Error in preparing delete statement: " . $conn->error);
}

// Close connection
$conn->close();
?>
