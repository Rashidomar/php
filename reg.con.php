<?php
	//start session
	session_start();

	//connecting to the database
	require 'connect.php';

	//geting user value
 

	if (  isset($_POST['firstname']) 
		&& isset($_POST['lastname']) 
		&& isset($_POST['username'])
		&& isset($_POST['email']) 
		&& isset($_POST['password'])
		&& isset($_POST['passwordconfirm'])

	   ) {	
	   		//if(isset($_POST['email'])) { 
   				//	echo htmlentities($_POST['email']);  // always filter outputs of external data
				//}

		   	//storing user values

			$firstname =$_POST['firstname'];
			$lastname = $_POST['lastname'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$pass_one = $_POST['password'];
			$pass_two = $_POST['passwordconfirm'];
			$hash_pass = md5($pass_one);


				//checking to make sure username fills all the fields
				if (!empty($firstname) && !empty($lastname) && !empty($username) && !empty($email) && !empty($pass_one) && !empty($pass_two) )
					{	

						$query_one = "SELECT username FROM users where username = '$username'";

						$result_one = mysqli_query($connection, $query_one);

						$num_row = mysqli_num_rows($result_one);


						//checking if username already exists
						if($num_row == 1 ){
							echo "username already exist";

							//query to register username 
						}else{

							$query_two = "INSERT INTO users VALUES ('','$firstname','$lastname','$username','$email','$hash_pass') ";
							$result_two = mysqli_query($connection, $query_two);

							//if registration is successful create a session the user
							if ($result_two) {

								$_SESSION['username'] = $username;

								//directing user to the homepage
								header('Location: homepage.php');

							}else{

								echo "Unsuccessful Registration";
							}
						}

					
					}
					//else{
						//echo "Please Enter"; 
					//}
		
	  	}


?>