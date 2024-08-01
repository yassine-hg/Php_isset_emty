<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset3.php" method="post">
        <label>Number-1 : </label>
        <input type="number" name="number1"><br><br>
        <label>Number-2 : </label>
        <input type="number" name="number2"><br><br>
        <input type="submit" value="Addition" name="Addition">
        <input type="submit" value="Substration" name="Substration">
        <input type="submit" value="Multiplication" name="Multiplication">
        <input type="submit" value="Division" name="Division"> 
    </form>
</body>
</html>
<?php

    if (isset($_POST["Addition"])){

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $num1 = intval($number1);
        $num2 = intval($number2);
    
        $add = ($num1 + $num2);
    
        echo "the result is : {$add}";
    }

    if(isset($_POST["Substration"])){

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $num1 = intval($number1);
        $num2 = intval($number2);

        $sub = $number1 - $number2;

        echo "the result is {$sub}";
    }

    if(isset($_POST["Multiplication"])){

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $num1 = intval($number1);
        $num2 = intval($number2);

        $sub = $number1 * $number2;

        echo "the result is {$sub}";
    }

    if(isset($_POST["Division"])){

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $num1 = intval($number1);
        $num2 = intval($number2);

        $sub = $number1 / $number2;

        echo "the result is {$sub}";
    }

?>