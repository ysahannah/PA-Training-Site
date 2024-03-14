<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npi = $_POST['npi'];
    $provider_firstName = $_POST['provider_firstName'];
    $provider_lastName = $_POST['provider_lastName'];
    $street = $_POST['street'];
    $street2 = $_POST['street2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];
    $review = $_POST['review'];

    $sql = "INSERT INTO provider (npi, provider_firstName, provider_lastName, street, street2, city, state, zip_code, phone, fax, review)
    VALUES ('$npi', '$provider_firstName', '$provider_lastName', '$street', '$street2', '$city', '$state', '$zip_code', '$phone', '$fax', '$review')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>