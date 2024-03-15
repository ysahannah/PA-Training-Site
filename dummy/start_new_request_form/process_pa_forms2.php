<?php
// Database connection parameters
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

$planPBMName = isset($_POST['plan_PBM_name']) ? $_POST['plan_PBM_name'] : '';

// Prepare SQL statement to search for plan_PBM_name
$sql = "SELECT * FROM prior_authorization_forms WHERE plan_PBM_name LIKE '%$planPBMName%'";
$result = $conn->query($sql);

$response = array();

if ($result && $result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
}

// Close connection
$conn->close();

// Output JSON response
echo json_encode($response);
?>