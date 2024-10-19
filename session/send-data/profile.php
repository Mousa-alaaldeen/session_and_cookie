<?php session_start(); 
if (!isset($_SESSION["name"])) { 
    header("Location:users.php");
    die;

}

 ?>
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
            <h1 class="text-center border p-5 my-3">Welcome</h1>
            <div class="col-8 mx-auto p-2">
                
               
                    <div class="alert alert-success">
                        <?php echo $_SESSION['name'] ?>
                    </div>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['email'] ?>
                    </div>

                    <div class="border  p-3 ">
                        <a href="logout.php" class="btn btn-primary ">LogOut</a>
                    </div>

                    
                     
                    
                     
                
          
            </div>

        </div>

    </div>
    <a href="user.php?id=50">go to user page </a>
    <br>
    <a href="filter.php?id=5&name=Mousa">go to filter page</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>