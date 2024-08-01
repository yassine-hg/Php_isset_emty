<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset4.php" method="post">
        <input type="text" placeholder="Enter the time (AM or PM)" name="time">
        <input type="submit" name ="submit">
    </form>
</body>
</html>
<?php
    if (isset($_POST["submit"])) {
        $time = $_POST["time"]; 
        $hour = intval($time); 
        $period = substr($time, -2); 

        if ($period == "AM") {
            if ($hour >= 5 && $hour < 12) {
                echo "Good morning!";
            } else {
                echo "Good night!";
            }
        } elseif ($period == "PM") {
            if ($hour == 12 || ($hour >= 1 && $hour < 5)) {
                echo "Good afternoon!";
            } elseif ($hour >= 5 && $hour <= 9) {
                echo "Good evening!";
            } else {
                echo "Good night!";
            }
        } else {
            echo "Invalid time format.";
        }
    }
?>

