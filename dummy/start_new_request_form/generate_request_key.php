<?php
session_start();
// Generate request key
$request_key = uniqid();
// Store request key in session
$_SESSION['request_key'] = $request_key;
// Redirect to the next page
header("Location: ../original_request_form/index.php");
exit;
?>