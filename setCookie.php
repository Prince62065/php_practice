<?php
setcookie("username","Prince",time()+60,"/");
setcookie("mob","620xxxxxxx",time()+60,"/");
setcookie("email","pk@gamil.com",time()+60,"/");
if(isset($_COOKIE['username'] ) && isset($_COOKIE["mob"])){
    echo "My Cookie value is set you can see it it browser<br>";;
}
echo "Total number of cookie is ".count($_COOKIE)."<br>";
echo 'The value of username '.$_COOKIE['username']."<br>";
echo "The value of mob no is ".$_COOKIE['mob']."<br>";
echo "The value of email is ".$_COOKIE['email']."<br>";
print_r($_COOKIE);

// setcookie("username"," ",time()-1);
// if(isset($_COOKIE['username'])){
//     echo "The cookie value is present";
// }
// else{
//     echo "cookie is deleted";
// }

?>