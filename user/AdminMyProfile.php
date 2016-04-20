<?php 
	session_start();

	if(!isset($_SESSION['company']['username'])){
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Admin Profile -<?php echo $_SESSION['company']['personname']; ?> </title>
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
<div class="main" id="mainborder" style="margin-top:9px;margin-bottom:19px;">
<div class="container">
<table class="table table-striped table-bordered table-hover table-condensed">
<thead>
  <tr>
    	<th colspan="2">My Profile</th>
    </tr>
</thead>
    <tbody>
  
      <tr>
        <td>Company code</td>
       	<td><?php echo $_SESSION['company']['code']; ?></td>
       </tr>
       <tr>
        <td>Company name</td>
     	<td><?php echo $_SESSION['company']['name']; ?></td>
       </tr>
       <tr>
        <td>Company address</td>
       	<td><?php echo $_SESSION['company']['address']; ?></td>
       </tr>
     <tr>
        <td>Company phone number</td>
     	 	<td> <?php echo $_SESSION['company']['number']; ?></td>
       </tr>
       <tr>
        <td>Contact person name</td>
        	<td> <?php echo $_SESSION['company']['personname']; ?></td>
       </tr>
          <tr>
        <td>Contact person email address</td>
        	<td><?php echo $_SESSION['company']['personemail']; ?> </td>
       </tr>
       <tr>
        <td>Contact person mobile number</td>
     	 	<td><?php echo $_SESSION['company']['personnumber']; ?> </td>
       </tr>
       <tr>
        <td>No of users</td>
       	 	<td><?php echo $_SESSION['company']['numberUsers']; ?> </td>
       </tr>
        <tr>
        <td>Access End Date</td>
       	<td> <?php echo $_SESSION['company']['accessyear']; ?></td>
       </tr>
        <tr>
        <td>Admin username</td>
       	<td> <?php echo $_SESSION['company']['username']; ?></td>
       </tr>
       
    </tbody>
  </table>
  <p style="">Please contact Connect Employee support team <span style="color:blue;text-decoration:underline;">support@connectemployee.com</span> for any changes in the above information.</p>
</div>	
</div>
 <footer style="margin-bottom:0px" class="navbar footerbottom">

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