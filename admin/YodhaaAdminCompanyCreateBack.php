<?php



	require 'connect.php';
	require 'PHPMailer-master/PHPMailerAutoload.php';
	$database = new connect();
	

	
	$name = htmlspecialchars($_POST['CompanyName']);
	$code = htmlspecialchars($_POST['CompanyCode']);
	$type = htmlspecialchars($_POST['CompanyType']);
	$address = htmlspecialchars($_POST['CompanyAddress']);
	$mobile = htmlspecialchars($_POST['CompanyPhonenumber']);
	$person = htmlspecialchars($_POST['Contactpersonname']);
	$personEmail = htmlspecialchars($_POST['ContactpersonEmailaddress']);
	$personPhone = htmlspecialchars($_POST['ContactpersonMobilenumber']);
	$noOfUsers = htmlspecialchars($_POST['Maximumnoofemployees']);
	$username = htmlspecialchars($_POST['AdminUsername']);
	$password = htmlspecialchars($_POST['password1']);
	$password2  = htmlspecialchars($_POST['password2']);
	$amount = htmlspecialchars($_POST['Amount']);
	$accessOfUsers = htmlspecialchars($_POST['Access']);
	
	
	$noUsers = intval($noOfUsers);
	
	
	$checkQuery = "SELECT * FROM company WHERE code='$code'";
	$checkResult = mysql_query($checkQuery);
	
	if(mysql_num_rows($checkResult) != 0){
		header("Location:AddCompany.php?msg= Company code Already exists..");
	}else if($password != $password2){
		header("Location:AddCompany.php?msg=Password and Confirm Passwords must be match");
	}else if(empty($code)){
		header("Location:AddCompany.php?msg=Company code should not empty");
	}else if(empty($username)){
		header("Location:AddCompany.php?msg=username can`t be empty");
	}else if($noUsers <= 0){
		header("Location:AddCompany.php?msg=no of users atleast 1 person");
	}else{
		
		$password = md5($password);
		
		$query = "INSERT INTO company(name,code,type,address,number,personname,personemail,personnumber,numberUsers,username,password,accessyear,amount)VALUES('$name','$code','$type','$address','$mobile','$person','$personEmail','$personPhone','$noUsers','$username','$password','$accessOfUsers','$amount')";
		
	
		$resultQuery = mysql_query($query);
		
		
		if($resultQuery == 1){
			 sendMail($personEmail, $password2, $username);
			
		}else{
			header("Location:AddCompany.php?msg=Company has been added Unsuccess. Please Try Again..");	
		}
	}
	
	
	/*
	 * sends the link
	 */
	function  sendMail($emails, $password, $userName){
			
	
			
			$link = "http://user.connectemployee.com";
			
		$body = nl2br("Dear  $userName,\n\n
				Thank you for showing your interest in Connect Employee Application.\n
				Just click the below link to explore with the Connect Employee world: \n
				$link \n\n <b>Login As</b>: Admin \n\n <b>Username</b>: $userName \n
				<b>Password</b>: $password \n\n 
				You can change your password (by Navigating through My Account -> Reset Password) after login. \n
				We look forward to hearing from you!\n\n\n Best Regards,\n Connect Employee Team");
			
	
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
							
						header("Location:AddCompany.php?msg=Company has been added Unsuccess. Please Try Again..");
	
					} else {
							
						header("Location:AddCompany.php?msg1=Company has been added successfully.");
					}
	
	}
	

?>
