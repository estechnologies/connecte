<?php 
	
	session_start();

	if(!isset($_SESSION['admin']['username'])){
		header("Location:index.php");
	}

?>





<!DOCTYPE html>
<html lang="en">
<head>
 <title>Admin Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Custom CSS -->
<link href="css/index.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<style>
	th {
    white-space: nowrap;
    text-align: center;
}
	td {
    white-space: nowrap;
       text-align: center;
}
table{border: 1px solid #000;}
</style>
  </head>
  <body>

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
   
	<img class="logo" src="images/logo.gif"></img>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
		
       
      </ul>
    </div>
  </div>
</nav>
<nav   class="navbar navbar-inverse" style="margin-top:100px">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="my">
      <ul class="nav nav-pills">
  <li class="headerlinks"  ><a style=""  href="Home.php" ><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></li>
  <li class="dropdown headerlinks">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="width: 247px;"><center><span class="glyphicon glyphicon-equalizer"> Company <span class="caret"></span></center></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a style=""  href="AddCompany.php" ><span class="glyphicon glyphicon-plus"></span> &nbsp Add Company</a></li>
        <li class="headerlinks_drops"><a style=""  href="ViewCompany.php" ><span class="glyphicon glyphicon-list-alt"></span> &nbsp View & Edit Companies</a></li>                       
      </ul>
    </li>
 <li class="headerlinks"  ><a style=""  href="ViewContact.php" ><span class="glyphicon glyphicon-envelope"></span> &nbsp Contact Messages</a></li>
 <li class="headerlinks navbar-right"><a href="Logout.php" ><span class="glyphicon glyphicon-log-out"></span>  &nbsp Logout</a></li>
  </ul>
    </div>
</nav>
<?php
					include 'counts.php';
					$count  = new counts();
					
					?>
<div class="container" id="mainborder" style="margin-top:30px;margin-bottom:141px;">
<div class="col-md-6" style="margin-top:50px;" >
<div class="col-md-1">
</div>
<div class="col-md-4" style=" background-color: #31708f; color: white; border-radius: 50%;">
<center><div style="margin-top:30px;margin-bottom:10px;font-size:18px;">No of companies</div>

<p style="margin-top:10px;margin-bottom:30px;font-size:18px;"><?php echo $count->totalcompanycount(); ?></p></center>
</div>
<div class="col-md-2">
</div>
<div class="col-md-4" style=" background-color: #31708f; color: white; border-radius: 50%;">
<center><div style="margin-top:30px;margin-bottom:10px;font-size:18px;">No of Users</div>

<p style="margin-top:10px;margin-bottom:30px;font-size:18px;"><?php echo $count->usersCount(); ?></p></center>
</div>
<div class="col-md-1">
</div>
</div>
<div class="col-md-6">
							 <div class="table-responsive" style="margin-top:30px;">
							 <?php 
							 
							 		
							 		
							 		
							 		$query = "SELECT * FROM company WHERE accessyear > CURDATE() AND accessyear <=(CURDATE() + INTERVAL 3 MONTH)";
							 		$resultQuery =  mysql_query($query);
							 	
							 		$tableShow = mysql_num_rows($resultQuery);
							 
							 ?>
							 
							<?php  if($tableShow > 0){ ?>
							 <table class="table table-striped"  id="someid">
							
			<thead>
			  <tr>
			  					 <th ><strong>Company code</strong></th>  
								 <th><strong>Company Name</strong> </th> 
								 <th ><strong>Access end date</strong></th>
								 </tr>
			</thead>
			<tbody>
					<?php while($row = mysql_fetch_array($resultQuery)){?>
					
					
							<tr>
								
								<td><?php echo $row['code']?></td>
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['accessyear']?></td>
							</tr>
					
					<?php 
						
						}?>
			</tbody>
			</table>
			<?php }else{?>
					<h1 style="color:red; ">No records found</h1>
			<?php }?>
			</div>
			
</div>
</div>
 <footer style="margin-bottom:0px" class="navbar navbar-default navbar-fixed-bottom footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Yodhaa Business Solutions Pvt Ltd. </a></p></center>
		</div>
   </footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validations.js"></script>
  <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
</body>
</html>
</body>
</html>