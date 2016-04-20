<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Loaction:index.php?msg=session not found from recurter");
	}
	


?>


<html>

	<head>
			<title>Welcome to protal</title>
	</head>
	<body>
	
			<h1><?php echo $_SESSION['id']['username']?></h1>
			<a href="createRecurterFront.php">NewPost</a>
			<a href="RecruterSeePosts.php">see All posts</a>
			<a href="recurterLogout.php">Logout</a>
	</body>
</html>