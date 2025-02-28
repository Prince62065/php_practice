<?php
// indexed array
// $cars=["zen","Maruti","Fiat","Mercedes"];
// print_r($cars);
// print the reverse order
// echo "print the reverse order\n";
// for($i=sizeof($cars)-1;$i>=0;$i--){
//     echo $cars[$i];
//     echo "  ";
// }
// echo "\nThe element of an array is \n";
// for($i=0;$i<count($cars);$i++){
//     echo $cars[$i];
//     echo "  ";
// }
// reversing the array using function
// print_r(array_reverse($cars));

// echo "\nThe element of an array after using function are\n";
// for($i=0;$i<sizeof($cars);$i++){
//     echo $cars[$i];
//     echo "  ";
// }

// associative arrays
// $myCar=[
//     "brand"=>"Ford",
//     "model"=>"Mustang",
//     "year"=>1964
// ];
// echo "The associative array\n";
// echo $myCar["year"]."\n";
// echo $myCar["brand"]."\n";
// echo $myCar["model"]."\n";
// print_r($myCar);
// foreach loop
// echo "The element of an array using foreach loop\n";
// foreach($myCar as $ele){
//     echo "$ele\n";
// }
// foreach($myCar as $x=>$y){
//     echo "$x => $y\n";
// }
// // call the function using array element 
// echo "\nFunction call using array element\n";
// function msg(){
//     echo "This is my message";
// }
// $myarray=["a","b",msg()];
// $myarray[2];

// $name=array("Manoj","Rahul","Aneesh","Rohan");
// $marks=array("75","89","44","78");
// $c=array_combine($name,$marks);
// print_r($c);
// echo"\n array chunk\n";
// print_r(array_chunk($c,3));

// array_intersect();
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("red","blue");
// $result=array_intersect($a1,$a2,$a3);
// print_r($result);

// array_search will return index or key
echo array_search("red",$a1);
echo "\n";
echo array_search("red",$a3);
?>