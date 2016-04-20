<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
    <title>Candidate Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/index.css" rel="stylesheet" />	
	<link href="css/main.css" rel="stylesheet" />	
<link href="css/job.css"rel="stylesheet"/>
    <![endif]-->
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
	<div id="breadcrumb" >
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.php">Home</a></li>
				<li>Candidate Registration</li>			
			</div>		
		</div>	
	</div>
	

	<section id="Registration-page">
         <div class="container" style="margin-top:40px;margin-bottom:52px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
         <div class="panel panel-default">
  <center>   <div style="background-color:#eee;margin-bottom:10px;" class="panel-heading"><h3 class="panel-title"><strong>Candidate Registration</strong></h3> </center> 
  
  <div class="panel-body">
              
                   
                    <form id="login-form" action="php/newUserRegister.php" method="post" role="form">
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
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" name="username" id="username" maxlength="50" minlength="4" oninvalid="InvalidMsgfill(this);"  oninput="InvalidMsgfill(this);" required="required" tabindex="1" class="form-control" placeholder="Enter username" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input name="email" id="email" maxlength="50"  class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="InvalidMsgEmail(this);"  oninput="InvalidMsgEmail(this); " type="text" class="form-control"  value="" placeholder="Enter Email Address">
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                            </span>
                            <input type="text" name="number" id="number" tabindex="1" oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" class="form-control" pattern="[0-9]{10}" placeholder="Enter mobile number" value="">
                        </div>
                    </div>
                

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="password1" id="password1" minlength="6" maxlength="20"= required="required" onpaste="return false;" tabindex="2" class="form-control"  oninvalid="InvalidMsgfill(this);"  oninput="InvalidMsgfill(this);" placeholder="Enter password">                       
                             </div>
                    </div>
					<div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="passsword2" id="passsword2" minlength="6" maxlength="20" onpaste="return false;" required="required" tabindex="2" oninvalid="InvalidMsgfill(this);"  oninput="InvalidMsgfill(this);" class="form-control"  placeholder="Confirm Password ">
                        </div>
                    </div>

                </div>
                <div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
												 <center><button type="submit" name="register-submit" id="register-submit"  style="display:block" class="btn btn-default">Register Now</button></center>
										
												</div>
											</div>
										</div>
										</form>
            </div>
        </div>
    </div>
</div>
</div> 
    </section><!--/#contact-page-->
	
 <footer style="margin-bottom:0px" class="navbar navbar-fixed-bottom footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Yodhaa Business Solutions Pvt Ltd. </a></p></center>
		</div>
   </footer>
	<script src="js/jquery-2.1.1.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>
	<script src="js/validations.js"></script>
	
  </body>
</html>