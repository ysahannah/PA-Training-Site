<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST METHOD"] == "POST") {
    $insurance_state_id = $_POST["insurance_state"];
    $RxBIN = $_POST["RxBIN"];
    $RxPCN_number = $_POST["RxPCN_number"];
    $RxGroup = $_POST["RxGroup"];
    $plan_PBM_name = $_POST["plan_PBM_name"];

    $patient_insurance_sql = "INSERT INTO patient_insurance_state (insurance_state, RxBIN, RxPCN_number, RxGroup, plan_PBM_name) VALUES ('$insurance_state_id', '$RxBIN', '$RxPCN_number', '$RxGroup', '$plan_PBM_name')";

    if ($conn->query("$patient_insurance_sql") === TRUE) {
        echo "Patient insurance submitted successfully";
        header("Location: index.html");
    } else {
        echo "Error: " . $patient_insurance_sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>