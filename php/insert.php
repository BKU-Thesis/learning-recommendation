<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		// $conn = mysqli_connect("localhost", "root", "", "test1");
		$conn = mysqli_connect("localhost", "root", "");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Create database
		$sqlDB = "CREATE DATABASE myDB";
		$conn->query($sqlDB);
		mysqli_close($conn);
		$conn = mysqli_connect("localhost", "root", "", "myDB");
		// sql to create table
		$sqlTable = "CREATE TABLE students (
			order INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			check1 INT(2),
			check2 INT(2),
			check3 INT(2),
			check4 INT(2),
			check5 INT(2) NOT NULL,
			)";

		if(mysqli_query($conn, $sqlTable)){
			echo "Table created successfully.";
		} else{
			echo "ERROR: Could not able to execute $sqlTable. " . mysqli_error($conn);
		}

		// Taking all 5 values from the form data(input)
		// $first_name = $_REQUEST['first_name'];
		// $last_name = $_REQUEST['last_name'];
		// $gender = $_REQUEST['gender'];
		// $address = $_REQUEST['address'];
		// $email = $_REQUEST['email'];

		$check1 = $_REQUEST['check1'];
		$check2 = $_REQUEST['check2'];
		$check3 = $_REQUEST['check3'];
		$check4 = $_REQUEST['check4'];
		$check5 = $_REQUEST['check5'];
		
		// Performing insert query execution
		// here our table name is college
		// $sql = "INSERT INTO college VALUES ('$check1',
		// 	'$check2','$check3','$check4','$check5')";

		$sql = "INSERT INTO students VALUES ('1',
			'0','0','0','1')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
		}
		// 	echo nl2br("\n$first_name\n $last_name\n "
		// 		. "$gender\n $address\n $email");
		// } else{
		// 	echo "ERROR: Hush! Sorry $sql. "
		// 		. mysqli_error($conn);
		// }
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
