<?php
	
			$connect = mysqli_connect("MySQL-8.2","root","", "twitter");
			$query = mysqli_query($connect, 'SELECT * FROM follow');

			mysqli_query($connect, 'INSERT INTO follow (name,channel,image') VALUES ('{$_GET["names"]}' , '{$_GET["channel"]}', '{$_GET["channel"]}');

?>