<?php
session_start();

// Restrict access to logged-in users
if (!isset($_SESSION['username'])) {
    header("Location: ../public/login.php");
    exit();
}
?>
