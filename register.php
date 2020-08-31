  
<html><body>

<?php

	$username = $_POST["name"];
	$password = $_POST["pass"];
	$servername = "192.168.0.31";
	$dbusername = "admin";
	$db = "testing";
	$dbPassword = '20200101';
	$conn = mysqli_connect($servername, $dbusername,$dbPassword, $db);
	if ($conn->connect_error) {
		echo "Connection Error";
	}

	$sql = "INSERT INTO login (username, pass) VALUES ('$username','$password')";

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