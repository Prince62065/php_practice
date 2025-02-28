<?php
$s1=readline("Enter mark in English: ");
$s2=readline("Enter the mark in Maths: ");
$s3=readline("Enter the mark in Science: ");
$s4=readline("Enter the mark in Social Science: ");
$s5=readline("Enter the mark in Hindi: ");
$sum=($s1+$s2+$s3+$s4+$s5);
$total_mark=500;
$per=($sum/$total_mark)*100;
echo "The percentage is ".number_format($per,2);
echo "\n";
if($per>=90 && $per<=100){
    echo "The Grade is O";
}
else if($per>=80 && $per<90){
    echo "The Grade is A";
}
else if($per>=70 && $per<80){
    echo "The Grade is B";
}
else if($per>=60 && $per<70){
    echo "The Grade is C";
}
else if($per>=50 && $per<60){
    echo "The Grade is D";
}
else{
    echo "The Grade is Fail";
}
?>