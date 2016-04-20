<?php 

	require 'connect.php';
	$database = new connect();
		/**
		 * if submit change the password
		 */
					$tableId = htmlspecialchars($_POST['tableId']);
					$cpTableName = htmlspecialchars($_POST['tableName']);
					$cpuserId = htmlspecialchars($_POST['userId']);
					$cpforgotId = htmlspecialchars($_POST['forgotId']);
					$pass1 = htmlspecialchars($_POST['password1']);
					$pass2 = htmlspecialchars($_POST['password2']);

					
					if($pass1=== $pass2){
						$pass1 = md5($pass1);
						
						$cpquery = "UPDATE $cpTableName SET password='$pass1' WHERE $cpuserId='$cpforgotId'";
						$cpresultQuery = mysql_query($cpquery);
						
						
						if($cpresultQuery == 1){
							header("Location:UserForgotResetPassword.php?msg1=Password has been changed successfully.<a href='index.php'>Click here</a> to login with new password.");
						}else{
							header("Location:index.php?msg1=password changed Unsuccessful..Please Contact Admin");
						}
					}else{
						header("Location:UserForgotResetPassword.php?id=$tableId&msg=Password and Confirm Password must be same");
					}
				
		?>