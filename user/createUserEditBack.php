<?php

	require 'connect.php';
	
	$database = new connect();
	
	$uid = htmlspecialchars($_POST['uid']);
	$companyCode = htmlspecialchars($_POST['companycode']);
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
	$approvedEmployee = htmlspecialchars($_POST['ApprovingEmployeeId']);
	$previousPhoto = htmlspecialchars($_POST['previousPhoto']);
	
	
	/**
	 * access
	 */
	
	$viewLog = htmlspecialchars($_POST['ViewLogs']);
	$applyLeave = htmlspecialchars($_POST['ApplyLeaves']);
	$approveLeave = htmlspecialchars($_POST['ApproveLeaves']);
	$approvedBy = htmlspecialchars($_POST['ApprovedBy']);
	
	/*
	 * photo upload
	 */
	function photoUpload($oldName){
		$folder = "uploads/";
		$photo = $_FILES['Employeephoto']['name'];
		if(!empty($photo)){
			$photo_loc = $_FILES['Employeephoto']['tmp_name'];
			$ext = pathinfo($photo, PATHINFO_EXTENSION);
			if($ext == 'png' or $ext == 'jpeg' or $ext == 'jpg' or $ext == 'gif' or $ext == 'tiff'){
				$photo2 = rand(1000,10000)."-".$photo;
				$newPhoto = strtolower($photo2);
				$finalPhoto = str_replace('', '-', $newPhoto);
					
				if(move_uploaded_file($photo_loc,$folder.$finalPhoto)){
					return  "http://user.connectemployee.com/".$folder.$finalPhoto;
				}else{
						
					return $oldName;
				}
					
			}else{
					
				$error .= "photo format must be \"png,jpeg,jpg,gif,tiff\"";
				return $oldName;
			}
		}else{
			return $oldName;
		}
	}
	
		
		
			$photo = photoUpload($previousPhoto);
			
				
				
				$query = "UPDATE AddUser SET ";
				$query .= "UserId='$userId',";
				$query .= "Salutation='$sal',";
				$query .= "UserName='$name',";
				$query .= "date_of_birth='$dob',";
				$query .= "Joiningdate='$joining',";
				$query .="email1='$email',";
				$query .= "number='$mobile',";
				$query .="pancard_number='$pancard',";
				$query .= "Designation='$designation',";
				$query .= "ProjectName='$projectName',";
				$query .= "ViewLogs='$viewLog',";
				$query .= "ApplyLeaves='$applyLeave',";
				$query .= "ApproveLeaves='$approveLeave',";
				$query .= "ApprovedBy='$approvedBy',";
				$query .= "ApprovingEmployeeId='$approvedEmployee',";
				$query .= "Employeephoto='$photo' where UId='$uid'";
				
			
				
				$resultQuery = mysql_query($query);
				
				
				if($resultQuery == 1){
					header("Location:EditUser.php?uid=$uid&msg1=User information has been updated successfully.");
				}else{
					header("Location:EditUser.php?uid=$uid&msg=User information has been updated Unsuccessful.");
				}
		
		

	?>