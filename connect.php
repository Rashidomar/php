<?php
	//connecting to the database server
	$servername = "localhost";
	$username = "root";
	$password  = "";
	$db_name = "user_database";

	$connection = mysqli_connect($servername,$username, $password, $db_name );

	if($connection){
		
	}
	else
	{
		die(mysqli_error($connection));
	}

 ?>