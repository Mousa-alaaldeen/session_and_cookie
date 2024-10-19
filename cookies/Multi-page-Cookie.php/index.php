<?php
setcookie("myCookie","Hello from Page", time()+(60*24*60*60),"/");
if (isset($_COOKIE["myCookie"])) {
    $cookieValue = $_COOKIE["myCookie"];
} else {
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
    <a href="page2.php">go to page 2</a>
    
</body>
</html>

