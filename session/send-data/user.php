<?php
session_start();
require_once 'core/validations.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $user_name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS));
    $user_email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

   
    if (requiredInput($user_name)) {
        $errors[] = "Name is required";
    } elseif (minInput($user_name, 3)) {
        $errors[] = 'Name must be greater than 3 characters';
    } elseif (maxInput($user_name, 12)) {
        $errors[] = 'Name must be smaller than 12 characters';
    }


    if (requiredInput($user_email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email';
    }

  
    if (empty($errors)) {
        echo "Success! Data has been processed.<br>";
        $_SESSION['name']= $user_name;
        $_SESSION['email']= $user_email; 
     
        header("Location: profile.php");
        die ;   

        // echo "Name: " . htmlspecialchars($user_name) . "<br>";
        // echo "Email: " . htmlspecialchars($user_email);
    } else {
       
        $_SESSION['errors'] = $errors;
        header("Location: users.php");
        exit();
    }
} else {
    echo 'NOT SUPPORTED METHOD';
}
?>
