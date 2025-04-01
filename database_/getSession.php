<?php
session_start();
echo "Welcome $_SESSION[name]<br>";
echo "Username is $_SESSION[username]<br>";
echo "My session id is ".session_id()."<br>";
print_r($_SESSION);
?>