<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "animationfilm";
	
	$conn = mysqli_connect($severname, $username, $password, $dbname);
	
	$sql = "SELECT * FROM films";
?>