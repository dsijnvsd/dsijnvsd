<html><body>

<?php
	// $sinnumber = $_POST["sinnumber"];
	$fname = $_POST["name"];
	// $lname = $_POST["lname"];
	$password = $_POST["pass"];
	// $birthday = $_POST["birthday"];
	$servername = "tax123ca26762166";
	$dbusername = "sql5c10f.megasqlservers.com";
	$db = "testing";
	$dbPassword = "20200101";
	$address = '';
	$conn = mysqli_connect($servername, $dbusername,$dbPassword, $db);
	if ($conn->connect_error) {
		echo "Connection Error";
	}

	$sql= "select password from testing.customers where firstname = '$fname' and password='$password'";

	$result = $conn->query($sql);


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
		echo "username and password are not match";
	  }

$conn->close();


 
?>
</body>
</html>