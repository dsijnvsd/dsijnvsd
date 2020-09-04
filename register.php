  
<html><body>

<?php

	// $username = $_POST["name"];
	// $password = $_POST["pass"];
	// $servername = "192.168.0.31";
	// $dbusername = "admin";
	// $db = "testing";
	// $dbPassword = '20200101';
	$username = $_POST["name"];
	$password = $_POST["pass"];
	$servername = "localhost";
	$dbusername = "root";
	$db = "cprg251";
	$dbPassword = "123456";
	$address = '';
	$conn = mysqli_connect($servername, $dbusername,$dbPassword, $db);
	if ($conn->connect_error) {
		echo "Connection Error";
	}

	$sql = "INSERT INTO cprg251.movies (duration, title, year) VALUES ($1, $1,$1)";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();

?>
</body>
</html>