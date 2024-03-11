<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

// Establish connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    function validateInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Patient information
    $prefix = validateInput($_POST["prefix"]);
    $firstName = validateInput($_POST["firstName"]);
    $middle_name = validateInput($_POST["middle_name"]);
    $lastName = validateInput($_POST["lastName"]);
    $suffix = validateInput($_POST["suffix"]);
    $birthday = validateInput($_POST["birthday"]);
    $zip_code = validateInput($_POST["zip_code"]);
    $patient_insurance_state_id = validateInput($_POST["patient_insurance_state_id"]);
    $gender = validateInput($_POST["gender"]);
    $member_id = validateInput($_POST["member_id"]);

    // Provider information
    $npi = validateInput($_POST["npi"]);
    $provider_firstName = validateInput($_POST["provider_firstName"]);
    $provider_lastName = validateInput($_POST["provider_lastName"]);
    $street = validateInput($_POST["street"]);
    $street2 = validateInput($_POST["street2"]);
    $address_line = validateInput($_POST["address_line"]);
    $city = validateInput($_POST["city"]);
    $state = validateInput($_POST["state"]); 
    $phone = validateInput($_POST["phone"]);
    $fax = validateInput($_POST["fax"]);

    // Drug information
    $medication_id = validateInput($_POST["medication_id"]);
    $quantity = validateInput($_POST["quantity"]);
    $dosage = validateInput($_POST["dosage"]);
    $days_supply = validateInput($_POST["days_supply"]);
    $primary_diagnosis = validateInput($_POST["primary_diagnosis"]);
    $secondary_diagnosis = validateInput($_POST["secondary_diagnosis"]);

    // Prepare and bind statements
    $stmt1 = $conn->prepare("INSERT INTO patient_information (prefix, firstName, lastName, middle_name, suffix, birthday, zip_code, patient_insurance_state_id, gender, member_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("ssssssssss", $prefix, $firstName, $lastName, $middle_name, $suffix, $birthday, $zip_code, $patient_insurance_state_id, $gender, $member_id);

    $stmt2 = $conn->prepare("INSERT INTO provider (npi, firstName, lastName, street, street2, address_line, city, state, zip_code, phone, fax) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt2->bind_param("sssssssssss", $npi, $provider_firstName, $provider_lastName, $street, $street2, $address_line, $city, $state, $zip_code, $phone, $fax);

    $stmt3 = $conn->prepare("INSERT INTO drug (provider_id, patient_id, medication_id, quantity, dosage, days_supply, primary_diagnosis, secondary_diagnosis) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Execute statements
    $conn->autocommit(false); // Start transaction
    if ($stmt1->execute() && $stmt2->execute()) {
        // Get the inserted patient_id and provider_id
        $patient_id = $stmt1->insert_id;
        $provider_id = $stmt2->insert_id;

        // Insert into drug table
        $stmt3->bind_param("ssssssss", $provider_id, $patient_id, $medication_id, $quantity, $dosage, $days_supply, $primary_diagnosis, $secondary_diagnosis);
        if ($stmt3->execute()) {
            $conn->commit(); // Commit transaction
            header("Location: ../pa_forms/index.html");
            exit;
        } else {
            $conn->rollback(); // Rollback transaction
            echo "Error inserting into drug table: " . $conn->error;
        }
    } else {
        echo "Error: " . $conn->error;
    }

    // Close statements
    $stmt1->close();
    $stmt2->close();
    $stmt3->close();

    // Close the database connection
    $conn->close();
}
?>