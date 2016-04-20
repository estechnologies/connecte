<?php
			require 'connect.php';

		$database = new connect();
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$subject = htmlspecialchars($_POST['subject']);
		$message = htmlspecialchars($_POST['message']);

			
		$query = "INSERT INTO ContactMessages(time,name,email,subject,message)VALUES(NOW(),'$name','$email','$subject','$message')";
		$resultQuery = mysql_query($query);
		
		
		if($resultQuery == 1){
				echo 'Your message has been submitted. We will contact you shortly.';		
		}else{
			echo 'Unsucessfull.Try Again.';
		}
?>