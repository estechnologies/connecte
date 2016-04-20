<?php 
	session_start();
	
	
	if(!isset($_SESSION['user']['UserId'])){
		header("Location:index.php");
	}
	
	
	$id = $_SESSION['user']['UserId'];
	
		require 'connect.php';
		
		
		$database = new connect();
		
		
		$oldPass = htmlspecialchars(md5($_POST['oldPassword']));
		$pass1 = htmlspecialchars(md5($_POST['password1']));
		$pass2 = htmlspecialchars(md5($_POST['password2']));
		
		
		$query = "SELECT password FROM AddUser WHERE UserId='$id'";
		$resultQuery = mysql_query($query);
		
		
			
		while($row = mysql_fetch_array($resultQuery)){
			$password = $row['password'];
		}
		
		
		if($password == $oldPass){
		
						if($pass1 === $pass2){
							if($password != $pass1){
									$updateQuery = "UPDATE AddUser SET password='$pass1' WHERE UserId='$id'";
									$updateResult = mysql_query($updateQuery);
										if($updateResult == 1){
										
											header("Location:UserResetPassword.php?msg1=Password Reset has been Successful. <a href='UserLogout.php'>Click here</a> to Login with New Password");
										}else{
											header("Location:UserResetPassword.php?msg=Password Reset has been UnSuccessful... Please try again ");
										}
							}else{
								// checking current password and new password
								header("Location:UserResetPassword.php?msg=Current Password and New Passwords must be different.");
							}
				}else{
				// password doesn`t match
					header("Location:UserResetPassword.php?msg=The New Password and Confirm passwords should be same.");
				}		
		}else{
		
			//old password not match
			header("Location:UserResetPassword.php?msg=Current password is invalid.");
			
		}
			
		
?>