<?php 


	require 'connect.php';
	$database = new connect();
	
	
	$code = htmlspecialchars($_GET['code']);
	$id = htmlspecialchars($_GET['id']);
	$username = htmlspecialchars($_GET['user']);
	$msg = htmlspecialchars($_GET['msg']);

	
	
	if(!empty($code) and !empty($id) and !empty($username) and !empty($msg)){
		$checkCompanyQuery = "SELECT * FROM company WHERE code='$code'";
		$resultCompanyQuery = mysql_query($checkCompanyQuery);
		
		if(mysql_num_rows($resultCompanyQuery) >= 1){
			$insertMessage = "INSERT INTO chat(empId,username,message,code)VALUES('$id','$username','$msg','$code')";
			$resultMessage = mysql_query($insertMessage);
		}
	}

	
	$getQuery = "SELECT * FROM chat WHERE code='$code'";
	$resultGet = mysql_query($getQuery);
	
	$counter = 0;
	
	/*
	 * reference class = chat-box-name-left
	 */
	while($row = mysql_fetch_array($resultGet)){
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