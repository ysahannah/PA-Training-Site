<?php
// Start the session
session_start();

$servername  = "localhost";
$username    = "root";  
$password    = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}

// Fetch insurance states from the database
$insurance_states_query = "SELECT * FROM insurance_state";
$insurance_states_result = $conn->query($insurance_states_query);

// Check if there are insurance states available
if ($insurance_states_result->num_rows > 0) {
    // Array to store insurance states
    $insurance_states = array();
    while ($row = $insurance_states_result->fetch_assoc()) {
        $insurance_states[$row['insurance_state_id']] = $row['insurance_state_name'];
    }
} else {
    echo "<option value=''>No insurance states found</option>";
}

// Close the database connection
$conn->close();

// Output insurance state options
foreach ($insurance_states as $id => $name) {
    echo "<option value=\"$id\">$name</option>";
}
?>