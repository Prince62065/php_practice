<?php
// $username="A m i t <h1>";
// $sanitizerUser=filter_var($username,FILTER_SANITIZE_STRING);
// echo $sanitizerUser;
// $ip="172.16.74.12";
// $var_ip=filter_var($ip,FILTER_VALIDATE_IP);
// echo $var_ip;
$email="@ljgalj.gmail.com";

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Validate email";
}
else{
    echo "invalid email";
}
$email1="p123@gamil.com";
echo "\n";
if(filter_var($email1,FILTER_VALIDATE_EMAIL)){
    echo "Validate email";
}
else{
    echo "invalid email";
}
?>