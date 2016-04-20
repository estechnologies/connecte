<?php

	unset($_SESSION['company']);
	require 'connect.php';
	
	$database = new connect();

	/**
	 * for company admin
	 */
	

	
		
		$username = htmlspecialchars($_POST['Username']);
		$password = htmlspecialchars($_POST['password']);
		
		$password = md5($password);
		$query = "SELECT *  FROM company WHERE username='$username' AND password='$password'";
		$resultQuery = mysql_query($query);
		
		$rows = mysql_num_rows($resultQuery);
		if(mysql_num_rows($resultQuery) <= 0){
			header("Location:index.php?msg=Please enter valid username and password");
		}else{
			session_start();
			$row = mysql_fetch_array($resultQuery);
			
			$accessYear = $row['accessyear'];
				
			$checkYear = new DateTime($accessYear);
				
				
			$now = new DateTime(null,new DateTimeZone('Asia/Kolkata'));
				
			if($now->format('Y-m-d') <= $checkYear->format('Y-m-d')){
				$_SESSION['company'] = $row;
				header("Location:AdminHome.php");
			}else{
				header("Location:index.php?msg=Please renew your account.Contact ConnectEmployee.");
			}
			
			
		}
		
	
	
	
?>