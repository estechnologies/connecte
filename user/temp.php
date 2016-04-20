<?php
	
	require 'connect.php';

	$database = new connect();
	
	

// Make a MySQL Connection

$query = "SELECT code, COUNT(UserId) FROM AddUser GROUP BY code";
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo "There are ". $row['COUNT(UserId)'] ." user for company code". $row['code'] ." .";
	echo "<br />";
}
?>