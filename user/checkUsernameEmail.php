<?php

	require 'connect.php';
	$database = new connect();
	
	/*
	 * checks the username
	 */
	if(isset($_POST['username'])){
		$username = htmlspecialchars($_POST['username']);
		$usernamequery = "SELECT * FROM company WHERE username='$username'";
		$resultQuery = mysql_query($usernamequery);
		
		if(mysql_num_rows($resultQuery) >= 1){
			echo 'Admin username is already registered. Please try new one.';
		}else{
			echo '';
		}
	}
	
	/*
	 * checks the email
	 */
	if(isset($_POST['email'])){
		$email = htmlspecialchars($_POST['email']);
		$emailquery = "SELECT * FROM company WHERE personemail='$email'";
		$resultemailQuery = mysql_query($emailquery);
		
		if(mysql_num_rows($resultemailQuery) >= 1){
			echo 'Entered email address is already registered. Please try new one';
		}else{
			echo '';
		}
	}

?>