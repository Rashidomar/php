<?php
	//cone=nection the database
	include 'connect.php';

	//checking if username and message is set
	if (isset($_POST['user_name']) && isset($_POST['user_comment'])) {

			//storing username and  message from url_string
			$name = $_POST['user_name'];
			$message = $_POST['user_comment'];

		//inserting data into database 	
		$query_1 = "INSERT INTO chat_log VALUES('','$name','$message')";

		$result = mysqli_query($connection, $query_1);

}

?>