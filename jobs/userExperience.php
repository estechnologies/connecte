<?php 

	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location:http://portal.yodhaa.com");
	}
	
	//experinece counter
	$experienceCounter = intval($_POST['experienceCounter']);
	
	//id 
	$id = $_SESSION['id'];	
	
	
	
	/*
	 * xml 
	 */
	$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n\n";
	$xml .= "<person id=\"".$id."\">\n";
	
	for($i=0;$i <= $experienceCounter; $i++){
		$xml .= "\t<experience>\n\t\t";
		$xml .="<organization>".$_POST['organization'.$i]."</organization>\n\t\t";
		$xml .="<jobtype>".$_POST['jobtype'.$i]."</jobtype>\n\t\t";
		$xml .="<organizationName>".$_POST['organizationName'.$i]."</organizationName>\n\t\t";
		$xml .="<designation>".$_POST['designationRole'.$i]."</designation>\n\t\t";
		$xml .="<noticeperiod>".$_POST['notice'.$i]."</noticeperiod>\n\t\t";
		$xml .="<fixedctc>".$_POST['fixedctc'.$i]."</fixedctc>\n\t\t";
		$xml .="<variablectc>".$_POST['variablectc'.$i]."</variablectc>\n\t\t";
		$xml .="<joiningdate>".$_POST['date'.$i]."</joiningdate>\n\t";
		$xml .="</experience>\n";
	}
	
	
	/*
	 * primary skill
	 */
	$xml .=  "\t<primary id=\"".$id."\">\n\t\t";
	$xml .="<skillName>".$_POST['primaryskillName']."</skillName>\n\t\t";
	$xml .="<from>".$_POST['primaryfrom']."</from>\n\t\t";
	$xml .="<to>".$_POST['primaryto']."</to>\n\t\t";
	$xml .="<projectName>".$_POST['primaryprojectName']."</projectName>\n\t\t";
	$xml .= "<teamSize>".$_POST['primaryteamSize']."</teamSize>\n\t\t";
	$xml .="<role>".$_POST['primaryrole']."</role>\n\t\t";
	$xml .="<projectDescription>".$_POST['primaryprojectDescription']."</projectDescription>\n\t\t";
	$xml .="<companyName>".$_POST['primaryCompanyName']."</companyName>\n\t";
	$xml .="</primary>\n";
	
	/*
	 * secondary skills
	 */
	
	$xml .="\t<secondary id=\"".$id."\">\n\t\t";
	$xml .="<skillName>".$_POST['secondaryskillName']."</skillName>\n\t\t";
	$xml .="<from>".$_POST['secondaryfrom']."</from>\n\t\t";
	$xml .="<to>".$_POST['secondaryto']."</to>\n\t\t";
	$xml .="<projectName>".$_POST['secondaryprojectName']."</projectName>\n\t\t";
	$xml .= "<teamSize>".$_POST['secondaryteamSize']."</teamSize>\n\t\t";
	$xml .="<role>".$_POST['secondaryrole']."</role>\n\t\t";
	$xml .="<projectDescription>".$_POST['secondaryprojectDescription']."</projectDescription>\n\t\t";
	$xml .="<companyName>".$_POST['secondarycompanyName']."</companyName>\n\t";
	$xml .="</secondary>\n";
	
	/*
	 * knowledge
	 */
	$xml .="\t<knowledge id=\"".$id."\">\n\t\t";
	$xml .="<skillName>".$_POST['knowledgeName']."</skillName>\n\t";
	$xml .="</knowledge>\n";
	
	$xml .= "</person>\n";
	
	
	$myFile = fopen("experience/".$id.".xml", "w");
	fwrite($myFile, $xml);
	fclose($myFile);
	
	echo "created";

?>