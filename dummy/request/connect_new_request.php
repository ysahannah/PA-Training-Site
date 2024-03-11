<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "covermymeds"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$output = '';
if(isset($_POST['query'])){
    $search = mysqli_real_escape_string($conn, $_POST['query']);
    $sql = "SELECT * FROM medication WHERE medication_name LIKE '%$search%' OR NDC_number LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $output .= '<div>'.$row['medication_name'].''.$row['NDC_number'].'</div>';
        }
        echo $output;
    } else{
        echo 'No medication found.';
    }
}
?>