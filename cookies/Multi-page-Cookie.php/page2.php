<?php
if(isset($_COOKIE["myCookie"]) ){
  $cookieValue = $_COOKIE["myCookie"];
}
else{
    $cookieValue = "NULL";
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
<a href="index.php">Go to Page 1</a>
    
</body>
</html>