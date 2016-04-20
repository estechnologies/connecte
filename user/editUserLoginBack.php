<?php 

require 'connect.php';

$database = new connect();



$userId = htmlspecialchars($_POST['UserId']);
$sal = htmlspecialchars($_POST['Salutation']);
$name = htmlspecialchars($_POST['UserName']);
$dob = htmlspecialchars($_POST['date_of_birth']);
$joining  = htmlspecialchars($_POST['Joiningdate']);
$email = htmlspecialchars($_POST['email1']);
$mobile = htmlspecialchars($_POST['number']);
$pancard = htmlspecialchars($_POST['pancard_number']);
$designation = htmlspecialchars($_POST['Designation']);
$projectName = htmlspecialchars($_POST['ProjectName']);
$pass = htmlspecialchars($_POST['password1']);
$rpass = htmlspecialchars($_POST['password2']);


/**
 * access
*/

$viewLog = htmlspecialchars($_POST['ViewLogs']);
$applyLeave = htmlspecialchars($_POST['ApplyLeaves']);
$approveLeave = htmlspecialchars($_POST['ApproveLeaves']);
$approvedBy = htmlspecialchars($_POST['ApprovedBy']);



if($pass == $rpass){
	
	$pass = md5($pass);
	$query = "UPDATE users SET sal='$sal', name='$name', dob='$dob' , join='$joining',email='$email',";
	$query .= "mobile='$mobile',pancard='$pancard',desgination='$designation',projectname='$projectName',pass='$pass' where userid='$userId'";
	
	$resultQuery = mysql_query($query);
	if($resultQuery == 1){
		header("Location:EditUser.php?msg1=User information has been updated successfully.");
	}else{
		header("Location:EditUser.php?msg1=User information has been updated Unsuccessful. Please try again.");
	}
}else{
	header("Location:EditUser.php?msg=password and confirm password must be same");
}





?>