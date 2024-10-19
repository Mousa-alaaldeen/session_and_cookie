<?php
 
if (!isset($_COOKIE["Update_cookie"])){
    setcookie("UserLevel", "Beginner", time() + (40 * 24 * 60 * 60), "/"); 
    $cookieValue=$_COOKIE["UserLevel"];
}else{
    $cookieValue= "null";
}
if (isset($_POST['Update_cookie'])) {
   
    setcookie('UserLevel', 'Advanced', time() +(40 * 24 * 60 * 60), "/");
    $$cookieValue=$_COOKIE["UserLevel"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Cookie value: <?php echo htmlspecialchars($cookieValue); ?></p>
<form method="post" action="">
          <button type="submit" name="Update_cookie" class="btn btn-danger">Update Cookie</button>
            </form>
   
</body>
</html>