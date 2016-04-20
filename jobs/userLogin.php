<?php

	session_start();
	
	$email = htmlspecialchars($_POST['email']);
	$pass = htmlspecialchars($_POST['password']);
	
	
	if(empty($email) && empty($pass)){
		session_destroy();
		header("Location:index.php?msg=please enter email and password");
	}else if(empty($email)){
		session_destroy();
		header("Location:index.php?msg=please enter email");
	}else if(empty($pass)){
		session_destroy();
		header("Location:index.php?msg=please enter password");
	}else{
		require 'connect.php';
		
		$database = new connect();
		
		$pass = md5($pass);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$resultQuery = mysql_query($query);
		
		if(mysql_num_rows($resultQuery) == 1){
			$userProfile = mysql_fetch_array($resultQuery);
			$_SESSION['id'] = $userProfile;
			header("Location:home.php");
		}else{
			session_destroy();
			header("Location:index.php?msg=invalid email and password");
		}
	}
	

?>