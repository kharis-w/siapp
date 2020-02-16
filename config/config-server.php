<?php
	$servername = "localhost";
	$username = "akfz7764_admin";
	$password = "apaajayangpentingbisa";
	$dbname = "akfz7764_siapp";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//untuk menampilkan pesan error
	    die("Connection failed: " . $conn->connect_error);
	}
?>