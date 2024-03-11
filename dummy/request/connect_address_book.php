<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$sql = "SELECT address_book_id, patient_address_book_name FROM patient_address_book";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<a class='dropdown-item' href='#'>" . $row["patient_address_book_name"] . "</a>";
    }
} else {
    echo "";
}

mysqli_close($conn);
?>