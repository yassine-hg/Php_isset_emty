<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset.php" method="post">
        <label>email</label>
        <input type="email" name="email"><br>
        <label >age</label>
        <input type="number" name="age"><br>
        <input type="submit" name="login">
    </form>
</body>
</html>

<?php
    if (isset($_POST["login"])){

        $email = $_POST["email"];
        $age = $_POST["age"];

        if(empty($email)){
            echo "name is not submit";
        }

        elseif(empty($age)){
            echo"age not submit";
        }
        else{
            echo"your email is {$email} and your are {$age}";
        }
    }
?>