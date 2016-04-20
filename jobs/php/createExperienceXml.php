<?php
	
	//$experience = array("currentOrganization","jobType","DesignationRole","noticePeriod","ctc","joiningDate","experience");
	
	
	
	$experience2 = array(
		1 => array('experience','currentOrganization','jobType','designationRole','noticePeriod','ctc','joiningDate'),
		2 => array('experience','currentOrganization1','jobType2','designationRole3','noticePeriod4','ctc5','joiningDate6')
	);
	
	/*
	$experience = array(
		"currentOrganization" => 'here',
		"jobType" => 'programmer',
		"DesignationRole" => 'coder',
		"noticePeriod" => '2 years',
		"ctc" => '25000',
		"joiningDate" => '12-05-2020',
		"experience" => '2 years'
	);
	*/
	
	
		$xml ="<person>\n\t";
		foreach ($experience2 as $exp){
			$xml .="<".$exp[0].">\n\t\t";
			$xml .= "<current>".$exp[1]."</current>\n\t\t";
			$xml .= "<job>".$exp[2]."</job>\n\t\t";
			$xml .= "<role>".$exp[2]."</role>\n\t\t";
			$xml .= "<period>".$exp[4]."</period>\n\t\t";
			$xml .= "<ctc>".$exp[5]."</ctc>\n\t\t";
			$xml .= "<date>".$exp[6]."</date>\n\t";
			$xml .= "</".$exp[0].">\n";
		}
		$xml .= "</person>";
		echo $xml;
		
		
		$xmlobj = new SimpleXMLElement($xml);
		$xmlobj -> asXML('hello2.xml');
?>