<?php
session_start();  // Start the session to destroy it
session_destroy(); // Destroy the session
header("Location: index.php"); // Redirect to home page after logout
exit();
?>
