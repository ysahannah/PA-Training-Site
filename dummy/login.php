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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the login attempt counter exists in the session
  if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
  }

  // Check if the user has reached the maximum login attempts
  if ($_SESSION['login_attempts'] >= 5) {
    echo "You have reached the maximum number of login attempts. Please try again later.";
  } else {
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Check if match
    if ($result->num_rows > 0) {
      echo "Login Success!";
      header("Location: ./request/index.html");
    } else {
      $_SESSION['login_attempts']++; 
      echo "<script>alert('Invalid username or password');</script>";
    }
  }
}

$conn->close();
?>