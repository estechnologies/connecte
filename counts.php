<?php
	require 'connect.php';
	
	/*
	 * this class for count of servicers,bookings,counts
	 */
	class counts {
		
		
		
		//total companies count
		function totalcompanycount(){
			$database = new connect();
			$query = "SELECT * FROM  company";
			$resultsQuery = mysql_query($query);
			return mysql_num_rows($resultsQuery);
		}
		
		
		//users Count 
		function usersCount(){
			$database = new connect();
			$query = "SELECT * FROM AddUser";
			$resultQuery = mysql_query($query);
			return mysql_num_rows($resultQuery);
		}
		
		
		
	}
?>