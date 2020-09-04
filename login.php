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

	// $sql = "SELECT password from testing.customers where name= '$username";

	$sql= "SELECT password FROM testing.customers WHERE name = '$username' AND password = '$password' ";
	$result = mysqli_query($conn, $sql);
	$count=mysql_num_rows($result);
	if($count==1){
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
	}
	// $check = mysqli_fetch_array($result);
	
	// if ($conn->query($sql) === TRUE) {
    // header('Location: http://25.29.164.31:5501/SimpleTax.html'); 
	// }
	// else {
    // echo "Please try again.";
	// }

// $conn->close();


 
?>
</body>
</html>