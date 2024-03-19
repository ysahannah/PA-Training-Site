<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "covermymeds";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (mysqli_connect_errno()) {
    die("Connection failed: ". mysqli_connect_error());
}

// Fetch questions from the database
$sql = "SELECT FormID, QuestionID, QuestionText FROM priorauthorizationquestions";
$result = $conn->query($sql);

$questions = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
}

$conn->close();

// Output questions as JSON
echo json_encode($questions);
?>