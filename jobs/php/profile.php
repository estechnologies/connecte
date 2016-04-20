<?php

	session_start();


		require 'connect.php';
		
		$email = $_SESSION['email'];
		
		$database = new connect();

		$firstName = htmlspecialchars($_POST['firstName']);
		$lastName = htmlspecialchars($_POST['lastName']);
		$dob = htmlspecialchars($_POST['dob']);
		$nationality = htmlspecialchars($_POST['nationality']);
		$pancard = htmlspecialchars($_POST['pancard']);
		$gender = htmlspecialchars($_POST['gender']);
		
		$query = "UPDATE users SET firstname='$firstName',lastname='$lastName',dateofbirth='$dob',nationality='$nationality',pancard='$pancard',gender='$gender' where email='$email'";
		
		$resultQuery = mysql_query($query);
		
		if ($resultQuery == 1){
			echo 'success';
		}else{
			echo 'fail';
		}
		
?>