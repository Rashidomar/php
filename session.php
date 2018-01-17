<?php
	//including database connection
	require "connect.php";

	//starting a session;
	session_start();

	//storing session
	$user = $_SESSION["username"];

	//a query chech whether a the stored session "user" exist in the database
	$query = "SELECT username FROM users WHERE username = '$user' ";

	$result = mysqli_query($connection, $query);

	$row = mysqli_fetch_assoc($result);

	//storing username from the query 
	$login_session = $row['username'];

	//if username is not found
	if(!isset($login_session)){
		header('Location : login.php');
	}

  ?>