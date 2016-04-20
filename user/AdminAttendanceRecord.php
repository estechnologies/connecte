<?php 
        session_start();
                                    
                                    	if(!isset($_SESSION['company']['username'])){
                                    		header("Location:index.php");
                                    	}
                                    	
                                    	
                                    	
                                    	
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Admin Attendance Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
  <!-- Custom CSS -->
<link href="css/index.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">

<style>
.btn.disabled, .btn[disabled], fieldset[disabled] .btn {
   cursor: not-allowed;
   filter: alpha(opacity=65);
     background-color: #073A65;
   border-color: #073A65;
   color:white;
   -webkit-box-shadow: none;
   box-shadow: none;
   opacity: .65;
}

.btn.disabled:hover, .btn[disabled]:hover, fieldset[disabled] .btn:hover {
   cursor: not-allowed;
   filter: alpha(opacity=65);
     background-color:white ;
   border-color: #073A65;
   color:#073A65;
   -webkit-box-shadow: none;
   box-shadow: none;
   opacity: .65;
}
  .datetimepicker {
  left: 425px; z-index: 1010; display: none; top: 375px; margin-top: 81px;
    padding: 4px;

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    direction: ltr;
}
	th {
    white-space: nowrap;
    text-align:center;
}
	td {
    white-space: nowrap;
      text-align:center;
}
table{border: 1px solid #000;}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #FFFFFF;
    cursor: default;
    border: 1px solid #eee;
    border-bottom-color: transparent;
    font-size: 18px;
    background-color: #073a65;
}
.panel-default>.panel-heading {
    color: white;
    /* background-color: #eee; */
    /* border-color: #eee; */
    background-image: linear-gradient(#ffffff, #eeeeee 50%, #e4e4e4);
    background-repeat: no-repeat;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe4e4e4', GradientType=0);
    -webkit-filter: none;
    filter: none;
    /* border: 1px solid rgb(238, 238, 238); */
    text-shadow: 0 1px 0 rgb(238, 238, 238);
    color: black;
}
.nav-tabs {
    border-bottom: 1px solid #eee;
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    font-size: 18px;
    color: #073a65;
    border-radius: 4px 4px 4px 4px;
}
.nav-tabs>li>a:hover {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    font-size: 18px;
    color:white;
    background-color:#073a65;
    border-radius: 4px 4px 4px 4px;
}
.panel-heading {
    padding: 0px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
</style>



  </head>
  <body>

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
   
	<img src="images/logo.gif" class="logo"></img>
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
  <li class="headerlinks"  ><a style=""  href="AdminHome.php" ><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></li>
<li class="dropdown headerlinks">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="width: 200px;"><center><span class="glyphicon glyphicon-user"></span> &nbsp User <span class="caret"></span></center></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a style=""  href="AddUser.php" ><span class="glyphicon glyphicon-plus"></span> &nbsp Add User</a></li>
        <li class="headerlinks_drops"><a style=""  href="ViewUser.php" ><span class="glyphicon glyphicon-list-alt"></span> &nbsp View & Edit User</a></li>                       
      </ul>
    </li>
   
      <li class="headerlinks"  ><a style=""  href="AdminMyProfile.php" ><span  class="glyphicon glyphicon-user"></span> &nbsp My Profile</a></li>
       <li class="dropdown headerlinks">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="width: 215px;"><center><span  class="glyphicon glyphicon-book"></span> &nbsp Logbook<span class="caret"></span></center></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a style=""  href="AdminAttendanceRecord.php" ><span  class="glyphicon glyphicon-book"></span> &nbsp Attendance Record</a></li>
        <li class="headerlinks_drops"><a style=""  href="AdminLeaveRecord.php" ><span  class="glyphicon glyphicon-book"></span> &nbsp Leave Record</a></li>                       
      </ul>
    </li>
     <li class="dropdown headerlinks navbar-right">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="width: 193px;"  ><center><span  class="glyphicon glyphicon-user"></span> &nbsp My Account <span class="caret"></span></center></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a style=""  href="AdminResetPassword.php" ><span class="glyphicon glyphicon-refresh"></span> &nbsp Reset Password</a></li>
        <li class="headerlinks_drops"><a href="adminLogout.php" ><span class="glyphicon glyphicon-log-out"></span>  &nbsp Logout</a></li>                       
      </ul>
    </li>
  </ul>
    </div>
</nav>



<div class="main" style="margin-bottom:100px" >
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs" id="datesTabs">
                            <li class="active"><a href="#Datewise" data-toggle="tab">Date wise</a></li>
                            <li><a href="#Periodwise" data-toggle="tab">Period wise</a></li>
                            <li><a href="#Snapshot" data-toggle="tab">Snapshot</a></li>
                        </ul>
                </div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane active" id="Datewise">
							<div class="container" style="margin-bottom:100px">
								<center  style="margin-bottom:50px;"><strong><h3 style="    font-weight: 700;">Date wise</h3></strong></center>
	


	
<?php 
		if(isset($_GET['datemsg'])){
			
			$msg = $_GET['datemsg'];
			$httphost = $_SERVER['HTTP_HOST'];
			$link = "http://$httphost/"."popup.php?msg=$msg";
			//echo "<script>window.open('$link','popup','width=400,height=200,scrollbar=yes' );</script>";
			//echo "<script>window.open('$link')</script>";
			?>
			<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center class="message"> <label style="font-size: 14px;color:Red;"><?php echo $msg;?></label></center> 
  </div>
		 <?php	
		}?></center>
		 <center><?php 
	
	

		if(isset($_GET['datemsg1'])){
			
			$msg1 = $_GET['datemsg1'];
			$httphost = $_SERVER['HTTP_HOST'];
			$link = "http://$httphost/"."popup.php?msg=$msg";
			//echo "<script>window.open('$link','popup','width=400,height=200,scrollbar=yes' );</script>";
			//echo "<script>window.open('$link')</script>";
			?>
		<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center class="message"> <label style="font-size: 14px;color:green;"><?php echo $msg1;?></label></center>
  </div>
		 <?php	
		}?></center>
	
			
			
							<?php

							require 'connect.php';
							$database = new connect();
							
							$companyCode = $_SESSION['company']['code'];
							
							
							
							
							
							/*
							 * reteriving orders according search or whole
							 */
							$pageNumber = intval($_GET['page']);
							
							
							if($pageNumber == null or $pageNumber == '1'){
								$pageNumber = 0;
							}else{
								$pageNumber = ($pageNumber*5)-5;
							}
							
							//
							$datequery = "SELECT * FROM  empLogins  WHERE companyCode='$companyCode' ORDER BY id DESC LIMIT $pageNumber,5 ";
							if(isset($_POST['dateSearch'])){

$search_term = htmlspecialchars($_POST['search_box']);
$date = htmlspecialchars($_POST['date']);

$endDate = $date." 23:59:59";
$date = $date." 00:00:00";


$datequery = "SELECT * FROM empLogins  WHERE companyCode='$companyCode'  AND empid='$search_term' AND  logintime BETWEEN '$date' AND '$endDate' ORDER BY id DESC  LIMIT  $pageNumber,5";



$checkQuery= mysql_query($datequery);
if(mysql_num_rows($checkQuery) <= 0){
	$noFound= "No records to display.";
}else{
	$noFound = "";
}

	
}


							if(isset($_POST['datereset'])){





$query = "SELECT * FROM  empLogins  WHERE companyCode='$companyCode' ORDER BY id DESC LIMIT $pageNumber,5  ";


}




$resultQuery = mysql_query($datequery);




								/*
								 *page number counts 
								 */


							$pagesTotalCount = "SELECT * FROM  empLogins  WHERE companyCode='$companyCode'  LIMIT $pageNumber,5 ";

							$resultPagesTotalCount = mysql_query($pagesTotalCount);
							$pages = mysql_num_rows($resultPagesTotalCount);

							if(isset($_POST['search'])){
								$pages = mysql_num_rows($resultQuery);
							}
							
							$pageCount = floatval($pages/5);
							$pageCount = ceil($pageCount);


?>
	
<div class="col-md-3">
							 <form class="form-inline" role="form"  action="AdminAttendanceRecord.php?class=0" method="post">
   
    <div class="form-group">
      <div style="" class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgsdate(this);"  oninput="InvalidMsgsdate(this);" required="required" placeholder="Select date" name="date" id="date"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
                                    </div>
    </div>
    </div>
	<div class="col-md-2">
	<input type="text" name="search_box" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required" class="form-control input-sm" maxlength="10" placeholder="Enter user id" />
	</div>
   <div class="col-md-1">
    <button type="submit" class="btn btn-default" name="dateSearch">Search</button>
</form>
</div>
<div class="col-md-1">

 <form role="form" action="AdminAttendanceRecord.php" method="post">
<button type="submit" class="btn btn-default" name="datereset">Reset</button>
  </form>
  </div>
							 <div class="col-md-12">
							 <div class="table-responsive" style="margin-top:30px;">
							 <table class="table table-striped"  id="someid">
							
			<thead>
			  <tr>
			  					 <th ><strong>User id</strong></th> 
								 <th ><strong>Login time</strong></th> 
								 <th><strong>Logout time</strong> </th>
								   <th> <strong>On System Time</strong></th>
								 </tr>
			</thead>
			<tbody>
			
			
			
			<?php if(mysql_num_rows($resultQuery) > 0){ ?>
			
			
			<?php 
			/*
			 *if no found isset 
			 */
				if(isset($noFound)){
							 if(mysql_num_rows($resultQuery) <= 0){
									echo "<td colspan='6' style='font-size: 14px;color:Red;'>$noFound</td> ";
							
								}
				}
			?>
			
			 <?php while($row = mysql_fetch_array($resultQuery)){ ?>
			 
			 				
										<tr>
												<?php 
													 $loginTime = $row['logintime'];
													 $logoutTime = $row['logouttime'];
														
													 $loginmin = new DateTime($loginTime);
													 $logoutmin = new DateTime($logoutTime);
													 
													 $interval = $loginmin->diff($logoutmin);
													
													 $totalSystemTime = $interval->h.":".$interval->i.":".$interval->s;
						
												?>
										
											 <td><?php echo $row['empid'];?></td> 
											 <td><?php echo $row['logintime'];?></td> 
							
											 <td><?php echo $row['logouttime'];?></td> 
											  <td><?php echo $totalSystemTime; ?></td> 
										</tr>
			<?php }?>
			
			<!--  if loop -->
			  <?php }else{ ?>
							  
							  			<td colspan="4" style='font-size: 14px;color:Red;'>No Records to display</td>
							  
				<?php } ?>
			
			</tbody>
		  </table>
						
							
  
						
					</div>
										   <div>
        <ul class="pagination pull-right" >
    <!-- pagination -->
            <?php 
            
            	for($i = 1;$i <= $pageCount; $i++){
            		?>  <li><a href="AdminAttendanceRecord.php?class=0&page=<?php echo $i;?>"><?php  echo $i; ?></a></li> <?php 
            	}
            
            ?>
            
            
        </ul>
    </div>
    </div>	
							</div>
						</div>
						<div class="tab-pane" id="Periodwise">
						
						
						
						<!--  
						
						
						
								period wise
						
						
						
						
						
						
						-->
						
						
						
						
							<div class="container" style="margin-bottom:100px">	
									<center  style="margin-bottom:50px"><strong><h3 style="    font-weight: 700;">Period wise</h3></strong></center>
									 <center><?php 
	


	

		if(isset($_GET['msg'])){
			
			$msg = $_GET['msg'];
			$httphost = $_SERVER['HTTP_HOST'];
			$link = "http://$httphost/"."popup.php?msg=$msg";
			//echo "<script>window.open('$link','popup','width=400,height=200,scrollbar=yes' );</script>";
			//echo "<script>window.open('$link')</script>";
			?>
			<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center class="message"> <label style="font-size: 14px;color:Red;"><?php echo $msg;?></label></center> 
  </div>
		 <?php	
		}?></center>
		 <center><?php 
	
	

		if(isset($_GET['msg1'])){
			
			$msg1 = $_GET['msg1'];
			$httphost = $_SERVER['HTTP_HOST'];
			$link = "http://$httphost/"."popup.php?msg=$msg";
			//echo "<script>window.open('$link','popup','width=400,height=200,scrollbar=yes' );</script>";
			//echo "<script>window.open('$link')</script>";
			?>
		<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center class="message"> <label style="font-size: 14px;color:green;"><?php echo $msg1;?></label></center>
  </div>
		 <?php	
		}?></center>
	
			
			
							<?php			
							
							
							
							/*
							 * reteriving orders according search or whole
							 */
							$pageNumberPeriod = intval($_GET['page']);
							
							
							if($pageNumberPeriod == null or $pageNumberPeriod == '1'){
								$pageNumberPeriod = 0;
							}else{
								$pageNumberPeriod = ($pageNumberPeriod*5)-5;
							}
							
							$periodquery = "SELECT * FROM empLogins  WHERE companyCode='$companyCode' ORDER BY id DESC LIMIT $pageNumberPeriod,5 ";
							if(isset($_POST['periodsearch'])){

$search_term = htmlspecialchars($_POST['periodsearch_box']);
$dates = htmlspecialchars($_POST['dates']);

$periodlastdate = substr($dates,12)." 23:59:59";
$periodfirstdate = substr($dates,0,10)." 00:00:00";



$periodquery = "SELECT * FROM empLogins  WHERE companyCode='$companyCode' AND empid= '$search_term' AND logintime BETWEEN '$periodfirstdate' AND '$periodlastdate' LIMIT $pageNumberPeriod,5";


$checkQuery= mysql_query($periodquery);
if(mysql_num_rows($checkQuery) <= 0){
	$noFound= "No records to display.";
}else{
	$noFound = "";
}

	
}


							if(isset($_POST['periodreset'])){





$periodquery = "SELECT * FROM empLogins  WHERE companyCode='$companyCode' ORDER BY id DESC LIMIT $pageNumberPeriod,5 ";


}




$resultPeriodQuery = mysql_query($periodquery);




								/*
								 *page number counts 
								 */


							$pagesTotalCountPeriod = "SELECT * FROM empLogins WHERE companyCode='$companyCode'";

							$resultPagesTotalCountPeriod = mysql_query($pagesTotalCountPeriod);
							$pagesPeriod = mysql_num_rows($resultPagesTotalCountPeriod);

							if(isset($_POST['periodsearch'])){
								$pagesPeriod = mysql_num_rows($resultPeriodQuery);
							}
							
							$pageCountPeriod = floatval($pagesPeriod/5);
							$pageCountPeriod = ceil($pageCountPeriod);


							?>

							
							 <form name="search_form" method="POST" style="margin-top:10px;" action="AdminAttendanceRecord.php?class=1">
							 
							 <div class="container">
								<div class="row">
								<div class="col-md-2">
<input type="text" name="periodsearch_box" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required" class="form-control input-sm" maxlength="10" placeholder="Enter user id" />
</div>
									   <div class="col-md-4">
<div id="reportrange"  name="daterange" class="pull-right" style="background: #fff; cursor: pointer;    border-radius: 4px; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
  <span id="rangez"></span> <b class="caret"></b>
  <input type="hidden" id="dates" name="dates">
</div>
</div>

							<div style="width: 12.666667%;" class="col-md-2">
							 <button type="submit"  name="periodsearch"  onclick="getDateValues()" style="width:100px;" class="btn btn-default">Search</button>							</div></form><form name="search_form" method="POST"  action="AdminAttendanceRecord.php?class=1">
							<div style="width: 12.666667%;" class="col-md-2">
							 <button type="submit" name="periodreset"  style="width:100px;" class="btn btn-default">Reset</button>
							</div>
							</div>
							</div>
							 </form>
							 <div class="table-responsive" style="margin-top:30px;">
							 <table class="table table-striped"  id="someid">
							
			<thead>
			  <tr>
			  					 <th ><strong>User id</strong></th>
			  					 <th ><strong>Status date</strong></th>
								 <th ><strong>Login Time</strong></th> 
								 <th><strong>Logout Time</strong> </th>
								  <th><strong>On System Time</strong> </th>
								 </tr>
			</thead>
			<tbody>
			
			
			
			
			
			
			
			 <?php if (mysql_num_rows($resultPeriodQuery)> 0){
					 	while($rowPeriod = mysql_fetch_array($resultPeriodQuery)){ 
					 
					 			$periodLogin = $rowPeriod['logintime'];
					 			$periodLogout = $rowPeriod['logouttime'];
					 			
					 			$periodLogins = new DateTime($periodLogin);
					 			$periodLogouts = new DateTime($periodLogout);
					 			$periodTotalTime = $periodLogins->diff($periodLogouts);
					 			
					 			$periodDiffTime = $periodTotalTime->h.":".$periodTotalTime->i.":".$periodTotalTime->s;
					 			
			 	
			 	?>
			 				<tr>
								 <td><?php echo $rowPeriod['empid'];?></td> 
								 <td><?php echo $rowPeriod['date'];?></td> 
								 <td><?php echo $rowPeriod['logintime'];?></td> 
								 <td><?php echo $rowPeriod['logouttime'];?></td>
								 <td><?php echo $periodDiffTime; ?></td> 
							</tr>
							  
								 <?php } 
								 
								 
			 	}else{
			 	
			 			if(!isset($noFound)){?>
			 		<tr><td style="color: red;" colspan="5">No Records to display</td></tr>
			 		<?php }else{?>
			 		
			 			<td colspan = '5' style='font-size: 14px;color:Red;'> <?php echo $noFound; ?> </td>
			 	<?php
			 		}
			 		}?>
			 	
			 	
			 	
			</tbody>
		  </table>
						
							
  
						
					</div>
										   <div>
        <ul class="pagination pull-right" >
        
        <!--
        
        	pagnation reference
        	
        	  
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
            
            
            -->
            <?php 
            
            	for($i = 1;$i <= $pageCountPeriod; $i++){
            		?>  <li><a href="AdminAttendanceRecord.php?class=1&page=<?php echo $i;?>"><?php  echo $i; ?></a></li> <?php 
            	}
            
            ?>
            
            
        </ul>
    </div>
									
							</div>
						</div>
						
						
						
						
						<!-- 
						
						
						date wise
						
						
						
						 -->
						
						
						
						<div class="tab-pane" id="Snapshot">
							<div class="container" style="margin-bottom:100px">	
									<center  style="margin-bottom:50px"><strong><h3 style="    font-weight: 700;">Snapshot</h3></b></strong></center>
									 <center><?php 
	


	

		if(isset($_GET['msg'])){
			
			$msg = $_GET['msg'];
			$httphost = $_SERVER['HTTP_HOST'];
			$link = "http://$httphost/"."popup.php?msg=$msg";
			//echo "<script>window.open('$link','popup','width=400,height=200,scrollbar=yes' );</script>";
			//echo "<script>window.open('$link')</script>";
			?>
			<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center class="message"> <label style="font-size: 14px;color:Red;"><?php echo $msg;?></label></center> 
  </div>
		 <?php	
		}?></center>
		 <center><?php 
	
	

		if(isset($_GET['msg1'])){
			
			$msg1 = $_GET['msg1'];
			$httphost = $_SERVER['HTTP_HOST'];
			$link = "http://$httphost/"."popup.php?msg=$msg";
			//echo "<script>window.open('$link','popup','width=400,height=200,scrollbar=yes' );</script>";
			//echo "<script>window.open('$link')</script>";
			?>
		<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center class="message"> <label style="font-size: 14px;color:green;"><?php echo $msg1;?></label></center>
  </div>
		 <?php	
		}?></center>
	
			
			
							<?php

							
							
							
							
							
							
							
							
							/*
							 * reteriving orders according search or whole
							 */
							$snappageNumber = intval($_GET['page']);
							
							
							if($snappageNumber == null or $snappageNumber == '1'){
								$snappageNumber = 0;
							}else{
								$snappageNumber = ($snappageNumber*5)-5;
							}
							
							$snapquery = "SELECT * FROM AddUser WHERE code='$companyCode' LIMIT $snappageNumber,5";
							if(isset($_POST['snapsearch'])){

$search_term = htmlspecialchars($_POST['snapsearch_box']);



$snapquery = "SELECT * FROM AddUser WHERE code='$companyCode' AND UserId='$search_term' LIMIT $snappageNumber,5";

$snapcheckQuery= mysql_query($snapquery);
if(mysql_num_rows($snapcheckQuery) <= 0){
	$noFound= "No records to display";
}else{
	$noFound = "";
}

	
}


							if(isset($_POST['snapreset'])){





$snapquery = "SELECT * FROM AddUser WHERE code='$companyCode' LIMIT $snappageNumber,5";


}




$snapresultQuery = mysql_query($snapquery);




								/*
								 *page number counts 
								 */


							$snappagesTotalCount = "SELECT * FROM AddUser WHERE code='$companyCode' LIMIT $snappageNumber,5";

							$snapresultPagesTotalCount = mysql_query($snappagesTotalCount);
							$snappages = mysql_num_rows($snapresultPagesTotalCount);

							if(isset($_POST['snapsearch'])){
								$snappages = mysql_num_rows($snapresultQuery);
							}
							
							$snappageCount = floatval($snappages/5);
							$snappageCount = ceil($snappageCount);


							?>

							
							 <form name="search_form" method="POST" style="margin-top:10px;" action="AdminAttendanceRecord.php?class=2">
							 <div class="container">
								<div class="row">
								
								   <div class="col-md-4">
<input type="text" name="snapsearch_box" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required" class="form-control input-sm" maxlength="10" placeholder="Enter user id" />
</div>
							<div style="width: 12.666667%;" class="col-md-2">
							 <button type="submit"  name="snapsearch" style="width:100px;" class="btn btn-default">Search</button>							</div></form><form name="search_form" method="POST"  action="AdminAttendanceRecord.php?class=2">
							<div style="width: 12.666667%;" class="col-md-2">
							 <button type="submit" name="snapreset"  style="width:100px;" class="btn btn-default">Reset</button>
							</div>
							</div>
							</div>
							 </form>
							 <div class="table-responsive" style="margin-top:30px;">
							 <table class="table table-striped"  id="someid">
							
			<thead>
			  <tr>
			  					 <th ><strong>User id</strong></th>
			  					 <th ><strong>User name</strong></th>
								 <th><strong>Status</strong> </th>
								 </tr>
			</thead>
			<tbody>
			
			
			
			
			 <?php
			 
			 	if(mysql_num_rows($snapresultQuery)> 0){
			 		while($snaprow = mysql_fetch_array($snapresultQuery)){ ?>
							<tr>
								 <td><?php echo $snaprow['UserId'];?></td> 
								 <td><?php echo $snaprow['UserName'];?></td> 
								 <td><?php echo $snaprow['status'];?></td>
							</tr>
							  
								 <?php } 
								 
			 	}else{
			 		echo  "<tr><td colspan='3' style='color: red;'>No Records to display</td></tr>";
			 	}
								 ?>
			</tbody>
		  </table>
						
							
  
						
					</div>
										   <div>
        <ul class="pagination pull-right" >
        
        <!--
        
        	pagnation reference
        	
        	  
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
            
            
            -->
            <?php 
            
            	for($i = 1;$i <= $pageCount; $i++){
            		?>  <li><a href="AdminAttendanceRecord.php?class=2&page=<?php echo $i;?>"><?php  echo $i; ?></a></li> <?php 
            	}
            
            ?>
            
            
        </ul>
    </div>
									
							</div>
						</div>
					</div>
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
<script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1,
		startDate:new Date() 
    });
	$('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });

</script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy MM dd- hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "today",
        minuteStep: 10
		minDate: 0
    });
	
</script> 
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy MM dd- hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "",
        minuteStep: 10
		minDate: 0
    });
    </script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy MM dd- hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "",
        minuteStep: 10
		minDate: 0
    });
    </script>
 <script type="text/javascript" src="js/moment.js"></script>
      <script type="text/javascript" src="js/daterangepicker.js"></script>
      	   <script type="text/javascript">

		function getDateValues(){

				var dateRages = document.getElementById("rangez").innerText;
				document.getElementById("dates").value = dateRages;
		}

      	   
$(function() {

    function cb(start, end) {
   
        $('#reportrange span').html(start.format('YYYY-MM-D') + ' - ' + end.format('YYYY-MM-D'));
        
    }

    
    cb(moment().subtract(29, 'days'), moment());

    $('#reportrange').daterangepicker({
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

});
</script>

<?php 

		if(isset($_GET['class'])){
			$class = htmlspecialchars($_GET['class']); ?>
			echo "<script> jQuery(function(){   jQuery('#datesTabs  a:eq(<?php echo "$class"; ?>)').tab('show') });</script>";
	<?php	}
		
?>

</body>
</html>