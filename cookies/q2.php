<?php
$cookie_name="count";


if (isset($_COOKIE[$cookie_name])) {
  $counter=$_COOKIE[$cookie_name] +1;  
} else {
    $counter = '1';
}

setcookie($cookie_name,  $counter, time() + 1, '/');

echo $counter;
?>
