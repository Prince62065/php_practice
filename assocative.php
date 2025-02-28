<?php
$products=["Laptop"=>1200,"Tablet"=>600,"Smartphone"=>900,"Desktop"=>1500];

print_r($products);
echo "\n";
ksort($products);
print_r($products);
asort($products);
echo "\nThe prizes in asc order:\n";
print_r($products);
$max=max($products);
echo "\nThe maximum prize is :$max\n";
$name=array_search($max,$products);
echo "The name of maximum prize items is :$name\n";

$min=min($products);
$min_name=array_search($min,$products);
echo "The product having minimum prize is $min_name and price is $min\n";
?>