<!DOCTYPE html>
<html lang="en">
<head>
 <title>Connect Employee Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Custom CSS -->
     <link href="css/index.css" rel="stylesheet">
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
	<div class="container" id="mainborder" style="margin-top:150px;margin-bottom:100px;">
<div class="col-md-3">
</div>

<div class="col-md-6">
    <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Login</strong></h3>
      
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
<form id="Employee-form" action="login.php" method="POST" role="form" style="display: block;">
			
 <label for="loginas">Login as*</label>
                            <div style="margin-bottom: 12px" class="input-group">
										 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       
                                        <select id="loginas" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); "  name="loginas" onchange="selectrow1()" class="form-control">
								<option value="" disabled selected hidden>Select user type</option>
								<option style="color:black;"value="Admin">Admin</option>
								<option style="color:black;" value="User">User</option>
							</select>
                                    </div>
									<div id="User_id" style="display:none">
			 <label for="Userid">User id*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="UserId"  id="UserId" maxlength="10" class="form-control" placeholder="Enter user id" >         
                                    </div>
									</div>
									<div id="User_name">
									 <label for="Username">Username*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="Username" id="Username" maxlength="50" minlength="4" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);"  tabindex="1" class="form-control" placeholder="Enter username" value="">
	</div></div>
 <label for="password">Password*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input  minlength="5" maxlength="20" type="password" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this); " required="required" class="form-control" onpaste="return false;" name="password" id="password" placeholder="Enter Password">
                                    </div>
                                    <center><button type="submit" name="login-submit" id="login-submit"  class="btn btn-default">Login</button></center>
                                    <div class="footer form-group" style="text-align:right">
                                      <a href="ForgotPassword.php ">Forgot password?</a>
                                      </div>
                                    </div>
                                    
  
  

</form>
  </div>
</div>
</div>
</div>
 <footer style="margin-bottom:0px" class="navbar navbar-fixed-bottom footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Yodhaa Business Solutions Pvt Ltd. </a></p></center>
		</div>
   </footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validations.js"></script>
</body>
</html>