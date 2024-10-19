<?php
session_start();
$users = [
    'admin_user' => 'admin',
    'editor_user' => 'editor',
    'viewer_user' => 'viewer',
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    
  
    if (array_key_exists($username, $users)) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username]; 
        header('Location: dashboard.php'); 
        exit();
    } else {
        echo "Invalid username!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter username" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
