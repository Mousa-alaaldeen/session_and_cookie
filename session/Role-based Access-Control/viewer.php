<?php
session_start();

// Check if user is logged in and if they have viewer role
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'viewer') {
    echo "Access Denied!";
    exit();
}

echo "Welcome to the Viewer page, " . $_SESSION['username'] . ".";
?>
