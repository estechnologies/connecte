<!Doctype html>

<html>
	<head>
		<title>Experience retreive</title>
	</head>
	<body>
		<h1>Experince</h1>
		<ul>
			<?php 
			
					$dom = simplexml_load_file("experience/26.xml");
					foreach ($dom->xpath("/person/experience") as $exp){
						print "<li>";
						print $exp->jobtype;
						print  "</li>";
						print "<li>";
						print $exp->noticeperiod;
						print  "</li>";
						print "<li>";
						print $exp->fixedctc;
						print  "</li>";
						print "<li>";
						print $exp->variablectc;
						print  "</li>";
						print "<li>";
						print $exp->joiningdate;
						print  "</li>";
					}
			
			?>
		
		</ul>
	</body>

</html>