<?php
    $urlerror="";
    $dscerror="";
        if($_SERVER["REQUEST_METHOD"]="POST"){
            if(isset($_POST["submit"])){
                $url=$_POST["video"];
                $dsc=$_POST["des"];
                if(empty($url) || !filter_var($url,FILTER_VALIDATE_URL)){
                    $urlerror="Invalid URL";
                    
                }
                if(empty($dsc) || strlen($dsc)<=5){
                    $dscerror="Empty or word limit exceeded";
                }
            }
        }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video url validation</title>
</head>
<body>
    <form action="" method="POST">
        <strong>Enter Video Link</strong>
        <input type="url" name="video" placeholder="Enter Link Here">
        <span><?php echo  $urlerror ?> </span>
        <br>
        <textarea name="des" id="" placeholder="Enter Desciptionn Here"></textarea>
        <br>
        <span><?php echo  $dscerror ?> </span>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>