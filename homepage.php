<?php
	require 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/chat.js"></script>
</head>
<body>

	<div id="main_container">
		<div id="message_container" >
			<div id="user_detail">
				<span>welcome <?php echo $login_session; ?></span>
				<span><a href="logout.php">logout</a></span>
			</div>
			<div id="chat_body">
			
			</div>
		</div>
		<div id="form_container">
			<form method="POST">
				Name
				<br>
				<input type="text" name="user" id="name" value="<?php echo $login_session?>">
				<br>
				Message
				<br> 
				<textarea name="message" id="message"></textarea>
				<br>
				<button id="send">Send</button>
			</form>
		</div>	
	</div>

</body>
</html>