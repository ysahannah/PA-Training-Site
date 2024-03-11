<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $medication_id = $_POST["medication_id"];
    $quantity = $_POST["quantity"];
    $dosage = $_POST["dosage"];
    $days_supply = $_POST["days_supply"];
    $primary_diagnosis = $_POST["primary_diagnosis"];
    $secondary_diagnosis = $_POST["secondary_diagnosis"];

    $drug_sql = "INSERT INTO drug (medication_id, quantity, dosage, days_supply, primary_diagnosis, secondary_diagnosis) VALUES ('$medication_id', '$quantity', '$dosage', '$days_supply', '$primary_diagnosis', '$secondary_diagnosis')";

    if ($conn->query($drug_sql) === TRUE) {
        echo "Drug prescription inserted successfully";
        exit();
    } else {
        echo "Error: " . $drug_sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>