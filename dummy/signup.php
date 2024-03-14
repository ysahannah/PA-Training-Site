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
if (isset($_POST['submit'])){
  //RETRIVE FORM
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpass = $_POST['cpass']; 
  $email = $_POST["Email"];


$sql="select * from users where username='$username'";
$result = mysqli_query($conn, $sql);
$count_user = mysqli_num_rows($result);

$sql="select * from users where email='$email'";
$result = mysqli_query($conn, $sql);
$count_email = mysqli_num_rows($result);

//searching if there is identical names/emails, also hashing the password for security
if($count_user == 0 && $count_email == 0){  
  if($password==$cpass){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hash' , '$email')";
    $result = mysqli_query($conn, $sql);
    if($result){
      // Redirect to login page after successful sign-up
      header("Location: ../login.html");
      exit();
    }
  }
  else{
    echo 'Passwords do not match' ;
  }
}
  else{
    if($count_user>0){
      echo 'This user already exists!';
    }
    if($count_email>0){
      echo 'This email already exists!';
    }
  }


}
?>