<?php
session_start();

// Unset all session variables
unset($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_email']);

// Destroy the session completely
session_destroy();

// (Optional) Redirect to login page
header("Location: ../login.php");
exit;
?>
