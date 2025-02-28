<?php
echo "First 10 natural number<br>";
for($i=1;$i<=10;$i++){
    echo "$i <br>";
}
echo "First 10 even number<br>";
for($i=2;$i<=20;$i+=2){
    echo "$i<br>";
}
echo "Sum of first 10 natural number<br>";
$sum=0;
for($i=1;$i<=10;$i++){
    $sum+=$i;
}
echo "$sum";
?>