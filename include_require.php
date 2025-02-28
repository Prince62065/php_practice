<?php
echo "<h1>This is my website</h1>";
// include 'firsts.php'; //it will give the warning but run the code if file doesnot exist;
require 'first.php'; //it will give fatal error if file doesnot exist;
echo "<br>My favourite color is red";
?>