<?php


	require 'connect.php';
	
	$database = new connect();
	
	$username = htmlspecialchars($_POST['UserId']);
	$password = htmlspecialchars($_POST['password']);
	
	
	
	if(!empty($username) && !empty($password)){
		
		$password = md5($password);
		$query = "SELECT * FROM AddUser WHERE UserId='$username' AND password='$password'";
		$resultQuery = mysql_query($query);
		
		
		
		
		
		if(mysql_num_rows($resultQuery) >= 1){
			
			
			$row = mysql_fetch_array($resultQuery);
			$companyCode = $row['code'];
		
			
			
			$checkTimeQuery  = "SELECT * FROM company WHERE code='$companyCode'";
			
			$resultCheckQuery = mysql_query($checkTimeQuery);
		
			$companyDetails = mysql_fetch_array($resultCheckQuery);
			
			$checks = checkTime($companyDetails['accessyear']);
			
			
			/*
			 *	time 
			 */
			 
			
			if(checkTime($companyDetails['accessyear'])){
				
				session_start();
				$_SESSION['user'] = $row;
				header("Location:UserHome.php");
			}else{
				header("Location:index.php?msg=access year can`t be empty");
			}
			
			
			
		}else{
			header("Location:index.php?msg=Please enter valid username and password ");
		}
		
		
	}else{
		header("Location:index.php?msg=username and password can`t be empty");
	}
	
	
	/*
	 * checks the time
	 * @param unknown $access
	 * @return boolean
	 */
	function checkTime($access){
		$now = new DateTime(null , new DateTimeZone('Asia/Kolkata'));
		$acceYear = new DateTime($access);
		
		
		if($now->format('Y-m-d') <= $acceYear->format('Y-m-d')){
			return true;
		}
		
		return false;
	}
	
	

?>