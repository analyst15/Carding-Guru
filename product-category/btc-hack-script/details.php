<?php
	include 'sendemail.php';

	
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$country = $_POST['country'];
	$street = $_POST['street'];
	$town = $_POST['town'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];


	// Database connection
	$conn = new mysqli('localhost','','','billingdetails');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into billing_1(email,fname,lname,country,street,town,state,zipcode) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiissi", $email,$fname,$lname,$country,$street,$town,$state,$zipcode);
		$execval = $stmt->execute();
		header( "refresh:5;url=add-fund.html" ); 
		echo "...5 seconds please";
		$stmt->close();
		$conn->close();
	}
?>