<html><body>

<?php
	// $sinnumber = $_POST["sinnumber"];
	$fname = $_POST["name"];
	// $lname = $_POST["lname"];
	$password = $_POST["pass"];
	// $birthday = $_POST["birthday"];
	$servername = "sql5c10f.megasqlservers.com";
	$dbusername = "tax123ca26762166";
	$db = "information_tax123ca26762166 

	";
	$dbPassword = "1990Luboxuan";
	$address = '';
	$conn = mysqli_connect($servername, $dbusername,$dbPassword, $db);
	if ($conn->connect_error) {
		echo "Connection Error";
	}

	// $sql= "select password from testing.customers where firstname = '$fname' and password='$password'";
	$sql = "select Phone from information_tax123ca26762166.company";
	// $result = $conn->query($sql);


	if ($result->num_rows > 0) {
	// 	// output data of each row
		while($row = $result->fetch_assoc()) {
	// 	//   echo "id: " . $row["name"]. " - Name: " . $row["address"]. " "
		  echo $row["Phone"];
	// 	  if($row["password"] = $password){
	// 		header('Location: http://tax123.ca/'); 

	// 	  }		
	// 	}
	//   } 
	//   else {
	// 	echo "username and password are not match";
	//   }

$conn->close();


 
?>
</body>
</html>