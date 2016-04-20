<?php


	require 'connect.php';
	$database  = new connect();
	
	
	$cmpId = htmlspecialchars($_POST['cmpId']);
	$name = htmlspecialchars($_POST['CompanyName']);
	$code = htmlspecialchars($_POST['CompanyCode']);
	$type = htmlspecialchars($_POST['CompanyType']);
	$address = htmlspecialchars($_POST['CompanyAddress']);
	$mobile = htmlspecialchars($_POST['CompanyPhonenumber']);
	$person = htmlspecialchars($_POST['Contactpersonname']);
	$personEmail = htmlspecialchars($_POST['ContactpersonEmailaddress']);
	$personmobile = htmlspecialchars($_POST['ContactpersonMobilenumber']);
	$maxUsers = htmlspecialchars($_POST['Maximumnoofemployees']);
	$username = htmlspecialchars($_POST['AdminUsername']);
	$amount = htmlspecialchars($_POST['Amount']);
	$accessYear = htmlspecialchars($_POST['Access']);
	
	
	
	$query = "UPDATE company SET name='$name',code='$code',type='$type',address='$address',number='$mobile',personname='$person',personemail='$personEmail',personnumber='$personmobile',numberUsers='$maxUsers',username='$username',accessyear='$accessYear',amount='$amount' WHERE cmpId='$cmpId'";
	$resultQuery = mysql_query($query);
	
	if($resultQuery == 1){
		header("Location:EditCompany.php?cmp=$cmpId&msg1=Company has been updated successfully.");
	}else{
		header("Location:EditCompany.php?cmp=$cmpId&msg=Company has been updated UnSuccessfull. Please try again..");
	}
	
?>