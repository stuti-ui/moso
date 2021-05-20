<?php
	// Database configuration 
	$dbHost     = "localhost"; 
	$dbUsername = "DESKTOP-845VQUF\hp"; 
	$dbPassword = ""; 
	$dbName     = "insta"; 
	 
	// Create database connection 
	$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

?>