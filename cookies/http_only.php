<?php



setcookie(
    'secure_cookie',        // Name of the cookie
    'This is a secure cookie', // Value of the cookie
    time() + (86400 * 30),  // Expires in 30 days
    "/",                     // Path
    "",                      // Domain (set as needed)
    true,                   // Secure (only sent over HTTPS)
    true                    // HttpOnly (not accessible via JavaScript)
);

$cookie_value = isset($_COOKIE['secure_cookie']) ? $_COOKIE['secure_cookie'] : "Cookie is not set.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cookie Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Secure Cookie Management</h1>

        <div class="text-center">
            <p>Secure cookie value (PHP): <strong><?php echo $cookie_value; ?></strong></p>

            <h4>Attempt to access the cookie using JavaScript:</h4>
            <button id="checkCookie" class="btn btn-primary">Check Cookie via JavaScript</button>
            <p id="jsCookieResult"></p>
        </div>
    </div>

    <script>
      
        document.getElementById("checkCookie").addEventListener("click", function() {
            var cookieValue = document.cookie; //يقوم باسترجاع جميع الكوكيز المتاحة في السياق الحالي (الصفحة) وتخزينها في المتغير
            document.getElementById("jsCookieResult").textContent = "JavaScript Cookie Access: " + cookieValue;
        });
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
