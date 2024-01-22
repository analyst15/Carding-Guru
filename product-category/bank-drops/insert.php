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
		$conn = mysqli_connect("localhost", "root", "", "billingdetails");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$email = $_REQUEST['email'];
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$country = $_REQUEST['country'];
		$street = $_REQUEST['street'];
        $town = $_REQUEST['town'];
        $state = $_REQUEST['state'];
        $zipcode = $_REQUEST['zipcode'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO billing VALUES ('$email','$fname','$lname','$country','$street','$town','$state','$zipcode')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$email\n $fname\n "
				. "$lname\n $country\n $street $town\n $state\n $zipcode\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
