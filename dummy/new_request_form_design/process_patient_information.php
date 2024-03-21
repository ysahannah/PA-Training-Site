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

// SQL query to fetch data from the database
$sql = "SELECT * FROM patient_information";

// Execute the query
$result = $conn->query($sql);

// Array to store fetched data
$data = array();

// Check if there are any results
if ($result->num_rows > 0) {
    // Fetch each row from the result set
    while ($row = $result->fetch_assoc()) {
        // Add each row to the data array
        $data[] = $row;
    }
} else {
    // No results found
    $data['error'] = 'No data found';
}

// Close the database connection
$conn->close();

// Encode the data array as JSON and output it
echo json_encode($data);

?>