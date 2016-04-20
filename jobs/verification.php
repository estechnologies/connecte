<?php
	session_start();
	

	require 'connect.php';
	require 'PHPMailer-master/PHPMailerAutoload.php';
	
	$id = $_SESSION['id'];
	
	$database = new connect();
	
	$email = htmlspecialchars($_POST['email']);
	$number = htmlspecialchars($_POST['number']);
	$address = htmlspecialchars($_POST['address']);
	

	$query = "UPDATE users SET mobile='$number',address='$address' WHERE userid='$id'";
	$resultQuery = mysql_query($query);
	
	$httphost = $_SERVER['HTTP_HOST'];
	// current page
	$requestUri = $_SERVER['REQUEST_URI'];
	//link
	$link = "http://$httphost/"."activation.php?id=$id";
	
		
	
	/*
	 *	mail function
	 */
	$mail = new PHPMailer;
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.yodhaa.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'users@yodhaa.com';                 // SMTP username
	$mail->Password = '19931993';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                    // TCP port to connect to
	
	$mail->setFrom('users@yodhaa.com', 'portal');
	$mail->addAddress($email);     // Add a recipient
	$mail->addAddress('');
	$mail->addReplyTo('', '');
	$mail->addCC('');
	$mail->addBCC('');
	
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'goodscab account activation';
	$mail->Body    = 'please click here to activate your account.<a href='.$link.'>'.$link.'</a>';
	$mail->AltBody = '$link';
	
	
	if(!$mail->send()) {
		$error = $mail->ErrorInfo;
			echo 'something wrong'.$error.' '.$email;
			
		} else {
			echo 'success';	
		}
		
	
	
	

?>