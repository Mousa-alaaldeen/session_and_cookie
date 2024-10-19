<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Your Cart</h1>

        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>Item</th></tr></thead><tbody>";
            foreach ($_SESSION['cart'] as $item) {
                echo "<tr><td>$item</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p class='text-center text-danger'>Your cart is empty!</p>";
        }
        ?>

        <!-- Back to Product Page Button -->
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">Back to Products</a>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
