<?php

	require 'connect.php';
	$database = new connect();
	
	/*
	 * checks the username
	 */
	if(isset($_POST['userid'])){
		$username = htmlspecialchars($_POST['userid']);
		$usernamequery = "SELECT * FROM AddUser WHERE UserId='$username'";
		$resultQuery = mysql_query($usernamequery);
		
		if(mysql_num_rows($resultQuery) >= 1){
			echo 'UserId is already registered. Please try new one.';
		}else{
			echo '';
		}
	}
	
	/*
	 * checks the email
	 */
	if(isset($_POST['email'])){
		$email = htmlspecialchars($_POST['email']);
		$emailquery = "SELECT * FROM AddUser WHERE email1 ='$email'";
		$resultemailQuery = mysql_query($emailquery);
		
		
		$checkCompanyUser = "SELECT * FROM company WHERE personemail='$email'";
		$resultCompanyEmail = mysql_query($checkCompanyUser);
		
		if(mysql_num_rows($resultemailQuery) >= 1 or mysql_num_rows($resultCompanyEmail) >= 1){
			echo 'Entered email address is already registered. Please try new one';
		}else{
			echo '';
		}
	}

?>