<?php
	session_start();

	require 'connect.php';

	$databse = new connect();
	
	
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	
	
	
	if(!empty($username) && !empty($password)){
		$password = md5($password);
		$query = "SELECT * FROM company WHERE username='$username' AND password='$password'";
		
		$resultQuery = mysql_query($query);
		
		if(mysql_num_rows($resultQuery) != 0){
			$row = mysql_fetch_array($resultQuery);
			
			$accessYear = $row['accessyear'];
			
			$checkYear = new DateTime($accessYear);
			
			
			$now = new DateTime(null,new DateTimeZone('Asia/Kolkata'));
			
		
			
			if($now->format('Y-m-d') > $checkYear->format('Y-m-d')){
			
				$_SESSION['company'] = $row;
				header("Location:AdminHome.php");
			}else{
				header("Location:AdminLogin.php?msg=Please renew your account.Contact ConnectEmployee.");
			}
		}else{
			header("Location:AdminLogin.php?msg=Please enter valid username and password.");
		}
	}else{
		header("Location:AdminLogin.php?msg=Please enter valid username and password.");
	}
	
?>