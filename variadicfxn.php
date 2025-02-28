<?php
function multiply(...$numbers){
    $result=1;
    foreach($numbers as $num){
        $result*=$num;
    }
    return $result;
}

echo "Multiplication of 2,3: ".multiply(2,3)."\n";
echo "Multiplication of 1,4,5: ".multiply(1,4,5)."\n";
?>