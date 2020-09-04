<html><body>

<?php

	$username = $_POST["name"];
	$password = $_POST["pass"];
	$servername = "localhost";
	$dbusername = "root";
	$db = "cprg251";
	$dbPassword = "123456";
	
	$conn = mysqli_connect($servername, $dbusername,$dbPassword, $db);
	if ($conn->connect_error) {
		echo "Connection Error";
	}

	$checkpassword = "SELECT duration from cprg251.movies where title=$username";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
		// if($checkpassword === $password){
		// 	echo "Your password is correct";
		// }
		// else{
		// 	echo "Please try again.";
		// }
$conn->close();

?>
</body>
</html>