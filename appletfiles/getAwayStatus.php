<?php
	
	require 'connect.php';
	
	$database = new connect();
	
	$empId = htmlspecialchars($_POST['empid']);
	
	
	$query = "SELECT * FROM AddUser WHERE UserId='$empId'";
	$resultQuery = mysql_query($query);
	
	if(mysql_num_rows($resultQuery) != 0){
		$row = mysql_fetch_array($resultQuery);
		$i =   $row['away'];
		if(empty($i)){
			echo '10';
		}else{
			echo $i;
		}
	}else{
		echo '5';
	}
	
?>