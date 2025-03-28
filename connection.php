<?php
$_servername="localhost";
$username="root";
$password="";

// create the connection
$conn=mysqli_connect($_servername,$username,$password);
// mysqli_connect() function opens a new connection to the MySQL server.
// check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
else{
    echo "Connected successfully";
}

?>