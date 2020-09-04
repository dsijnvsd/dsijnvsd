  
<html><body>

<?php

	$username = $_POST["name"];
	$password = $_POST["pass"];
	$servername = "192.168.0.31";
	$dbusername = "admin";
	$db = "testing";
	$dbPassword = '20200101';
	$address = '';
	$conn = mysqli_connect($servername, $dbusername,$dbPassword, $db);
	if ($conn->connect_error) {
		echo "Connection Error";
	}

	$sql = "INSERT INTO testing.login (name, address, password) VALUES ($username, $address,$password)";

	if ($conn->query($sql) === TRUE) {
    echo "Your account is successfully created";
	}
	else {
    echo "Please try again";
	}

$conn->close();

?>
</body>
</html>