<?php

	require 'connect.php';
	$database = new connect();
	
	
	$empId = htmlspecialchars($_POST['empid']);
	$loginTime = htmlspecialchars($_POST['logintime']);
	$logoutTime = htmlspecialchars($_POST['logouttime']);
	$awayCounter = htmlspecialchars($_POST['awayCounter']);
	
	
	
	$companyQuery =  mysql_query("SELECT * FROM AddUser WHERE UserId='$empId'");
	$companyrow =  mysql_fetch_array($companyQuery);
	
	
	
	$code =  $companyrow['code'];
	$inTime = new DateTime($loginTime);
	$logins = $inTime->format("Y-m-d H:i:s");
	
	
	$outTime = new DateTime($logoutTime);
	$logouts = $outTime->format("Y-m-d H:i:s");
	
	
	
	$query = "INSERT INTO empLogins(date,empid,logintime,logouttime,awaycounter,companyCode)VALUES(NOW(),'$empId','$logins','$logouts','$awayCounter','$code')";
	
	$resultQuery = mysql_query($query);
	
	if($resultQuery == 1){
		echo '1';
	}else{
		echo '0';
	}
	
?>