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

$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('jer','Jerman', '4')";

if (mysqli_query($conn, $sql)) {
	echo "new record created succesfully";
	// code...
}else {
	echo "error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>