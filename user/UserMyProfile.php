<?php 
        session_start();
                                    
                                    	if(!isset($_SESSION['user']['UserId'])){
                                    		header("Location:index.php");
                                    	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
 <title>User Profile</title>
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
    width:50%;
}
	td {
    white-space: nowrap;
        width:50%;
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
<div class="main" id="mainborder" style="margin-bottom:50px;">
<div class="container">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-condensed">
<thead>
  <tr>
    	<th colspan="2">My Profile</th>
    </tr>
</thead>
    <tbody>
  
      <tr>
        <td>Employee id</td>
       	<td><?php echo $_SESSION['user']['UserId'];?></td>
       </tr>
       <tr>
        <td>Salutation</td>
     	<td><?php echo $_SESSION['user']['Salutation'];?></td>
       </tr>
       <tr>
        <td>Employee Name</td>
       	<td> <?php echo $_SESSION['user']['UserName'];?></td>
       </tr>
       <tr>
        <td>Date of birth</td>
       	 	<td> <?php echo $_SESSION['user']['date_of_birth'];?></td>
       </tr>
       <tr>
        <td>Joining date</td>
     	 	<td><?php echo $_SESSION['user']['Joiningdate'];?> </td>
       </tr>
       <tr>
        <td>Email address</td>
        	<td><?php echo $_SESSION['user']['email1'];?> </td>
       </tr>
          <tr>
        <td>Mobile number</td>
        	<td><?php echo $_SESSION['user']['number'];?> </td>
       </tr>
       <tr>
        <td>Pan card number</td>
     	 	<td><?php echo $_SESSION['user']['pancard_number'];?> </td>
       </tr>
       <tr>
        <td>Designation</td>
       	 	<td><?php echo $_SESSION['user']['Designation'];?> </td>
       </tr>
        <tr>
        <td>Project Name</td>
       	<td><?php echo $_SESSION['user']['ProjectName'];?> </td>
       </tr>
        <tr>
        <td>Approver Name</td>
        <?php 
        	
        		require 'connect.php';
        		$database = new connect();
        		$companyCode = $_SESSION['user']['code'];
        		
        		$approveEmpId = $_SESSION['user']['ApprovingEmployeeId'];
        		
        		if($approveEmpId == ''){
        			
        			$approverQuery = mysql_query("SELECT * FROM company WHERE code='$companyCode'");
        			$approval = mysql_fetch_array($approverQuery);
        			$approvalName = $approval['username'];
        		}else{
        			
        			$approverQuery = mysql_query("SELECT * FROM AddUser WHERE UserId='$approveEmpId'");
        			$approval = mysql_fetch_array($approverQuery);
        			$approvalName = $approval['UserName'];
        		}
        		
        		
        ?>
       	<td><?php echo $approvalName; ?></td>
       </tr>
    </tbody>
  </table>
  <p style="">Please Contact Admin  for any changes in the above information.</p>
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