<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page</h1>

<?php
$servername = "dbserver.dev.a71692df-4e5c-4e91-b58b-b344ec63c1fd.drush.in:16356";
$username = "pantheon";
$password = "3fbb6a740eb846c5898673c5586a7617";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB1";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: ".$conn->error;
}

$conn->close();

//test
?>


</body>
<?html>
