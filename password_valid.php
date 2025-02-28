<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validator</title>
</head>
<body>
    <h1><marquee behavior="" direction="">Password Validator</marquee></h1>
    <form method="POST">
        <label for="password">Password</label>
        <input type="password" name="password" required><br>
        <button type="submit" name="checker">Check Password</button>
    </form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["checker"])){
        $password=$_POST["password"];
        $goodlength=strlen($password)>=8;
        $upcase=preg_match("/[A-Z]/",$password);
        $lcase=preg_match("/[a-z]/",$password);
        $digit=preg_match("/[0-9]/",$password);
        $special=preg_match("/[^A-Za-z0-9]/",$password);
        if($goodlength && $upcase && $lcase && $digit && $special){
            echo "<h1>You have a very strong Password</h1>";
        }
        else{
            echo "<h1>You have a very weak Password</h1>";
        }
    }
}

?>
</body>
</html>