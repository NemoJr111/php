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
	$conn = mysqli_connect("localhost", "root", "", "my-db");
	$sql = "SELECT * FROM employ";
	$stmt = $conn->prepare($sql);
	$var = $stmt->execute();
	$result = $stmt->get_result();

	while ($row = $result->fetch_assoc()) {
		echo "Emp Code: {$row['emp_code']}, Name: {$row['name']}, Salary: {$row['basic_pay']}";
		echo "<br />"; 
	}
?>	