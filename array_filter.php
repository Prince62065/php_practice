<?php
$ages=[23,24,25,26,15,16,18];
$evenages=array_filter($ages,function($num){
    return $num%2==0;
});

print_r($evenages);
echo "\n";
echo "Total even ages ".count($evenages);
echo "\n";
$oddages=array_filter($ages,function($num){
    return $num%2!=0;
});
print_r($oddages);
echo "\n";
echo "Total odd ages ".count($oddages);
echo "\n";
array_push($ages,56,67,78);
echo "New ages \n";
print_r($ages);
?>