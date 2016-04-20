<?php 
        session_start();
                                    
                                    	if(!isset($_SESSION['user']['UserId'])){
                                    		header("Location:index.php");
                                    	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>User Reset Password</title>
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
}
	td {
    white-space: nowrap;
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
<div class="main" id="mainborder" style="margin-bottom:65px;">
 <div class="container" >
		 	<div class="col-md-3 ">
		 	</div>
	<div class="col-md-6 ">
       <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Employee Reset Password</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
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
   <form id="Employee-form" action="resetPasswordUserBack.php" method="POST" role="form" >
   		                            
   <label for="EmployeeId">Employee Id*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="EmployeeId" Readonly oninvalid="InvalidMsgError(this);" value="<?php echo $_SESSION['user']['UserId']; ?>" required="required" oninput="InvalidMsgError(this); " id="EmployeeId" maxlength="50" class="form-control" placeholder="Enter Employee Id" >         
                                    </div>
														<label for="password">Current Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="password" minlength="6" maxlength="20" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); " name="oldPassword" id="password" tabindex="2" class="form-control" onpaste="return false;"  placeholder="Enter current password">			
	 </div>	
								
							 <label for="password">New Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="password" minlength="6" maxlength="20" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); " name="password1" id="password" tabindex="2" class="form-control" onpaste="return false;" placeholder="Enter new password">

  </div>
   <label for="password">Confirm New Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" minlength="6" maxlength="20" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); " name="password2" id="password" tabindex="2" class="form-control" onpaste="return false;" placeholder="Re-enter new password">
  </div>
 
   
<center><button style="margin-bottom: 12px;width:100px;" type="submit"  name="login-submit" id="login-submit" class="btn btn-default">Reset</button></center>
									
 </div>
</form>
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
</body>
</html>
</body>
</html>