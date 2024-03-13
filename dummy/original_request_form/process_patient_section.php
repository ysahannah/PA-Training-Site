<?php
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
    $prefix = $_POST["prefix"];
    $firstName = $_POST["firstName"];
    $middle_name = $_POST["middle_name"];
    $lastName = $_POST["lastName"];
    $suffix = $_POST["suffix"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $member_id = $_POST["member_id"];
    $street = $_POST["street"];
    $street2 = $_POST["street2"];
    $city = $_POST["city"];
    $zip_code = $_POST["zip_code"];
    $phone = $_POST["phone"];
    $provider_state = $_POST["provider_state"];

    $patient_sql = "INSERT INTO patient_information (prefix, firstName, middle_name, lastName, suffix, birthday, gender, member_id, street, street2, city, zip_code, phone, provider_state) VALUES ('$prefix', '$firstName', '$middle_name', '$lastName', '$suffix', '$birthday', '$gender', '$member_id', '$street', '$street2', '$city', '$zip_code', '$phone', '$patient_insurance_state')";

    if ($conn->query($patient_sql) === TRUE) {
        echo "Patient information inserted successfully";
        exit();
    } else {
        echo "Error: " . $patient_sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>