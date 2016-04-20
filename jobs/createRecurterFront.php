<html>
	<head>
			<title>recurting</title>
	</head>
	<body>
	
	
	<a href="recruterMain.php">Main</a>
	
	
	<!-- message -->

		
						<?php	
						if(isset($_GET['msg'])){
			
						$msg = $_GET['msg'];
						?>
			<center> <label style="color:Green"><?php echo $msg;?></label></center>
		 <?php	
		}


?>
		
		

	
			<form action="createRecruter.php" method="post" enctype="multipart/form-data">
			
				<!-- specifications -->
					
						type:<input type="text" name="type"/><br>
						organization:<input type="text" name="organization"/><br>
						department:<input type="text" name="department"/><br>
						Location:<input type="text" name="Location"/><br>
						Role:<input type="text" name="Role"/><br>
						Number of openings:<input type="text" name="openings"/><br>
						Job:<input type="text" name="Job"/><br>
						qualification:<input type="text" name="qualification"/><br>
						technologies:<input type="text" name="technologies"/><br>
						exp :<input type="text" name="exp"/><br>
						previous:<input type="text" name="previous"/><br>
						start time:<input type="date" name="starttime"/><br>
						end time:<input type="date" name="endtime"/><br>
						interview type:<input type="text" name="interviewtype"/><br>
						interview date:<input type="date" name="interviewdate"/><br>
						salary:<input type="text" name="salary"/><br>
						name:<input type="text" name="name"/><br>
						email:<input type="text" name="email"/><br>
						mobile:<input type="text" name="mobile"/><br>
						landline:<input type="text" name="landline"/><br>
						attach:<input type="file" name="attach"/><br>
						remarks:<input type="text" name="remarks"/><br>
						<input type="submit" name="submit"/>
			
			</form>
			
	
	</body>


</html>