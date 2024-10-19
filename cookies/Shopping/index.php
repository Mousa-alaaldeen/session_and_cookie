<?php

$cookie_expiry_time = time() + (30 * 24 * 60 * 60); 

if (isset($_POST['add_to_cart'])) {
    $product = $_POST['product'];

   
    if (!isset($_COOKIE['cart'])) {
        $cart = []; 
    } else {
        // استرجاع العربة الموجودة (تفكيك البيانات المحفوظة في الكوكي)
        $cart = json_decode($_COOKIE['cart'], true); 
    }


    $cart[] = $product;
    // إعادة حفظ العربة في الكوكي (تحويل المصفوفة إلى JSON)
    setcookie('cart', json_encode($cart), $cookie_expiry_time, "/");

    echo "<p class='text-center text-success mt-3'>$product added to cart!</p>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Product Listing</h1>
        <div class="row">

            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 1</h5>
                        <form method="post" action="index.php">
                            <input type="hidden" name="product" value="Product 1">
                            <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 2</h5>
                        <form method="post" action="index.php">
                            <input type="hidden" name="product" value="Product 2">
                            <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 3</h5>
                        <form method="post" action="index.php">
                            <input type="hidden" name="product" value="Product 3">
                            <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Link to Cart Page -->
        <div class="text-center mt-4">
            <a href="cart.php" class="btn btn-success">Go to Cart</a>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
