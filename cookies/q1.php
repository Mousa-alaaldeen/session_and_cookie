<?php

session_start();


if (isset($_POST['color'])) {
   
    setcookie('bg_color', $_POST['color'], time() + (30 * 24 * 60 * 60), "/");

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


$backgroundColor = isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color'] : "#FFFFFF"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color Selector</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($backgroundColor); ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .color-selector {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .color-selector h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="color-selector">
        <h2>Select Your Background Color</h2>
        <form method="post" action="">
            <div class="mb-3">
                <label for="color">Choose Color:</label>
                <select name="color" id="color" class="form-select">
                    <option value="red" <?php if ($backgroundColor == 'red') echo 'selected'; ?>>Red</option>
                    <option value="blue" <?php if ($backgroundColor == 'blue') echo 'selected'; ?>>Blue</option>
                    <option value="green" <?php if ($backgroundColor == 'green') echo 'selected'; ?>>Green</option>
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save Color</button>
            </div>
        </form>
    </div>
</body>
</html>
