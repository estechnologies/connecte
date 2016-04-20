<?php
	session_start();
	require 'connect.php';
	
	// database
	$database = new connect();
	
	/*
	 * posts
	 */
	$username = htmlspecialchars($_POST['username']);
	$email = htmlspecialchars($_POST['email']);
	$pass1 = htmlspecialchars($_POST['password1']);
	$pass2 = htmlspecialchars($_POST['passsword2']);
	
	$httphost = $_SERVER['HTTP_HOST'];
	 
	 
	 /*
	  * validate and inserting into mysql
	  */
	 if(validateMail($email)){
	 	if(validatePass($pass1, $pass2)){
					$pass1 = md5($pass1);
	 			$query = "INSERT INTO users(firstname,email,password)VALUES('$username','$email','$pass1')";
	 			
	 			$resultQuery = mysql_query($query);
	 			$id = mysql_insert_id();
	 			
	 			if($resultQuery == 1){
	 				$_SESSION['id'] = $id;
	 				header("Location:http://portal.yodhaa.com/Candidate_Registration1.php?msg1=profile created $id");
	 			}else{
	 				header("Location:http://portal.yodhaa.com/Candidate_Registration.php?msg=There is a problem creating account. Please try after some time.");
	 			}
	 		
	 	}else{
	 		header("Location:http://portal.yodhaa.com/Candidate_Registration.php?msg=Password and confirm passwords must be same");
	 	}
	 }else{
	 	header("Location:http://portal.yodhaa.com/Candidate_Registration.php?msg=The entered email address is already registered with us. Please try new one.");
	 }
	 
	 
	 /*
	  * checking for the mail in the database
	  */
	 function  validateMail($mail){
	 	
	 	
	 	
	 	$database = new connect();
	 	$query = "SELECT * FROM users WHERE email='$mail'";
	 	$resultQuery = mysql_query($query);
	 	
	 	if(mysql_num_rows($resultQuery) == 0){
	 		return true;
	 	}
	 	
	 	return false;
	 }
	 
	 /*
	  * checks the password 
	  */
	 function validatePass($pas1,$pas2){
	 	if($pas1 === $pas2){
	 		return true;
	 	}else{
	 		return false;
	 	}
	 }

?>