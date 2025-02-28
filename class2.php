<?php
echo "Hello World"."\n";
Echo "Hello World"."\n";
// php is not case sensitive for keywords.
// variable declaration
$a=20;
$b=10;
// add
// echo $a+$b."\n";
// echo $a-$b."\n";
// echo $a* $b."\n";
// echo $a / $b."\n";
// echo $a % $b."\n";
echo "<br>Addition of a and b ".$a+$b;
echo "<br>Subtraction of a and b ".$a-$b;
echo "<br>Multiplication of a and b ".$a*$b;
echo "<br>Division of a and b ".$a/$b;
echo "<br>";
var_dump($a);
var_dump(4.4);
var_dump("Name");
var_dump(true);
echo "The size of int  is ".PHP_INT_SIZE."<br>";
echo "The Maximum value of integer ".PHP_INT_MAX."<br>";
echo "The Minimum value of integer ".PHP_INT_MIN."<br>";
$name="20men";
// quotes difference
echo 'The num is '.$a;
echo "The num is $a<br>";
// variable are case sensitive.
// maths function.
echo (number_format(PI(),2))."<br>";
echo (min(0,50,84,64,34))."<br>";
echo (max(84,64,34,37))."<br>";
echo (abs(-5.4))."<br>";
echo (sqrt(64))."<br>";
echo (rand())."<br>";
echo (round(6.4))."<br>";


$name="Amit is a good boy";
echo $name;
echo "<br>";
echo "The length of "."my string is ".strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"Amit");
echo "<br>";
echo str_replace("Amit","Rohan",$name);
echo "<br>";
echo "<pre>";
echo rtrim("  this is a good boy        ");
echo "<br>";
echo ltrim("    this is a good boy      ");
echo "</pre>";
?>