<?php
session_start();

// Check if the key is passed in the URL
if(isset($_GET['key'])) {
    // Retrieve the key from the URL
    $request_key = $_GET['key'];
    
    // Redirect to the next page along with the key
    header("Location: ../pa_forms/20240308200511815/index.php?key=$request_key");
    exit;
} else {
    echo "Key not found in URL.";
}
?>