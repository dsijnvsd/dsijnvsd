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

	$sql= "select password from testing.customers where name = '$username' and password='$password'";
	// $result = mysqli_query($conn, $sql);
	// $count=mysql_num_rows($result);
	// if($count==1){
	// 	session_start();
	// 	$_SESSION['loggedin'] = true;
	// 	$_SESSION['username'] = $username;
	// }
	$result = $conn->query($sql);


	// if ($conn->query($sql) === TRUE) {
	// 	header('Location: http://25.29.164.31:5501/SimpleTax.html'); 
	// 	}
	// 	else{
	// 		echo "error"
	// 	}


	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		//   echo "id: " . $row["name"]. " - Name: " . $row["address"]. " "
		//   echo $row["password"];
		  if($row["password"] = $password){
			header('Location: http://tax123.ca/'); 
			
		  }
		  
		
		}
	  } 
	  else {
		echo "0 results";
	  }

	// $check = mysqli_fetch_array($result);
	
	// if ($conn->query($sql) === TRUE) {
    // header('Location: http://25.29.164.31:5501/SimpleTax.html'); 
	// }
	// else {
    // echo "Please try again.";
	// }

$conn->close();


 
?>
</body>
</html>