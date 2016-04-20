<?php 

	require 'connect.php';
	$database = new connect();

	$companyCode = htmlspecialchars($_POST['code']);
	$userId = htmlspecialchars($_POST['userId']);
	$approverEmpId = htmlspecialchars($_POST['approverEmpId']);
	$leaveType = htmlspecialchars($_POST['LeaveType']);
	$startDate = htmlspecialchars($_POST['Startdate']);
	$endDate = htmlspecialchars($_POST['Enddate']);
	$leaveDays = htmlspecialchars($_POST['leaveday']);
	$noOfDays = htmlspecialchars($_POST['days']);
	$subject = htmlspecialchars($_POST['subject']);
	$reason = htmlspecialchars($_POST['Reason']);
	
	
	$query = "INSERT INTO empLeaves(startdate,enddate,days,subject,reason,status,userid,code,leavetype,approvalBy)VALUES('$startDate','$endDate','$noOfDays','$subject','$reason','Pending','$userId','$companyCode','$leaveType','$approverEmpId')";
	$resultQuery = mysql_query($query);
	
	if($resultQuery == 1){
		header("Location:UserApplyLeaves.php?leaveType=$leaveType&msg1=Leave has been sent to your Approver successfully. <br>Track your Leave status in Leave Status Tab.");
	}else{
		header("Location:UserApplyLeaves.php?leaveType=$leaveType&msg=unsuccessfull");
	}
?>