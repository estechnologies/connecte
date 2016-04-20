<?php
	
	session_start();
	require 'connect.php'; 

	$database = new connect();
	
	$username = htmlspecialchars($_POST['username']);
	$pass = htmlspecialchars($_POST['password']);
	
	if(empty($username) && empty($pass)){
		header("Location:index.php?msg=Please enter valid username and password");
	}else if(empty($username)){
		header("Location:index.php?msg=Please enter valid username");
	}else if(empty($pass)){
		header("Location:index.php?msg=Please enter valid password");
	}else{
		
		$pass = md5($pass);
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$pass'";
		$resultQuery = mysql_query($query);
		
		if(mysql_num_rows($resultQuery) > 0){
			$row = mysql_fetch_array($resultQuery);
			$_SESSION['admin'] = $row;
			header("Location:Home.php");		
		}else{
			header("Location:index.php?msg=Please enter valid username and password");
		}
	}

?>