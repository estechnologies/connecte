<?php

		$startDate = htmlspecialchars($_POST['startDate']);
		$endDate = htmlspecialchars($_POST['endDate']);
		
		
		$date1 = new DateTime($startDate);
		$date2 =  new DateTime($endDate);
		$interval =  $date1->diff($date2);
		
		
		
		$i  = intval($interval->days)+1;
		echo $i;
		

?>