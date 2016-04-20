<?php

	session_start();


		require 'connect.php';
		
		$id = $_SESSION['id'];
		
		$database = new connect();

		$firstName = htmlspecialchars($_POST['firstname']);
		$lastName = htmlspecialchars($_POST['lastname']);
		$dob = htmlspecialchars($_POST['Date_Birth']);
		$nationality = htmlspecialchars($_POST['Nationality']);
		$pancard = htmlspecialchars($_POST['PAN_Number']);
		$gender = htmlspecialchars($_POST['Gender_Type']);
		
		$query = "UPDATE users SET firstname ='$firstName',lastname ='$lastName',dateofbirth ='$dob',nationality ='$nationality',pancard ='$pancard',gender ='$gender' where userid='$id'";
		
		$resultQuery = mysql_query($query);
		
		if ($resultQuery == 1){
			echo 'success';
		}else{
			echo 'fail';
		}
		
?>