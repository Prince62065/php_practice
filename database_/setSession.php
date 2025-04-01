<?php
session_start();
// inbuilt function to start the session

$_SESSION["name"]="Prince";
$_SESSION["username"]="prince@620";
if(isset($_SESSION["name"])){
    echo "Session variable is set";
}
?>