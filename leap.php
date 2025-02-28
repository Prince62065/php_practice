<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>
<body>
    <h1>Check Leap year</h1>
    <form  method="POST">
        <label for="year">Enter any year</label><br>
        <input type="number" name="year" required><br>
        <input type="submit" name="check_leap" value="CHECK IF IT IS LEAP YEAR OR NOT">
    </form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['check_leap'])){
            $year=$_POST["year"];
            if(($year%400==0) || ($year%4==0 && $year%100!=0)){
                echo "<h1 style='color:green'>The YEAR is Leap Year</h1>";
            }
            else{
                echo "<h1 style='color:red'>The YEAR is not Leap Year</h1>";
            }
        }
    }
?>
</body>
</html>