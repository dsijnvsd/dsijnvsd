<html><body>

<?php

	$username = $_POST["name"];
	$password = $_POST["pass"];
	$servername = "192.168.0.31";
	$dbusername = "admin";
	$db = "testing";
	$dbPassword = "20200101";
	$address = '';
	$conn = mysqli_connect($servername, $dbusername,$dbPassword, $db);
	if ($conn->connect_error) {
		echo "Connection Error";
	}

	$checkpassword = "SELECT password from testing.customers where name=$username";

	// if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
	// }
	// else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
	// }
		if($checkpassword === $password){
			header('Location: https://simpletax.ca/'); 
		}
		else{
			echo "Please try again.";
		}
$conn->close();


 
?>
</body>
</html>