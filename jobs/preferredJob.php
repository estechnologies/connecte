<?php
	session_start();
	
	$id = $_SESSION['id'];

	require 'connect.php';
	
	$database =  new connect();
	
	
	$skill = htmlspecialchars($_POST['preferSkill']);
	$location = htmlspecialchars($_POST['preferLocation']);
	$company = htmlspecialchars($_POST['preferCompany']);
	$ctc = htmlspecialchars($_POST['preferCtc']);
	
	
	$query = "UPDATE users SET preferskill='$skill',preferlocation='$location',prefercompanies='$company',preferctc='$ctc' WHERE userid='$id'";
	
	$resultquery = mysql_query($query);
	
	if($resultquery == 1){
		echo "success";
	}else{
		echo "fail";
	}

?>