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
    }
} else {
    echo "0 results";
}

$conn->close();
?>