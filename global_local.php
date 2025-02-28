<?php
$x=10;
// global variable has global scope i.e outside the variable.
function mytest(){
    global $x;
    echo "the local variable x is $x<br>";
}
mytest();
echo "the global variable x is $x";
?>