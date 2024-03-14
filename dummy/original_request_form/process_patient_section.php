<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$prefix = $_POST['prefix'];
$firstName = $_POST['firstName'];
$middle_name = $_POST['middle_name'];
$lastName = $_POST['lastName'];
$suffix = $_POST['suffix'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$member_id = $_POST['member_id'];
$street = $_POST['street'];
$street2 = $_POST['street2'];
$city = $_POST['city'];
$state = $_POST['provider_state'];
$zip_code = $_POST['zip_code'];
$phone = $_POST['phone'];

$sql = "INSERT INTO patient_information (prefix, firstName, middle_name, lastName, suffix, birthday, gender, member_id, street, street2, city, provider_state, zip_code, phone)
        VALUES ('$prefix', '$firstName', '$middle_name', '$lastName', '$suffix', '$birthday', '$gender', '$member_id', '$street', '$street2', '$city', '$state', '$zip_code', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>