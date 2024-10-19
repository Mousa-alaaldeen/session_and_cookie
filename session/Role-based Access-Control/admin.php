<?php
session_start();

// Check if user is logged in and if they have admin role
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo "Access Denied!";
    exit();
}

echo "Welcome to the Admin page, " . $_SESSION['username'] . ".";
?>
