<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Choose the language:
        <select name="lang" id="lang" value="Choose Your language">
            <option value="english">English</option>
            <option value="hindi">Hindi</option>
            <option value="punjabi">Punjabi</option>
            <option value="french">French</option>
        </select><br>
        <input type="submit" name="submitting" value="Submit My Language">
    </form>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["submitting"])){
            $lang=$_POST["lang"];
            setcookie("language",$lang,time()+3600,"/");
            header("Location:greeting.php");
        }
    }
?>
</body>
</html>