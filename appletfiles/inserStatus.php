<?php

	require 'connect.php';

	
	$database = new connect();
	
	
	$empId = htmlspecialchars($_POST['empId']);
	$status = htmlspecialchars($_POST['status']);
	

	//echo $empId.$status;
	$query = "UPDATE AddUser SET status='$status' WHERE UserId='$empId'";
	$resultQuery = mysql_query($query);
	
	if($resultQuery == 1){
		echo '1';
	}else{
		echo '0';
	}
	
?>
