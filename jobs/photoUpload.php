<?php

	session_start();
	require 'connect.php';
	
	$id = $_SESSION['id'];
	
	$database = new connect();

	$folder = 'profiles/';
	$photo = rand(100,1000000)."-".$_FILES['Photo_User']['name'];
	$photo_loc = $_FILES['Photo_User']['tmp_name'];
	$newPhotoname = strtolower($photo);
	$finalPhoto = str_replace('','-',$newPhotoname);
	if(move_uploaded_file($photo_loc, $finalPhoto)){
		$photo2 = $folder.$finalPhoto;
		$query = "UPDATE users SET photo_loc='$photo2' WHERE userid='$id'";
		$resultQuery = mysql_query($query);
		if($resultQuery == 1){
			echo 'success';
		}else{
			echo 'update fail';
		}
	}else{
		echo 'upload fail';
	}
	
	

?>

