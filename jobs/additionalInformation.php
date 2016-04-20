<?php 
	
	session_start();
	require 'connect.php';

	$id = $_SESSION['id'];
	$database =  new connect();

	
	$number = htmlspecialchars($_POST['Passport_Number']);
	$expiry = htmlspecialchars($_POST['Passport_Expire_Date']);
	$anyVisa = htmlspecialchars($_POST['Vailable_Visa']);
	$current = htmlspecialchars($_POST['Current_Organizaqtion_Name']);
	$varablectc = htmlspecialchars($_POST['Varible_VaribleCTC']);
	$preferctc = htmlspecialchars($_POST['Varible_FixedCTC']);
	$photo = '';
	
	
	if(empty($varablectc)){
		$varablectc = '';
	}else if(empty($preferctc)){
		$preferctc = '';
	}else if(empty($number)){
		$number = '';
	}else if(empty($anyVisa)){
		$anyVisa ='';
	}
	
	
	$folder = "profiles/";
	$photo_name = rand(100,1000000)."-".$_FILES['Photo_User']['name'];
	$photo_loc = $_FILES['Photo_User']['tmp_name'];
	$newPhotoname = strtolower($photo_name);
	$finalPhoto = str_replace('','-',$newPhotoname);
	if(move_uploaded_file($photo_loc, $floder.$finalPhoto)){
		$photo .= $folder.$finalPhoto;
		$check = $folder.$finalPhoto;
	}else{
		$check = $folder.$finalPhoto;
	}
	
	
	$query = "UPDATE users SET passportnumber='$number',passportexpirydate='$expiry',availablevisa='$anyVisa',currentlylocated='$current',variablectc='$varablectc',preferctc='$preferctc',photo_loc='$photo' WHERE userid='$id'";
	$resultQuery = mysql_query($query);
	
	
	if($resultQuery == 1){
		echo $photo_name;
	}else{
		echo 'fail';
	}
	
?>