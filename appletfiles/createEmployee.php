<html>

		<head>
		
				<title>Create Employee</title>
		</head>
		<body>
		
		<?php 
		
			if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				echo "<p>".$msg."</p>";
			}
		
		?>
			<center>
			<h1>Create employee</h1>
				<form action="createEmployeeBack.php" method="post">
					<input type="text" name="username" id="username" placeholder="Username"><br>
					<input type="password" name="password" id="password" placeholder="Password"><br> 	
					<input type="submit" name="submit" value="create">
				</form>
			</center>
		</body>
</html>