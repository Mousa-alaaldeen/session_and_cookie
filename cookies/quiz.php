<?php
$score = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['q1']) && $_POST['q1'] == "B") $score++;
    if (isset($_POST['q2']) && $_POST['q2'] == "A") $score++;
    if (isset($_POST['q3']) && $_POST['q3'] == "C") $score++;
    if (isset($_POST['q4']) && $_POST['q4']=='A') $score++;
    setcookie("quizScore", $score, time() + (30 * 24 * 60 * 60), "/");
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}

if (isset($_COOKIE["quizScore"])) {
    $score = $_COOKIE["quizScore"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz with Cookies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Simple Quiz</h1>
    <p>Your total score: <strong><?php echo htmlspecialchars($score); ?></strong></p>

    <form method="POST" action="">
        <div class="form-group">
            <h3>1. What is the capital of France?</h3>
            <div>
                <label><input type="radio" name="q1" value="A"> A) London</label><br>
                <label><input type="radio" name="q1" value="B"> B) Paris</label><br>
                <label><input type="radio" name="q1" value="C"> C) Berlin</label>
            </div>
        </div>

        <div class="form-group">
            <h3>2. Which planet is known as the Red Planet?</h3>
            <div>
                <label><input type="radio" name="q2" value="A"> A) Mars</label><br>
                <label><input type="radio" name="q2" value="B"> B) Jupiter</label><br>
                <label><input type="radio" name="q2" value="C"> C) Saturn</label>
            </div>
        </div>

        <div class="form-group">
            <h3>3. Who wrote 'Romeo and Juliet'?</h3>
            <div>
                <label><input type="radio" name="q3" value="A"> A) Charles Dickens</label><br>
                <label><input type="radio" name="q3" value="B"> B) Mark Twain</label><br>
                <label><input type="radio" name="q3" value="C"> C) William Shakespeare</label>
            </div>
        </div>
        <div class="form-group">
        <h3>4. Who wrote 'Romeo and Juliet'?</h3>
        <label ><input type="radio" name='q4' value='A'>A) Charles Dickens<</label> <br>
        <label ><input type="radio" name='q4' value='B'>B) Charles Dickens<</label> <br>
        <label ><input type="radio" name='q4' value='C'>C) Charles Dickens<</label> <br>
        </div>

        <button type="submit" class="btn btn-primary">Submit Answers</button>
    </form>
</body>
</html>
