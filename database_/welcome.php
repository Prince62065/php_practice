<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   

<?php
session_start();
$username=explode("@",$_SESSION["name"]);
$user=strtoupper($username[0]);
echo "<div class='flex justify-between bg-slate-800 text-white p-5'>";
echo "<h1 class=' text-2xl'>WELCOME $user</h1>";
?>
 <form action="" method="POST">
    <input type="submit" value="Logout" class="text-white px-5" name="logout">
    <input type="submit" value="About us" name="about">
    <?php
    echo "</div>";
    ?>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["logout"])){
        header("Location:logout.php");
        exit();
    }
    if(isset($_POST["about"])){
        header("Location:about.php");
        exit();
    }
    if (!isset($_SESSION["start"])) {
        $_SESSION["start"] = time();
    }
    
   
}
?>
</body>
</html>
