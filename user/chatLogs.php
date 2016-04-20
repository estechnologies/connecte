<?php 


	require 'connect.php';
	$database = new connect();
	
	
	$code = htmlspecialchars($_GET['code']);
	
	$query = "SELECT * FROM chat WHERE code='$code'";
	$resultQuery = mysql_query($query);
	
	
	$counter = 0;
	
	/*
	 * reference class = chat-box-name-left
	 */
	while($row = mysql_fetch_array($resultQuery)){
		echo "<div class=".insertMessage($counter).">".$row['message']."</div>  <div class=".insertName($counter).">".$row['username']."
                        </div> <hr class='hr-clas' />";
		$counter++;
	}

	
	function insertMessage($number){
		if($number % 2 == 0){
			return "chat-box-left";
		}else{
			return "chat-box-right";
		}
	}
	function insertName($number){
		if($number % 2 == 0){
			return "chat-box-name-left";
		}else{
			return "chat-box-name-right";
		}
	}


?>