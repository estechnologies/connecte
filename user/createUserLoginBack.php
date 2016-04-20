<?php

	require 'PHPMailer-master/PHPMailerAutoload.php';
	require 'connect.php';
	
	$database = new connect();
	
	
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
	
	/**
	 * access
	 */
	
	$viewLog = htmlspecialchars($_POST['ViewLogs']);
	$applyLeave = htmlspecialchars($_POST['ApplyLeaves']);
	$approveLeave = htmlspecialchars($_POST['ApproveLeaves']);
	$approvedBy = htmlspecialchars($_POST['ApprovedBy']);
	$approveadmin=htmlspecialchars($_POST['approvings']);
	/*
	 * photo upload
	 */
	function photoUpload(){
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
						
					return '';
				}
					
			}else{
					
				$error .= "photo format must be \"png,jpeg,jpg,gif,tiff\"";
				return '';
			}
		}else{
			return '';
		}
	}
	
	
	
	
	
	
	
	$checkQuery = "SELECT * FROM users WHERE userid='$userId'";
	$checkResultQuery = mysql_query($checkQuery);
	
	
	if(mysql_num_rows($checkResultQuery) >= 1){
		header("Location:AddUser.php?msg=userid already exists");
	}else{
		
		if($pass == $rpass){
			$photo = photoUpload();
			$spass = md5($pass);
				$query = "INSERT INTO AddUser(UserId,Salutation,UserName,date_of_birth,Joiningdate,email1,number,pancard_number,Designation,ProjectName,password,ViewLogs,ApplyLeaves,ApproveLeaves,ApprovedBy,approveadmin,ApprovingEmployeeId,code,Employeephoto)";
				$query .="VALUES('$userId','$sal','$name','$dob','$joining','$email','$mobile','$pancard','$designation','$projectName','$spass','$viewLog','$applyLeave','$approveLeave','$approvedBy','$approveadmin','$approvedEmployee','$companyCode','$photo')";
				
				
				$resultQuery = mysql_query($query);
				
				
				if($resultQuery == 1){
					sendMail($email, $rpass, $userId, $name);
				}else{
					header("Location:AddUser.php?msg=User information has been added Unsuccessfull.");
				}
		}else{
			header("Location:AddUser.php?msg=Password and Confirm Passwords should be same.");
		}
		
	}
	
	
	

	/*
	 * sends the link
	 */
	function  sendMail($emails, $password,$userid, $userName){
			
		$link = "http://user.connectemployee.com";
			
			
			
		$body = nl2br("Dear $userName,\n\n
				Click the below link to start with the Connect Employee Application:\n
				$link\n
				<b> Login As</b>: User \n
				<b> User Id</b>: $userid \n
				<b> Password</b>: $password \n
				
				You can change your password (by Navigating through My Account -> Reset Password) after login.\n\n
				Best Regards,\n
				Connect Employee Team.
				");
			
	
		/*
		 *	mail function
		  */
			$mail = new PHPMailer;
	
			//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'mail.connectemployee.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'support@connectemployee.com';                 // SMTP username
			$mail->Password = '19931993';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 25;                                    // TCP port to connect to
	
			$mail->setFrom('support@connectemployee.com', 'ConnectEmployee');
					$mail->addAddress($emails);     // Add a recipient
					$mail->addAddress('');               // Name is optional
					$mail->addReplyTo('', '');
					$mail->addCC('');
					$mail->addBCC('');
	
					//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
					//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
					$mail->isHTML(true);                                  // Set email format to HTML
	
					//header & body
					$mail->Subject = 'Connect Employee User Credentials';
					$mail->Body    = $body;
					$mail->AltBody = "$link";
	
					// mail checking
					if(!$mail->send()) {
						$error = $mail->ErrorInfo;
							
						header("Location:AddUser.php?msg=User information has been added Unsuccessfull.$error");
	
					} else {
							
						header("Location:AddUser.php?msg1=User information has been added successfully.");
					}
	
	}
	
