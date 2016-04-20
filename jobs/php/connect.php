<?php
	//class for connecting the databases
	class connect {
		private $host = 'localhost';
		private $username ='yodhaa_admin';
		private $password ='YBSwb#2015';
		private $database ='yodhaa_portal';

		
		//construtor
		function  __construct(){
			$conn = $this->databaseConnect();
			if(!empty($conn)){
				$this->selectDatabase($conn);
			}
			$connection = $conn;
		}	
		
		// database connect
		function  databaseConnect(){
			if(($connection = mysql_connect($this->host,$this->username,$this->password)) === false)die("could not connect database");
			return  $connection;
		}
		
		//select the database
		function selectDatabase($connection){
			if((mysql_select_db($this->database,$connection)) === false)die("could not select the database");
		}
		
		//inserts the database
		function insertDatabase($query){
			$resultQuery = mysql_query($query);
			
			if($resultQuery == 1){
				return  true;
			}
			
			return false;
		}
		
		//gives  results from the datbase
		function getResultsDatabase($query){
			$resultQuery = mysql_query($query);
				
			return $resultQuery;
		}
		
		
		
		
	}

?>