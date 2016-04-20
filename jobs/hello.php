<?php

	session_start();
	require 'connect.php';
	
	$database =  new connect();
	
	if(!isset($_SESSION['id']['userid'])){
		header("Location:index.php?msg=session not found");
	}

?>


<html>

	<head>
			<title>Welcome-<?php echo $_SESSION['id']['firstname']?></title>
			
			
			
	</head>
	<body>
			<h1><?php echo $_SESSION['id']['firstname']?></h1>
			<a href="userLogout.php">Logout</a>
			
			<h2>profile</h2>
			<ul>
				<?php 
						
					//profile	
					$id = $_SESSION['id']['userid'];
					$first = $_SESSION['id']['firstname'];
					$last = $_SESSION['id']['lastname'];
					$dob = $_SESSION['id']['dateofbirth'];
					$nationality = $_SESSION['id']['nationality'];
					$pancard = $_SESSION['id']['pancard'];
					$gender = $_SESSION['id']['gender'];
					$mobile = $_SESSION['id']['mobile'];
					$email = $_SESSION['id']['email'];
					
					$address = $_SESSION['id']['address'];
					$preferskill = $_SESSION['id']['preferskill'];
					$preferLocation = $_SESSION['id']['preferlocation'];
					$preferCompanies = $_SESSION['id']['prefercompanies'];
					$preferctc = $_SESSION['id']['preferctc'];
					
					echo "<li>FirstName: ".$first."</li>";
					echo "<li>LastName: ".$last."</li>";
					echo "<li>DateOfBirth : ".$dob."</li>";
					echo "<li>nationality : ".$nationality."</li>";
					echo "<li>Pancard : ".$pancard."</li>";
					echo "<li>Gender: ".$gender."</li>";
					echo "<li>mobile: ".$mobile."</li>";
					echo "<li>email : ".$email."</li>";
					echo "<li>address: ".$address."</li>";
					echo "<li>prefer skill: ".$preferskill."</li>";
					echo "<li>prefer location : ".$preferLocation."</li>";
					echo "<li>prefer comapnies: ".$preferCompanies."</li>";
					echo "<li>prefer ctc: ".$preferctc."</li>";
				?>
					
			</ul>
			

			<h2>Experience</h2>
				<?php 
						$expFile = "experience/".$id.".xml";
						$exp = simplexml_load_file($expFile);
						
						foreach ($exp->xpath("/person/experience") as $expDetails){
							print "<ul>";
							
							print "<li>";
							print "organization: ".$expDetails->organization;
							print  "</li>";
							
							print "<li>";
							print "jobtype : ".$expDetails->jobtype;
							print  "</li>";
							
							
							print "<li>";
							print "organization name : ".$expDetails->organizationName;
							print  "</li>";
							
							print "<li>";
							print " designation : ".$expDetails->designation;
							print  "</li>";
							
							
							print "<li>";
							print " noticeperiod : ".$expDetails->noticeperiod;
							print  "</li>";
							
							print "<li>";
							print " fixedctc : ".$expDetails->fixedctc;
							print  "</li>";
							
							
							print "<li>";
							print "  variable ctc: ".$expDetails->variablectc;
							print  "</li>";
							
							
							print "<li>";
							print " joiningdate: ".$expDetails->joiningdate;
							print  "</li>";
						
							print "</ul>";
							
						}
						
						
						echo "<h2>primary skills</h2>";
						foreach ($exp->xpath("/person/primary") as $primary){
							print "<ul>";
							
							print "<li>";
							print " skill Name: ".$primary->skillName;
							print  "</li>";
							
							print "<li>";
							print " from: ".$primary->from;
							print  "</li>";
							
							
							print "<li>";
							print " to: ".$primary->to;
							print  "</li>";
							
							
							print "<li>";
							print " project Name: ".$primary->projectName;
							print  "</li>";
			
							print "<li>";
							print " team Size: ".$primary->teamSize;
							print  "</li>";
							
							print "<li>";
							print "role: ".$primary->role;
							print  "</li>";
							
							print "<li>";
							print "project Description: ".$primary->projectDescription;
							print  "</li>";
							
							print "<li>";
							print "companyName: ".$primary->companyName;
							print  "</li>";
							
							
							print "</ul>";
							
						}
						
						
						echo "<h2>Secondary Skills</h2>";
						
						foreach ($exp->xpath("/person/secondary") as $second){
							print "<ul>";
								
							print "<li>";
							print " skill Name: ".$second->skillName;
							print  "</li>";
								
							print "<li>";
							print " from: ".$second->from;
							print  "</li>";
								
								
							print "<li>";
							print " to: ".$second->to;
							print  "</li>";
								
								
							print "<li>";
							print " project Name: ".$second->projectName;
							print  "</li>";
								
							print "<li>";
							print " team Size: ".$second->teamSize;
							print  "</li>";
								
							print "<li>";
							print "role: ".$second->role;
							print  "</li>";
								
							print "<li>";
							print "project Description: ".$second->projectDescription;
							print  "</li>";
								
							print "<li>";
							print "companyName: ".$second->companyName;
							print  "</li>";
								
							print "</ul>";
						}
						
						
						echo "<h2>Knowledge </h2>";
					
						foreach ($exp->xpath("/person/knowledge") as $know){
							print "<ul>";
							
							print "<li>";
							print "knowledge skills : ".$know->skillName;
							print  "</li>";
							
							print "</ul>";
						}
				?>	
				
				<?php 
				
					$studyFile = "study/".$id.".xml";
					$study = simplexml_load_file($studyFile);
						
					echo "<h2>Study</h2>";
					foreach ($study->xpath("/study/group") as $group){
						print "<ul>";
						
						print "<li>";
						print "education :".$group->education;
						print "</li>";
						
						print "<li>";
						print "specialization :".$group->specialization;
						print "</li>";
						
						print "<li>";
						print "institute :".$group->institute;
						print "</li>";
						
						
						print "<li>";
						print "university :".$group->university;
						print "</li>";
						
						print "<li>";
						print "from :".$group->from;
						print "</li>";
						
						print "<li>";
						print "to :".$group->to;
						print "</li>";
						
						
						print "<li>";
						print "aggregate :".$group->aggregate;
						print "</li>";
						
						print "</ul>";
						
					}
				
					echo "<h2>Certificates</h2>";
					
					
					foreach ($study->xpath("/study/certificate") as $cer){
						print "<ul>";
						
						print "<li>";
						print "Name :".$cer->name;
						print "</li>";
						
						print "<li>";
						print "awarded :".$cer->awarded;
						print "</li>";
						
						print "<li>";
						print "date :".$cer->date;
						print "</li>";
						
						
						print "<li>";
						print "validity :".$cer->validity;
						print "</li>";
						
						
						print "</ul>";
					}
				
				?>	
			
			
	
	</body>


</html>