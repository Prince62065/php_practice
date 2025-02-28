<?php
function my_callback($item){
return strlen($item);
}
$strings=["apple","banana","coconut"];
$length=array_map("my_callback",$strings);
print_r($length);
?>