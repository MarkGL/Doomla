<?php

$db = new mysqli('localhost','root','','doomla');

	$query = "SELECT page FROM pagecontent;
	$result = $db->query($query);
	
	$page = $result->fetch_all(MYSQLI_ASSOC);
?>
