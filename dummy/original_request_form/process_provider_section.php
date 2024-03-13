<?php
error_reporting(E_ALL);

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $npi = $_POST["npi"];
    $provider_firstName = $_POST["provider_firstName"];
    $provider_lastName = $_POST["provider_lastName"];
    $street2 = $_POST["street2"];
    $street = $_POST["street"];
    $provider_state = $_POST["provider_state"];
    $city = $_POST["city"];
    $zip_code = $_POST["zip_code"];
    $phone = $_POST["phone"];
    $fax = $_POST["fax"];

    // Prepare SQL statement
    $provider_sql = "INSERT INTO patient_information (npi, firstName, lastName, street2, street, city, patient_insurance_state, zip_code, phone, fax) VALUES ('$npi', '$provider_firstName', '$provider_lastName', '$street2', '$street', '$city', '$provider_state', '$zip_code', '$phone', '$fax')";

    // Execute SQL statement
    if ($conn->query($provider_sql) === TRUE) {
        echo "Provider information inserted successfully";
        exit();
    } else {
        echo "Error: " . $provider_sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>