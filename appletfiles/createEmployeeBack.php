<?php


	require 'connect.php';
	
	$database  = new connect();
	
	
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	
	$password = md5($password);
	$query = "INSERT INTO empProfile(username,password)VALUES('$username','$password')";
	$resultQuery = mysql_query($query);
	$id = mysql_insert_id();
	
	if($resultQuery == 1){
		header("Location:createEmployee.php?msg=successfull,$id");
	}else{
		header("Location:createEmployee.php?msg=failed");
	}
?>