<?php
$_servername = "localhost";
$username = "root";
$password = "";
$db = "php_sql";

// Create connection
$conn = mysqli_connect($_servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ensure all POST values are set
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

// Check if passwords match
if ($password !== $confirm_password) {
    die("Error: Passwords do not match.");
}

// Insert data into database
$sql = "INSERT INTO register (name, email, password, confirmpass) VALUES ('$name', '$email', '$password', '$confirm_password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
