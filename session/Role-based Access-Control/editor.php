<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'editor') {
    echo "Access Denied!";
    exit();
}

echo "Welcome to the Editor page, " . $_SESSION['username'] . ".";
?>
