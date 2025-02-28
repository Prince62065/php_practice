<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form  method="POST">
        <label for="num1">Enter 1st num:</label>
        <input type="text" name="num1" placeholder="Enter the num" required><br>
        <label for="num2">Enter the 2nd num:</label>
        <input type="text" name="num2" placeholder="Enter the num" required><br>
        <input type="submit" name="add" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="mul" value="*">
        <input type="submit" name="div" value="/">
        <input type="submit" name="mod" value="%">
        <input type="submit" name="power" value="**">
    </form>
    <?php
// verify the server request method
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    if(isset($_POST["add"])){
        $result=$num1+$num2;
        echo "<h1> The result is $result <h1>";
    }
    if(isset($_POST["sub"])){
        $result=$num1-$num2;
        echo "<h1> The result is $result <h1>";
    }
    if(isset($_POST["mul"])){
        $result=$num1*$num2;
        echo "<h1> The result is $result <h1>";
    }
    if(isset($_POST["div"])){
        $result=$num1/$num2;
        echo "<h1> The result is $result <h1>";
    }
    if(isset($_POST["mod"])){
        $result=$num1%$num2;
        echo "<h1> The result is $result <h1>";
    }
    if(isset($_POST["power"])){
        $result=$num1**$num2;
        echo "<h1> The result is $result <h1>";
    }
}

?>
</body>
</html>