<?php
$cart=["bread"=>30,"jam"=>100,"peanut"=>50,"mayonaise"=>90,"butter"=>20];
echo "Total items ".count($cart)."<br>";
// echo "First item ".$cart[0];
echo"<br>";
foreach( $cart as $item){
    echo "$item<br>";
}
if(in_array("egg",$cart)){
    echo "Egg is present";
}
else{
    echo "Egg is not present";
}
// add egg
// array_push($cart,"egg","ketchup");
// print_r($cart);
// sort($cart);
// echo "<br>";
// echo "<h2>Sorting the cart</h2><br>";
// for($i=0;$i<count($cart);$i++){
//     echo "$cart[$i]<br>";
// }
// echo "<br>";
// rsort($cart);
// print_r($cart);
echo "<br>The price of the butter ".$cart["butter"]."<br>";
echo "Total items: ".count($cart);
echo"<br";
$item=array_keys($cart);
print_r($item);
$price=array_values($cart);
echo"<br>";
print_r($price);
// asort() will sorting the array according to values;
asort($cart);
echo"<br>";
print_r($cart);
// arsort() will sort the array in reverse word according to values;
arsort($cart);
echo"<br>";
print_r($cart);

?>