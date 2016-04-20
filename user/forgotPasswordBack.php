<?php 

	require 'PHPMailer-master/PHPMailerAutoload.php';
	require 'connect.php';
	
	$database = new connect();
	$email = htmlspecialchars($_POST['email']);
	
	
	/**
	 * checks whether admin or users
	 */
	if(!empty($email)){
		
		$companyQuery = "SELECT * FROM company WHERE personemail='$email'";
		$resultCompanyQuery = mysql_query($companyQuery);
		
		if(mysql_num_rows($resultCompanyQuery) <= 0){
			
			/*
			 * user database
			 */
			$userQuery = "SELECT * FROM AddUser WHERE email1='$email'";
			$resultUserQuery = mysql_query($userQuery);
			
			if(mysql_num_rows($resultUserQuery) >= 1){
				$userRow = mysql_fetch_array($resultUserQuery);
				
				$userArr = array("AddUser",$userRow['UId'],$userRow['code'],$userRow['UserName']);
				
				insertTable($userArr,$email);
			}else{
				header("Location:ForgotPassword.php?msg=The Entered Email Address is not found in our records.");
			}
		}else{
			$companyRow = mysql_fetch_array($resultCompanyQuery);
			
			$companyArr = array("company",$companyRow['cmpId'],$companyRow['code'],$companyRow['username']);
			insertTable($companyArr, $email);
		}
	}
	
	
	
	
	
	
	
	/*
	 * 
	 * 
	 * @param unknown $userInfo
	 * @param unknown $userEmail
	 * 
	 * 
	 * inserts the forgot tables
	 */
	function insertTable($userInfo,$userEmail){
		$insertQuery = "INSERT INTO forgot(userId,tableName,code,time,advance)VALUES('$userInfo[1]','$userInfo[0]','$userInfo[2]',NOW(), NOW() + INTERVAL 15 MINUTE)";
		$resultInserts = mysql_query($insertQuery);
		$insertedId = mysql_insert_id();
		
		sendMail($userEmail, $insertedId,$userInfo[3]);
	}
	
	
	/*
	 * sends the link
	 */
	function  sendMail($emails, $forgotInsertId, $userName){
			
			$link = "http://user.connectemployee.com/ForgotResetPassword.php?id=$forgotInsertId";
			
			
			
		$body = nl2br("Dear $userName,\n\t 
					A password reset was requested for  user account on our system.\n\n Please click the following link to reset your password: \n $link \n\n
				You will be asked to change the password. \n If you did not request this password reset, please let us know. \n\n Best Regards,\n Connect Employee Team.
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
		$mail->Subject = 'Connect Employee Password Reset';
		$mail->Body    = $body;
		$mail->AltBody = "$link";
	
		// mail checking
		if(!$mail->send()) {
			$error = $mail->ErrorInfo;
			
			header("Location:ForgotPassword.php?msg=".$error);
				
		} else {
			
			header("Location:ForgotPassword.php?msg1=Email has sent successfully to the registered email address.<br>Note: Please check spam folder.");
		}
	
	}
	
	
?>