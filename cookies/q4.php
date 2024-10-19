<?php

$cookieName = "testCookie";


if (!isset($_COOKIE[$cookieName])) {
    
    $cookieValue = "Hello, this is a temporary cookie!";
    setcookie($cookieName, $cookieValue, time() + 60, "/"); 
    echo "Cookie has been set. It will expire in 1 minute.<br>";
    echo "Refresh the page to see the cookie value.";
} else {
    
    echo "Cookie Value: " . $_COOKIE[$cookieName] . "<br>";

   
    $remainingTime = (time() + 60) - time();
    echo "Cookie is still valid. Refresh the page after 1 minute to see if it has expired.";
    echo $remainingTime;
}
?>
