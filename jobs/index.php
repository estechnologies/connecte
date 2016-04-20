<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobs Connect Employee </title>

  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/Sign_In.css" rel="stylesheet" />
<style>
body {
 background-image: url(images/slider/bg1.jpg);
    background-repeat: no-repeat;
background-size: 100% 100%;
height:100%;
}
.navbar-fixed-bottom {
    bottom: 0;
    margin-bottom: 0;
    border-width: 1px 0 0;
    border-width: thick;
}
.headeractive a{color:gray;font-size:16px;}
.headeractive a.active{color:black;font-weight: 700;font-size:16px;}
</style>
  <script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>	
	<script>
	$(function() {

    $('#Candidate-form-link').click(function(e) {
		$("#Candidate-form").delay(100).fadeIn(100);
 		$("#Recruiters-form").fadeOut(100);
		$('#Recruiters-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#Recruiters-form-link').click(function(e) {
		$("#Recruiters-form").delay(100).fadeIn(100);
 		$("#Candidate-form").fadeOut(100);
		$('#Candidate-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>
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
<div class="bg">
<div class="container">
<div class="transparent" >
								<div class="col-md-4 arrange" style="">
									<div class="tuyin first">	
										<div class="panel-heading">
											<div class="row">
												<div class="col-xs-6 headeractive">
													<a href="#" class="active" id="Candidate-form-link"><b>Candidate</b></a>
												</div>
												<div class="col-xs-6 headeractive">
													<a href="#" id="Recruiters-form-link"><b>Recruiters</b></a>
												</div>
											</div>
											<hr style="margin-top:5px;margin-bottom:10px;">
										</div>
				
							
										
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-12">
													<form id="Candidate-form" action="userLogin.php" method="post" role="form" style="display: block;">
														<div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input name="email" id="email" maxlength="50"  class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="InvalidMsgEmail(this);"  oninput="InvalidMsgEmail(this); " type="text" class="form-control"  value="" placeholder="Enter Email Address">
                        </div>
                        </div>
                        <div class="form-group" style="margin-top:12px">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="password1" id="password1" minlength="6" maxlength="20"= required="required" onpaste="return false;" tabindex="2" class="form-control"  oninvalid="InvalidMsgfill(this);"  oninput="InvalidMsgfill(this);" placeholder="Enter password">                       
                             </div>
                    </div>
														 <div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<button type="submit" name="register-submit" id="register-submit" tabindex="4" style=" width: 80px;" class="form-control btn btn-register"><span class="glyphicon glyphicon-log-in"></span> &nbsp Login</button>
												</div>
											</div>
										</div>
														<div class="form-group">
															<div class="row">
																<div class="col-lg-12">
																	<div class="text-center">
																		<a href="ForgotPassword_candidate.php" tabindex="5" class="forgot-password" style="color:black;">Forgot Password?</a><hr style="margin-top:5px;margin-bottom:10px;">
																		<strong><a href="Candidate_Registration.php"  id="" style="black;font-size:18px;"><b>New user?</b></a></strong>
																	</div>
																</div>
															</div>
														</div>
													</form>
													<form id="Recruiters-form" action="recurterLogin.php" method="post" role="form" style="display: none;"><div class="form-group">
														<div class="input-group">
															<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
															</span>
															<input name="email" id="email" maxlength="50"  class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="InvalidMsgEmail(this);"  oninput="InvalidMsgEmail(this); " type="text" class="form-control"  value="" placeholder="Enter Email Address">
														</div>
														</div>
														<div class="form-group" style="margin-top:12px">
														<div class="input-group">
															<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
															<input type="password" name="password1" id="password1" minlength="6" maxlength="20"= required="required" onpaste="return false;" tabindex="2" class="form-control"  oninvalid="InvalidMsgfill(this);"  oninput="InvalidMsgfill(this);" placeholder="Enter password">                       
														</div>
														</div>
														
														<div class="form-group">
															<div class="row">
																<div class="col-sm-6 col-sm-offset-3">
																	<button type="submit" name="login-submit" id="login-submit" tabindex="4" style=" width: 80px;" class="form-control btn btn-login"><span class="glyphicon glyphicon-log-in"></span> &nbsp Login</button>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-lg-12">
																	<div class="text-center">
																		<a href="ForgotPassword_Recruiter.php" tabindex="5" class="forgot-password" style="color:black">Forgot Password?</a><hr style="margin-top:5px;margin-bottom:10px;">
																		<strong><a href="	Recruiters_Registration.php"  id="" style="color:black;font-size:18px;"><b>New user?</b></a></strong>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
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

</body>
</html>
