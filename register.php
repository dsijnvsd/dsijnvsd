  
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

	$sql = "INSERT INTO testing.customers (name, address, password) VALUES ('$username', '$address','$password')";

	if ($conn->query($sql) === TRUE) {
    echo "Your account is successfully created";
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}



	while($row = mysql_fetch_array($result)) {
		echo $row['column_name']; // Print a single column data
		echo print_r($row);       // Print the entire row data
	}
$conn->close();

?>
</body>
</html>