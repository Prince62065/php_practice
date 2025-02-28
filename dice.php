<?php
$num;
$count=0;
while(1){
    $num=rand(1,6);
    echo "Dice: $num"."\n";
    if($num==6){
        echo "Game is over\n";
        break;
    }
    if($num%2==0){
        continue;
    }
    else{
        $count++;
    }
    
}
echo "Total number of point :$count";
?>