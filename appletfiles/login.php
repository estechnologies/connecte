<?php

	require 'connect.php';

	$database = new connect();
	
	
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$password = md5($password);
	
	$query = "SELECT * FROM AddUser WHERE UserId='$username' AND password='$password'";
	$resultQuery = mysql_query($query);
	
	
	if(mysql_num_rows($resultQuery) != 0){
		$row = mysql_fetch_array($resultQuery);
		echo $row['UserId'];
	}else{
		echo '0';
	}
?>
