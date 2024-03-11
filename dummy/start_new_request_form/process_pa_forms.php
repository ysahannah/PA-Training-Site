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

// Retrieve POST Data
$bin = isset($_POST['bin']) ? $conn->real_escape_string($_POST['bin']) : '';
$pcn = isset($_POST['pcn']) ? $conn->real_escape_string($_POST['pcn']) : '';
$groupId = isset($_POST['group_id']) ? $conn->real_escape_string($_POST['group_id']) : '';

// Prepare SQL statement to prevent SQL injection
$sql = "SELECT pa_forms_name, pa_forms_description, pa_forms_pdf FROM prior_authorization_forms WHERE RxBIN = '$bin' OR RxPCN_number = '$pcn' OR RxGroup = '$groupId'";
$result = $conn->query($sql);

$response = array();

if ($result && $result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
} 

// Close connection
$conn->close();

// Output JSON response
echo json_encode($response);
?>