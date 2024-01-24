<!DOCTYPE html>
<html>

<head>
	<title>Insert page</title>
</head>

<body>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "rent_database");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$phoneNo = $_REQUEST['phoneNo'];
		$address = $_REQUEST['address'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO mysql1 VALUES ('$name', 
			'$password','$email','$phoneNo','$address')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n$name\n $password\n "
				. "$email\n $phoneNo\n $address");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
