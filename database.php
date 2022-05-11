<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
//check connection
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
	// code...
}
//create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
	// code...
} else {
	echo "Error creating Database". mysqli_error($conn);
}
mysqli_close($conn);
?>