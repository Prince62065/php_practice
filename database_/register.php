<?php
// make the connection with my table
$servername="localhost";
$username="root";
$password="";
$dbname="php_db";
$table_name="register";

// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
    echo "Connection successfully<br>";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $confirm_password=$_POST["confirm_password"];

        $sql = "INSERT INTO register (name, email, password, confirm_password) VALUES ('$name', '$email', '$password', '$confirm_password')";

        if(mysqli_query($conn,$sql)){
            echo "new record created successfully";
        }
        else{
            echo "Error: " .$sqli . "<br>";
        }

    }

?>