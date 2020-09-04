  
<html><body>

<?php
	$sinnumber = $_POST["sinnumber"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$password = $_POST["pass"];
	$birthday = $_POST["birthday"];
	$companyname = $_POST["company_name"];
	$servername = "192.168.0.31";
	$dbusername = "admin";
	// $db = "testing";
	$db = "information_tax123ca26762166";
	
	$dbPassword = '20200101';
	$address = '';
	$conn = mysqli_connect($servername, $dbusername,$dbPassword, $db);
	if ($conn->connect_error) {
		echo "Connection Error";
	}

	// $sql = "INSERT INTO testing.customers (sin_number, firstname, lastname, password, birthday, company_name) VALUES ($sinnumber, '$fname', '$lname', '$password','$birthday','$companyname')";
	$sql = "INSERT INTO company (Company_name) VALUES ( '$fname')";

	if ($conn->query($sql) === TRUE) {
    echo "Your account is successfully created";
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}


$conn->close();

?>
</body>
</html>