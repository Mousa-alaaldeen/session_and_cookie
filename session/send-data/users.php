<?php session_start(); 
unset($_SESSION["name"]);
unset($_SESSION["email"]); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1> Send data from form!</h1>
    <div class="container">
        <div class="row">
            <h1>Users Database</h1>
            <div class="col-8 mx-auto p-2">
                <?php if(isset($_SESSION['errors'])): ?>
                <?php foreach($_SESSION["errors"] as $error): ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $error; ?>
                    </div>

                    <?php endforeach;
                    unset($_SESSION["errors"]);
                      endif;
                     ?>  
                     
                    
                     
                
            <!-- <?php var_dump($_SESSION["errors"])?> -->
            
                <form action="user.php" method="post" class="p-3 border">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="type name of user">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" placeholder="type email of user">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Send" class="form-control btn btn-success">

                    </div>
                    
                </form>
            </div>

        </div>

    </div>
    <a href="user.php?id=50">go to user page </a>
    <br>
    <a href="filter.php?id=5&name=Mousa">go to filter page</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>