<?php
$s1=readline("Enter the marks in 1st subjects :");
$s2=readline("Enter the marks in 2st subjects :");
$s3=readline("Enter the marks in 3st subjects :");
$s4=readline("Enter the marks in 4st subjects :");
$s5=readline("Enter the marks in 5st subjects :");
$total=500;
$sum=$s1+$s2+$s3+$s4+$s5;
$per=($sum/$total)*100;
echo "The percentage is ".number_format($per);
?>