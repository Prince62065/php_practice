<?php
$_servername = "localhost";
$username = "root";
$password = "";
$db = "php_db";

// Create connection
$conn = mysqli_connect($_servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to create table
// $sql = "CREATE TABLE register (
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(50) PRIMARY KEY,
//     password VARCHAR(100) NOT NULL,
//     confirm VARCHAR(100) NOT NULL
// )";


// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Table 'register' created successfully.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
