<?php 
	session_start();
	
	
	if(!isset($_SESSION['company']['username'])){
		header("Location:index.php");
	}
	
	
	$id = $_SESSION['company']['code'];
	
		require 'connect.php';
		
		
		$database = new connect();
		
		
		$oldPass = htmlspecialchars(md5($_POST['oldPassword']));
		$pass1 = htmlspecialchars(md5($_POST['password1']));
		$pass2 = htmlspecialchars(md5($_POST['password2']));
		
		
		$query = "SELECT password FROM company WHERE code='$id'";
		$resultQuery = mysql_query($query);
		
		
			
		while($row = mysql_fetch_array($resultQuery)){
			$password = $row['password'];
		}
		
		
		if($password == $oldPass){
		
						if($pass1 === $pass2){
							if($password != $pass1){
									$updateQuery = "UPDATE company SET password='$pass1' WHERE code='$id'";
									$updateResult = mysql_query($updateQuery);
										if($updateResult == 1){
										
											header("Location:AdminResetPassword.php?msg1=Password Reset has been Successful. <a href='adminLogout.php'>Click here</a> to Login with New Password");
										}else{
											header("Location:AdminResetPassword.php?msg=Password Reset has been UnSuccessful... Please try again ");
										}
							}else{
								// checking current password and new password
								header("Location:AdminResetPassword.php?msg=Current Password and New Passwords must be different.");
							}
				}else{
				// password doesn`t match
					header("Location:AdminResetPassword.php?msg=The New Password and Confirm passwords should be same.");
				}		
		}else{
		
			//old password not match
			header("Location:AdminResetPassword.php?msg=Current password is invalid.");
			
		}
			
		
?>