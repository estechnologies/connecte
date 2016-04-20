<?php

		$startDate  =  htmlspecialchars($_POST['startDate']);
		$endDate = htmlspecialchars($_POST['endDate']);
		$userId = htmlspecialchars($_POST['userId']);
		$companyCode = htmlspecialchars($_POST['code']);
		
		require 'connect.php';
		$database =  new connect();
		
		$query = "SELECT * FROM empLeaves WHERE code='$companyCode' AND userid='$userId' AND(NOT(status='Cancelled by user')) AND (startdate BETWEEN '$startDate' AND '$endDate' OR enddate BETWEEN '$startDate' AND '$endDate')";
		
		$resultQuery = mysql_query($query);
		
		
		if(mysql_num_rows($resultQuery) > 0){
			echo "1";
		}else{
			echo "0";
		}
?>