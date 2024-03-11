<?php
session_start();


?><?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli( $servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $npi = $_POST["npi"];
    $provider_firstName = $_POST["provider_firstName"];
    $provider_lastName = $_POST["provider_lastName"];
    $street2 = $_POST["street2"];
    $street = $_POST["street"];
    $provider_state = $_POST["provider_state"];
    $address_line = $_POST["address_line"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip_code = $_POST["zip_code"];
    $phone = $_POST["phone"];
    $fax = $_POST["fax"];

    $provider_sql = "INSERT INTO patient_information (npi, provider_firstName, provider_lastName, street2, street, address_line, city, state, zip_code, phone, fax) VALUES ('$npi', '$provider_firstName', '$provider_lastName', '$street2', '$street', '$address_line', '$city', '$state', '$zip_code', '$phone', '$fax')";

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