<?php


		if(isset($_GET['id'])){
					//database
					require'connect.php';
					$database = new connect();
					
				$forgotId = htmlspecialchars($_GET['id']);
				
				$forgotQuery = "SELECT * FROM forgot WHERE id='$forgotId' AND advance >= NOW()";
				$forgotResult = mysql_query($forgotQuery);
				
				if(mysql_num_rows($forgotResult) >= 1){
							$forgotRow = mysql_fetch_array($forgotResult);
							$tableName = $forgotRow['tableName'];
							$forgotId = $forgotRow['userId'];
							
			
					$colUsername ="";
					$colUserEmail = "";
					$colUserId = "";
					
					if($tableName == "AddUser"){
							$colUsername = "UserName";
							$colUserEmail = "email1";
							$colUserId = "UId";
					}else{
						$colUsername = "username";
						$colUserId = "cmpId";
						$colUserEmail = "personemail";
					}
					
					
					$tableQuery = "SELECT * FROM $tableName WHERE $colUserId='$forgotId'";
					$resultsQuery = mysql_query($tableQuery);
					
						if(mysql_num_rows($resultsQuery) >=1){
							
							$rows = mysql_fetch_array($resultsQuery);
							
						}else{
							header("Location:ForgotPassword.php?msg=Sorry No records from this id");
						}
				}else{
					header("Location:ForgotPassword.php?msg=Sorry timeout.Please try again ");
				}
		}
		
		

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Reset Password</title>
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
  <li class="headerlinks"  ><a style=""  href="index.php" ><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></li>
  </ul>
    </div>
</nav>
<div class="main" id="mainborder" style="margin-top:30px;margin-bottom:40px;">
 <div class="container" >
		 	<div class="col-md-3 ">
		 	</div>
	<div class="col-md-6 ">
       <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Reset password</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
  <center>
		
	<?php 

	

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
   <form id="Employee-form" action="userforgotPasswordBack.php" method="POST" role="form" >
   		                            
  <label style="font-size:15px;" for="Email">Email Address*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                         <input type="hidden" name="tableName" value="<?php echo $tableName;?>" >
                                        <input type="hidden" name="userId" value="<?php echo $colUserId; ?>" >
                                        <input type="hidden" name="forgotId" value="<?php echo $forgotId; ?>" >
                                        <input type="hidden" name="tableId" value="<?php echo  $id; ?>" >
                                        <input id="Email" name="email" type="text"  value ="<?php echo $rows[$colUserEmail];?>" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email Address" oninvalid="InvalidMsgEmail(this);"  oninput="InvalidMsgEmail(this); "  class="form-control input-md">                                        
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
 <footer style="margin-bottom:0px" class="navbar navbar-fixed-bottom footerbottom">

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