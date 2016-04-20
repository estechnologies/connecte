<?php 
	
	//$numberUsers = htmlspecialchars($_POST['numberUsers']);
	$companyCode = htmlspecialchars($_POST['companyCode']);



	require 'connect.php';
	
	$database = new connect();
	
	
	$query = "SELECT * FROM AddUser WHERE code='$companyCode'";
	$resultQuery = mysql_query($query);
	
	/*
	 * no of users alloted
	 */
	$getUsersQuery = "SELECT * FROM company WHERE code='$companyCode'";
	$resultUserQuery = mysql_query($getUsersQuery);
	
	
	
	while($row = mysql_fetch_array($resultUserQuery)){
		$companyUserPermit = $row['numberUsers'];
		
	}
	$companyUserPermit = intval($companyUserPermit);
	
	/*
	 * count of active users
	 */
	$count = mysql_num_rows($resultQuery);
	$count = intval($count);

	
	/*
	 * access
	 */
	if($companyUserPermit > $count){
		echo 'ok';
	}else{
		echo 'restrict';
	}
	
?>