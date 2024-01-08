<?php 
$host='localhost';
$user='root';
$pass='';

	$conn = mysqli_connect($host, $user, $pass,$db);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else {
		echo "Connected successfully<br/>";
	}

	$sql = "INSERT INTO Employ VALUES (101, 'shibu', 10000)";

	if(mysqli_query($con, $sqli)){
		echo "Records inserted successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}

?>