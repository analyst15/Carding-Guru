<?php
	$conn = new mysqli("localhost","root","","cart_system_13");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>