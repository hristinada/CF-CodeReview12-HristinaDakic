<?php

//ajax check for email
	include_once 'dbconnect.php';

	$email = $_POST["email"];

	$query = "SELECT userEmail FROM `users` WHERE userEmail LIKE '$email';";

	$result = $conn->query($query);

	if($result->num_rows > 0) {
	echo "E-mail is taken";
	} else {
		echo "";
	}

//ajax check for username
	$username = $_POST["username"];

	$query2 = "SELECT userName FROM `users` WHERE userName LIKE '$username';";

	$result2 = $conn->query($query2);

	if($result2->num_rows > 0) {
		echo "Username is taken";
	} else {
		echo "";
	}
?>