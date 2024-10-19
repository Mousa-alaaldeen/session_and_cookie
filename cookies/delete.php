<?php


if (!isset($_COOKIE['favorite_fruit'])) {
    setcookie('favorite_fruit', 'Mango', time() + (86400 * 30), "/"); 
}


$cookie_value = isset($_COOKIE['favorite_fruit']) ? $_COOKIE['favorite_fruit'] : "Cookie is not set.";


if (isset($_POST['delete_cookie'])) {
   
    setcookie('favorite_fruit', '', time() - 3600, "/");
    $cookie_value = "Cookie has been deleted."; 
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookie Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Cookie Management</h1>

        <div class="text-center">
            <p>Your favorite fruit: <strong><?php echo $cookie_value; ?></strong></p>

            <!-- Delete Cookie Form -->
            <form method="post" action="">
                <button type="submit" name="delete_cookie" class="btn btn-danger">Delete Cookie</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
