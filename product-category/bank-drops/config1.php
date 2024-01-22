<?php
	$conn = new mysqli("localhost","root","","billingdetails");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>