<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

echo "Welcome, " . $_SESSION['username'] . "! You are logged in as " . $_SESSION['role'] . ".";


if ($_SESSION['role'] === 'admin') {
    echo '<p><a href="admin.php">Admin Page</a></p>';
} elseif ($_SESSION['role'] === 'editor') {
    echo '<p><a href="editor.php">Editor Page</a></p>';
} elseif ($_SESSION['role'] === 'viewer') {
    echo '<p><a href="viewer.php">Viewer Page</a></p>';
}
?>

<p><a href="logout.php">Logout</a></p>
