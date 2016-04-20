<?php 

session_start();

if(!isset($_SESSION['id'])){
	header("Location:http://portal.yodhaa.com");
}

//experinece counter
$studyCounter = intval($_POST['studyCounter']);

$certificateCounter = intval($_POST['certificateCounter']);

//id
$id = $_SESSION['id'];



/*
 * xml 
 */
	$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n\n";
	$xml .="<study id=\"".$id."\">\n";
	
	for($i =0; $i<= $studyCounter;$i++){
		$xml .= "\t<group>\n\t\t";
		$xml .= "<education>".$_POST['education'.$i]."</education>\n\t\t";
		$xml .= "<specialization>".$_POST['specialization'.$i]."</specialization>\n\t\t";
		$xml .= "<institute>".$_POST['institute'.$i]."</institute>\n\t\t";
		$xml .= "<university>".$_POST['university'.$i]."</university>\n\t\t";
		$xml .= "<from>".$_POST['from'.$i]."</from>\n\t\t";
		$xml .= "<to>".$_POST['to'.$i]."</to>\n\t\t";
		$xml .= "<aggregate>".$_POST['aggregate'.$i]."</aggregate>\n\t";
		$xml .= "</group>\n";	
	}
	
	for($j = 0; $j <= $certificateCounter; $j++){
		$xml .= "\t<certificate>\n\t\t";
		$xml .= "<name>".$_POST['name'.$j]."</name>\n\t\t";
		$xml .= "<awarded>".$_POST['awarded'.$j]."</awarded>\n\t\t";
		$xml .= "<date>".$_POST['date'.$j]."</date>\n\t\t";
		$xml .= "<validity>".$_POST['validity'.$j]."</validity>\n\t";
		$xml .= "</certificate>\n";
	}
	
	
	$xml .= "</study>\n";
	
	
	$myFile = fopen("study/".$id.".xml", "w");
	fwrite($myFile, $xml);
	fclose($myFile);
	
	
	echo "created";
	


?>