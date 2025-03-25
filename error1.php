<?php
// using custom error fxn
function custom_error($err_no,$err_msg,$err_file,$err_line){
    $myerrors="The error with $err_no and having $err_msg exist in $err_file and in line no $err_line";
    if(mail("pk6206572093@gmail.com","Errors",$myerrors)){
        echo "Error sent via email";
    }
}
set_error_handler("custom_error");
echo $test;
?>