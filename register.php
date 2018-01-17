 <?php
	require 'reg.con.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="java/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="java/vlid.js"></script>
</head>
<body>
	<?php

	?>
	<form id="signup-container"  method="POST" action="">
		<div id="signup-header">
			<h4>SIGN UP</h4>
		</div>
		<div id="signup-body">
			<span id="head"></span>
			<br>
			First Name
			<br>
			<span id="first"></span>
			<input type="text" name="firstname" placeholder="first name" id="firstname" 
				   value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname'];} ?>">
			<br>
			Last Name
			<br>
			<span id="last"></span>
			<input type="text" name="lastname" placeholder="last name" id="lastname"
				   value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname'];} ?>" >
			<br>
			Username
			<br>
			<span id="user"></span>
			<br>
			<input type="text" name="username" placeholder="username" id="username" value="<?php  ?>">
			<br>
			Email
			<br>
			<span id="mail"></span>
			<br>
			<input type="text" name="email" placeholder="email" id="email"
				   value="<?php if(isset($_POST['email'])) { echo $_POST['email'];} ?>" >
			<br>
			Passcode
			<br>
			<span id="pass_1"></span>
			<br>
			<input type="password" name="password" placeholder="password" id="password">
			<br>
			Comfirm Passcode
			<br>
			<span id="pass_2"></span>
			<br>
			<input type="password" name="passwordconfirm" placeholder="Confirm password" id="confirm_password">
			<br>
			<input type="submit" name="" value="Register" id="submit">
		</div>
	</form>


</body>
</html>