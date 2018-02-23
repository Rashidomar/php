<?php
	//connection to the database
 	include 'connect.php';

 		//loading chat_log from database
		 $query_2 = "SELECT * FROM chat_log ORDER BY id DESC LIMIT 0, 10";
		$result_2 = mysqli_query($connection, $query_2);
			
			while($row = mysqli_fetch_assoc($result_2)){

				$nam = $row['name'];
					
				$comm = $row['message'];

				echo "<span style='color:red'>" . $nam . "</span>: <span style=color:blue>" . $comm . "</span></br><hr>";
			}
?>