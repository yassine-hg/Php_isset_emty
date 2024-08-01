<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset2.php" method="post">
        <label> input your favorite number: </label>
        <input type="number" name="number">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])){

        $number = $_POST["number"];

        if(empty($number)){
            echo"Enter a number please";
        }
        else{
            echo "your favorite number is {$number}";
        }
    }
?>