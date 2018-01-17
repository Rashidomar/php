<?php
	require 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
</head>
<body>
	<p>
		welcome <?php echo $login_session; ?>
	</p>

	<p>
		<a href="logout.php">logout</a>
	</p>
</body>
</html>