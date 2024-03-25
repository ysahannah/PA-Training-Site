<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die ("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM patient_information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        $patient_id = $row["patient_id"];
        $gender = $row["gender"];
        $birthday =$row["birthday"];
        $zip_code = $row["zip_code"];
        $patient_address_book_id = $row["patient_address_book_id"];
        $prefix = $row["prefix"];
        $middle_name = $row["middle_name"];
        $suffix = $row["suffix"];
        $member_id = $row["member_id"];
        $medication_id = $row["medication_id"];
        $street = $row["street"];
        $street2 = $row["street2"];
        $city = $row["city"];
        $provider_state = $row["provider_state"];
        $phone = $row["phone"];


    }
} else {
    echo "0 results";
}

$conn->close();
?>