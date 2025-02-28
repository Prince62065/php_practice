<?php
// $ages=[23,45,29,34,50,19,18,23,27,18,65];
$ages=[23,45,29,34,50,19,18,23,27,18,65];
// used to find unique element 
// $unique=array_unique($ages);
// echo "The unique ages are\n";
// foreach($unique as $age){
//     echo "$age ";
// }
// $a=[4,5,54,6];
// // divide the array into desire number of part
// print_r(array_chunk($a,2,true));
// $b=[1,5,5,9,3,7,4,21];

// // 
// print_r(array_flip($b));
// echo "\n";
// // 
// print_r(array_pop($b));
// echo "\n";
// print_r(array_push($b,12,"yellow"));
// echo "\n";

$a = ["apple", "banana", "cherry", "date", "fig"];
$result = array_slice($a, 1, 2);
print_r($result);
$text = "Hello World";
echo substr($text, 0, 5);

// echo "\n";
// $str="Hello world. It is a beautiful days.";
// print_r(array_explode(" ",$str));
// // it will return number of times an element occour;
// print_r(array_count_values($b));
// // min() will return minimum element from array
// echo "\nMinimum age : ".min($unique)."\n";
// // max() will return maximum element from array
// echo "Maximum age :".max($unique)."\n";
// sort($unique);

// echo "The number of unique age in an array is ".count($unique)."\n";
// echo "\nThe unique ages after sorting are\n";
// foreach($unique as $age){
//     echo "$age ";
// }
// // array_combine() is used to combine to array as key and values pairs.
// $name=array("Manoj","Rahul","Sohan");
// $marks=array(84,86,75);
// $result=array_combine($name,$marks);
// print_r($result);
?>