<html><body>

<?php
	$sinnumber = $_POST["sinnumber"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$password = $_POST["pass"];
	$birthday = $_POST["birthday"];
	$servername = "192.168.0.31";
	$dbusername = "admin";
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
		echo "0 results";
	  }

$conn->close();


 
?>
</body>
</html>