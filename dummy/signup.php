<?php
//database connection 
$host = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "covermymeds";

$conn = mysqli_connect($host, $dbusername, $dbpass, $dbname);

//checking the connection 

if ($conn->connect_error){
  die("Connection has failed: " . $conn->connect_error);

}

//checking if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  //RETRIVE FORM
  $username = $_POST[];
  $password = $_POST[]; 
  $email = $_POST["email"];
 
  $sql = "INSERT INTO users (username, pass, email) VALUES ('$username', '$password', '$email')"
}
