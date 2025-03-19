<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    if(isset($_COOKIE["language"])){
        $lang=$_COOKIE["language"];
        if($lang=="english"){
            echo "Good Morning";
        }
        else if($lang=="hindi"){
            echo "Namaste";
        }
        else if($lang=="punjabi"){
            echo "Sat Sri Akal";
        }
        else if($lang=="french"){
            echo "Bonjour!!";
        }
    }
?>
<form action="" method="POST">
<input type="submit" name="lang_submit" value="Choose the language">

</form>

</body>
</html>