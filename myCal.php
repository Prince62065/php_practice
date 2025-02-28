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