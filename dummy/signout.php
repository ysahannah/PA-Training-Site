<?php
// Start the session
session_start();

// Destroy all session data
session_destroy();

// Redirect the user to the desired page after sign-out
header("./login.html");
exit;
?>