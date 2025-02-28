<?php
$age=array("Peter"=>35,"Ben"=>37,"Joe"=>43);
echo json_encode($age);
echo "\n";
$jsonobj='{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj)) ;
print_r(json_decode($jsonobj));
?>