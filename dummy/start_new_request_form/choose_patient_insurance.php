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

// Fetch insurance states from the database
$query = "SELECT * FROM insurance_state";
$result = mysqli_query($conn, $query);

$insurance_states = array();

// Fetch data and store in array
while ($row = mysqli_fetch_assoc($result)) {
    $insurance_states[] = $row;
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($insurance_states);

// Close database connection
mysqli_close($conn);

?>