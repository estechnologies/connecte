<?php 
	session_start();

	if(!isset($_SESSION['user']['UserId'])){
		header("Location:index.php");
	}else if($_SESSION['user']['ViewLogs'] != '1'){
		header("Location:UserHome.php");
	}
	
	

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title>User Log Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
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
  <li class="headerlinks"  ><a style=""  href="UserHome.php" ><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></li>

      <li class="headerlinks"  ><a style=""  href="UserMyProfile.php" ><span  class="glyphicon glyphicon-user"></span> &nbsp My Profile</a></li>
       <?php if($_SESSION['user']['ViewLogs'] == '1'){?>
        <li class="headerlinks"  ><a style=""  href="UserLogBook.php" ><span  class="glyphicon glyphicon-book"></span> &nbsp Log Book</a></li>
          <?php }?>
          <li class="headerlinks"  ><a style=""  href="UserLeaves.php" ><span  class="glyphicon glyphicon-list-alt"></span> &nbsp Leaves</a></li>
     <li class="dropdown headerlinks navbar-right">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="width: 193px;"  ><span  class="glyphicon glyphicon-user"></span> &nbsp My Account <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a style=""  href="UserResetPassword.php" ><span class="glyphicon glyphicon-refresh"></span> &nbsp Reset Password</a></li>
        <li class="headerlinks_drops"><a href="UserLogout.php" ><span class="glyphicon glyphicon-log-out"></span>  &nbsp Logout</a></li>                       
      </ul>
    </li>
  </ul>
    </div>
</nav>
<div class="container" id="mainborder" style="margin-top:30px;margin-bottom:100px;">
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

							// databases
							require 'connect.php';
							
							$database = new connect();
							
							$companyCode = $_SESSION['user']['code'];
							
							
							$userId = $_SESSION['user']['UserId'];
							
							
							
							
							/*
							 * reteriving orders according search or whole
							 */
							$pageNumber = intval($_GET['page']);
							
							
							if($pageNumber == null or $pageNumber == '1'){
								$pageNumber = 0;
							}else{
								$pageNumber = ($pageNumber*5)-5;
							}
							
							$query = "SELECT * FROM empLogins  WHERE empid='$userId' AND companyCode='$companyCode' ORDER BY id DESC LIMIT $pageNumber,5 ";
							if(isset($_POST['search'])){

$search_term = htmlspecialchars($_POST['dateranges']);


$periodEnd = substr($search_term,12)." 23:59:59";
$periodStart = substr($search_term, 0,10)." 00:00:00";

$query = "SELECT * FROM empLogins   WHERE empid='$userId' AND logintime BETWEEN '$periodStart' AND '$periodEnd' LIMIT $pageNumber,5";

$checkQuery= mysql_query($query);
if(mysql_num_rows($checkQuery) <= 0){
	$noFound= "No Records found in our database.";
}else{
	$noFound = "";
}

	
}


							if(isset($_POST['reset'])){





$query = "SELECT * FROM empLogins  WHERE empid='$userId' AND companyCode='$companyCode' ORDER BY id DESC LIMIT $pageNumber,5 ";


}




$resultQuery = mysql_query($query);




								/*
								 *page number counts 
								 */


							$pagesTotalCount = "SELECT * FROM empLogins  WHERE empid='$userId' AND companyCode='$companyCode'";

							$resultPagesTotalCount = mysql_query($pagesTotalCount);
							$pages = mysql_num_rows($resultPagesTotalCount);

							if(isset($_POST['search'])){
								$pages = mysql_num_rows($resultQuery);
							}
							
							$pageCount = floatval($pages/5);
							$pageCount = ceil($pageCount);


							?>

							
							 <form name="search_form" method="POST" style="margin-top:10px;" action="UserLogBook.php">
							 	   
	   <center><h3 style="margin-bottom:30px;font-weight: 700;">Attendance Details</h3></center>
							 
							 <div class="container">
								<div class="row">
								
								   <div class="col-md-6">
<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; border-radius: 4px; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
    <span id="ranges"><?php if(isset($search_term)){ echo $search_term; } ?></span><b class="caret"></b>
    <input type="hidden" name="dateranges" id="dateranges" />
</div>
</div>
							<div style="width: 12.666667%;" class="col-md-2">
							 <button type="submit"  name="search" onclick="getDateValues()" style="width:100px;" class="btn btn-default">Search</button>							</div></form><form name="search_form" method="POST"  action="UserLogBook.php">
							<div style="width: 12.666667%;" class="col-md-2">
							 <button type="submit" name="reset"  style="width:100px;" class="btn btn-default">Reset</button>
							</div>
							</div>
							</div>
							 </form>
							 <div class="table-responsive" style="margin-top:30px;">
							 <table class="table table-striped"  id="someid">
							
			<thead>
			  <tr>
			  					 <th ><strong>Employee Id</strong></th>
			  					 <th ><strong>Status Date</strong></th>
								 <th ><strong>Login Time</strong></th> 
								 <th><strong>Logout Time</strong> </th>
								
								  <th><strong>On System Time</strong> </th>
								 </tr>
			</thead>
			<tbody>
			
			
			
			
			 <?php
			 	
			 if(mysql_num_rows($resultQuery)> 0){
			 while($row = mysql_fetch_array($resultQuery)){ ?>
							<tr>
							
								 <td><?php echo $row['empid'];?></td> 
								 <?php 
								 	
								 $updatedDate = $row['date'];
								 $updateDateformat = new DateTime($updatedDate);
								 $format = $updateDateformat->format('Y-m-d'); 
								 
								 	$login = $row['logintime'];
								 	$logout = $row['logouttime'];
								 	
								 	$startTime = new DateTime($login);
								 	$endTime = new DateTime($logout);
								 	
								 	$difference = $startTime->diff($endTime);
								 	
								 	$differenceTime = $difference->h.":".$difference->i.":".$difference->s;
								 	?>
								 <td><?php echo $format; ?></td>
								 <td><?php echo $login; ?></td> 
								 <td><?php echo $logout;?></td>
								 <td><?php echo $differenceTime; ?></td> 
								 
							</tr>
							  
								 <?php } 
								 
			 }else{
			 	if(isset($noFound)){
			 		echo "<td colspan='5'; style='font-size: 14px;color:Red;'>$noFound</td> ";
			 	}else{
			 		echo "<td colspan='5'; style='font-size: 14px;color:Red;'>No Records to display</td> ";
			 	}
			 }
								 ?>
			</tbody>
		  </table>
						
							
  
						
					</div>
										   <div>
        <ul class="pagination pull-right" >
        

            <?php 
            
            	for($i = 1;$i <= $pageCount; $i++){
            		?>  <li><a href="UserLogBook.php?page=<?php echo $i;?>"><?php  echo $i; ?></a></li> <?php 
            	}
            
            ?>
            
            
        </ul>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/moment.js"></script>
      <script type="text/javascript" src="js/daterangepicker.js"></script>
      	  <script type="text/javascript">
              
              function getDateValues(){
                  var getRanges = document.getElementById("ranges").innerText;
                  document.getElementById("dateranges").value= getRanges;
              }
              
              
$(function() {

    function cb(start, end) {
        $('#reportrange span').html(start.format('YYYY-MM-D') + ' - ' + end.format('YYYY-MM-D'));
        
        //var hello = start.format('YYYY-MM-D');
        //alert(hello);
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
</body>
</html>
</body>
</html>
</html>
