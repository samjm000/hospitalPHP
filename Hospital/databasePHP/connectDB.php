<?php
function connectTODB() {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$databaseName = "hospitalDB";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $databaseName);
	// Check connection

	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	echo "Unable to connect to database, please check connection";	
	}
	//echo "Connected to DB successfully";	
}
?>