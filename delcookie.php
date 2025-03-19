<?php
setcookie("username"," ",time()-1);
if(isset($_COOKIE['username'])){
    echo "The cookie value is present";
}
else{
    echo "cookie is deleted";
}
?>