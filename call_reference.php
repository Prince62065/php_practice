<?php
function change_name(& $nm){
    echo "Initially the name is $nm\n";
    $nm=$nm."_new";
    echo "This function changes the name to $nm\n";
}

$name="John";
echo "My name is $name\n";
change_name($name);
echo "My name is still $name";
?>