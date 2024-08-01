<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset5.php" method="post">
        <label>Username: </label>
        <input type="text" name ="username">
        <label>Password: </label>
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php

    if (isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "yassine" && $password == "OMS0FGAZ"){
            echo "Welcome {$username}";
        }
        else{
            echo "Try again";
        }
    }
?>