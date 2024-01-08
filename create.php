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
	
	$sql = "CREATE TABLE Employe (Emp_code INT, name VARCHAR(20), basic_pay INT)";

	if ($conn->query($sql)) {
		echo "Table created successfully";
	} else {
		echo $conn->error;
	}

?>