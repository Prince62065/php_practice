<?php
$servername="localhost";
$username="root";
$password="";
$dbname="UNIVERSITY";
$connection=mysqli_connect($servername,$username,$password,$dbname);
// if($connection){
//     echo "Connection successful";
// }
// else{
//     die("Error: Connection Failed");
// }

// create the database
// $query="CREATE DATABASE UNIVERSITY";
// $sql=mysqli_query($connection,$query);
// if($sql){
//     echo "Database create successful";
// }
// else{
//     die("Error:in creating database".mysqli_error($connection));
// }


// create students table
// $query="CREATE TABLE students( 
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(20) NOT NULL,
// regno INT(20) NOT NULL,
// mobno INT(10) NOT NULL,
// email VARCHAR(50) NOT NULL
// )";
// $sql=mysqli_query($connection,$query);
// if($sql){
//         echo "Table create successful";
//     }
//     else{
//         die("Error:in creating table".mysqli_error($connection));
//     }

// insert data into the table
// $query="INSERT INTO students(id,name,regno,mobno,email) VALUES(2,'Harsh',12312674,646484161,'harsh@gmail.com')
// ,(3,'Rohan',12312641,646484184,'rohan@gmail.com')";
// $sql=mysqli_query($connection,$query);
// if($sql){
//         echo "Table  data inserted successful";
//     }
//     else{
//         die("Error:in inserting table".mysqli_error($connection));
//     }


// update
// $query="UPDATE students set mobno=895471265 where id=2";
// $sql=mysqli_query($connection,$query);
// if($sql){
//         echo "Table  data updated successful";
//     }
//     else{
//         die("Error:in updating table".mysqli_error($connection));
//     }

$query="SELECT *FROM students";
$result=mysqli_query($connection,$query);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        echo "ID: ".$row["id"]." Name: ".$row["name"]." Email: ".$row["regno"]." Mobile no: ".$row["mobno"]."<br>";
    }
}
?>