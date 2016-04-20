<?php
	session_start();
	

	if(!isset($_SESSION['id']['id'])){
		header("Location:index.php?msg=session not found");
	}
	
	
	
	
		$type = htmlspecialchars($_POST['type']);
		$organization = htmlspecialchars($_POST['organization']);
		$department = htmlspecialchars($_POST['department']);
		$location = htmlspecialchars($_POST['Location']);
		$role = htmlspecialchars($_POST['Role']);
		$nop = htmlspecialchars($_POST['openings']);
		$job =  htmlspecialchars($_POST['Job']);
		$qualification =  htmlspecialchars($_POST['qualification']);
		$technologies =  htmlspecialchars($_POST['technologies']);
		$exp = htmlspecialchars($_POST['exp']);
		$previous = htmlspecialchars($_POST['previous']);
		$starttime = htmlspecialchars($_POST['starttime']);
		$endtime = htmlspecialchars($_POST['endtime']);
		$interviewType = htmlspecialchars($_POST['interviewtype']);
		$interviewDate = htmlspecialchars($_POST['interviewdate']);
		$salary =  htmlspecialchars($_POST['salary']);
		$name =  htmlspecialchars($_POST['name']);
		$email	= htmlspecialchars($_POST['email']);
		$mobile = htmlspecialchars($_POST['mobile']);
		$landline = htmlspecialchars($_POST['landline']);
		$remarks =  htmlspecialchars($_POST['remarks']);
		
		
		
		$folder = "temp/";
		$attachName =rand(1000,10000000).$_FILES['attach']['name'];
		$tempName = $_FILES['attach']['tmp_name'];
		
		
		
		if(move_uploaded_file($tempName, $folder.$attachName)){
			$attach = $folder.$attachName;
		}else{
			$attach = "";
		}
		
		
		require 'connect.php';
		$database = new connect();
		
		$rid = $_SESSION['id']['id'];
		$query = "INSERT INTO recruterPost(recruterId,type,organization,department,location,role,numOfOpenings,job,qualification,technologies,exp,previous,startTime,endTime,interviewType,interviewDate,salary,name,email,mobile,landline,attach,remarks)VALUES('$rid','$type','$organization','$department','$location','$role','$nop','$job','$qualification','$technologies','$exp','$previous','$starttime','$endtime','$interviewType','$interviewDate','$salary','$name','$email','$mobile','$landline','$attach','$remarks')";
		$resultQuery = mysql_query($query);
		
		if($resultQuery == 1){
			header("Location:createRecurterFront.php?msg=success");
		}else{
			header("Location:createRecurterFront.php?msg=fail");
		}
		
?>