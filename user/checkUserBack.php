<?php

	require 'connect.php';
	$database = new connect();
	
	/*
	 * checks the username
	 */
	if(isset($_POST['userid']) and isset($_POST['uid'])){
		$username = htmlspecialchars($_POST['userid']);
		$uid = htmlspecialchars($_POST['uid']);
		$usernamequery = "SELECT * FROM AddUser WHERE UserId='$username' AND NOT(UId='$uid')";
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
	if(isset($_POST['email']) and isset($_POST['userid'])){
		$email = htmlspecialchars($_POST['email']);
		$userid = htmlspecialchars($_POST['userid']);
		$emailquery = "SELECT * FROM AddUser WHERE email1 ='$email' AND NOT(UserId='$userid')";
		$resultemailQuery = mysql_query($emailquery);
		
		$checkCompanyEmail = "SELECT * FROM company WHERE personemail='$email'";
		$resultEmailCompany =mysql_query($checkCompanyEmail);
		
		if(mysql_num_rows($resultemailQuery) >= 1 or mysql_num_rows($resultEmailCompany) >= 1){
			echo 'Entered email address is already registered. Please try new one';
		}else{
			echo '';
		}
	}

?>