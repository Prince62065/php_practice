<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storing cookie</title>
</head>
<body>
    <form action="" method="POST">
        Enter Username:
        <input type="text" name="user" >
        <br>
        <input type="submit" name="set"  value="SET COOKIE">
        <input type="submit" name="display" value="Display Cookie">
        <input type="submit" name="del" value="DELETE COOKIE">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST["set"])){
                $username=$_POST["user"];
                setcookie("username",$username,time()+60,"/");
                if(isset($_COOKIE['username'])){
                    echo "Your Cookie value is set";
                }
                else{
                    echo "Your Cookie value is not set";
                }
            }
            if(isset($_POST["display"])){
                if(isset($_COOKIE['username'])){
                    echo "The value of Cookie is ".$_COOKIE['username'];
                }
                else{
                    echo "Your Cookie value is not present";
                }
            }
            if(isset($_POST["del"])){
                setcookie("username","",time()-3600,"/");
                if(!isset($_COOKIE['username'])){
                    echo "Your Cookie is deleted successfully";
                }
                else{
                    echo "Your Cookie value is not deleted";
                }
            }
        }
    ?>
</body>
</html>