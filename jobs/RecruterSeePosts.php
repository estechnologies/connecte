<?php

	session_start();

	if(!isset($_SESSION['id']['id'])){
		header("Loaction:index.php?msg=session not found");
	}
	
	require 'connect.php';

	$database = new connect();
	
	
	$rid = $_SESSION['id']['id'];
	
	
	$query = "SELECT * FROM recruterPost WHERE recruterId='$rid'";
	$resultQuery = mysql_query($query);
	
	
	echo "<a href=\"recruterMain.php\">Main</a>";
	
	echo "<table border =\"1\">";
	echo "<tr>";
	echo "<th>recruterId</th>";
	echo "<th>type</th>";
	echo "<th>organization</th>";
	echo "<th>department</th>";
	echo "<th>location</th>";
	echo "<th>role</th>";
	echo "<th>numOfOpenings</th>";
	echo "<th>job</th>";
	echo "<th>qualification</th>";
	echo "<th>technologies</th>";
	echo "<th>exp</th>";
	echo "<th>previous</th>";
	echo "<th>startTime</th>";
	echo "<th>endTime</th>";
	echo "<th>interviewType</th>";
	echo "<th>interviewDate</th>";
	echo "<th>salary</th>";
	echo "<th>name</th>";
	echo "<th>email</th>";
	echo "<th>mobile</th>";
	echo "<th>landline</th>";
	echo "<th>attach</th>";
	echo "<th>remarks</th>"; 
	echo "</tr>";
	

	
	
	while ($row = mysql_fetch_array($resultQuery)){
		echo "<tr>";
		echo "<td>".$row['recruterId']."</td>";
		echo "<td>".$row['type']."</td>";
		echo "<td>".$row['organization']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['location']."</td>";
		echo "<td>".$row['role']."</td>";
		echo "<td>".$row['numOfOpenings']."</td>";
		echo "<td>".$row['job']."</td>";
		echo "<td>".$row['qualification']."</td>";
		echo "<td>".$row['technologies']."</td>";
		echo "<td>".$row['exp']."</td>";
		echo "<td>".$row['previous']."</td>";
		echo "<td>".$row['startTime']."</td>";
		echo "<td>".$row['endTime']."</td>";
		echo "<td>".$row['interviewType']."</td>";
		echo "<td>".$row['interviewDate']."</td>";
		echo "<td>".$row['salary']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['landline']."</td>";
		echo "<td>".$row['attach']."</td>";
		echo "<td>".$row['remarks']."</td>";
		echo "</tr>";
	}
	
	
?>