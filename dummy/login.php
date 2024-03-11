<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection 
if ($conn->connect_error){
  die("Connection has failed." . $conn->connect_error);
}

//Check if form is submitted
if ($SERVER["REQUEST_METHOD"] == "POST"){
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM  users WHERE username=$username AND password=$password";
$result = $conn->query($sql);

//check if match
if ($result->num_rows > 0 ){
  echo "Login Success!";
  //redirect user to dashboard or another page
}
else{
  echo "Invalid username or password";
 }
}
$conn->close()  ;
?>
