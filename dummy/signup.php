<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "covermymeds";

$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handle form submission
if  ($_SERVER["REQUEST_METHOD"] === "POST") {
//checking if any field is empty
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST["cpass"])){
    echo "Error: Username, Password, or Confirm Password Cannot be Empty.";
    header("Location: ./signup-failedEmptyFields.html");
    exit();
}
//Checking if Passwords are matching
$password =$_POST ["password"];
$cpass = $_POST ["cpass"];
if ($password !== $cpass){
    echo "Error: Passwords do not match.";
    header ("Location: ./signup-failednotmatching.html");
    exit();
}
   

    // Check if User name already exists
    $username = $conn->real_escape_string($_POST["username"]);
    $check_username_query = "SELECT * FROM users WHERE username='$username'";
    $check_username_result = $conn->query($check_username_query);
    if ($check_username_result && $check_username_result -> num_rows >0){
        echo "Error Username Already Exists!";
        header("Location: ./signup-failedExistingUser.html");
        exit();
    }

    //If Everything is good, inserts into the database
    $insertUser = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if($conn->query($insertUser)=== TRUE){
        echo "Signup Successful!";
        header("Location: ./signup-success.html");
    }else{
        echo "Error: Unable to sign up, Please try again Later.";
        error_log("Error in user registration:" . $conn->error);
    }
}

    // Insert new user into the database
    /*$users_sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($users_sql) === TRUE) {
        echo "Registered successfully!";
        header("Location: ./signup-success.html");
        exit();
    } else {
        echo "Error: Unable to register. Please try again later.";
        error_log("Error in user registration: " . $conn->error);
    }*/


$conn->close();
?>