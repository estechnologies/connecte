<!DOCTYPE html>
<html lang="en">
<head>
 <title>Recruiter Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Custom CSS -->
<link href="css/index.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet" />
 <style>
   .datetimepicker {
  left: 425px; z-index: 1059; display: none; top: 375px; margin-top:103px;
    padding: 4px;
 
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    direction: ltr;
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
  <li class="headerlinks"  ><a style=""  href="RecruiterHome.php" ><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></li>
  <li class="dropdown headerlinks">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="width: 193px;"  ><center><i class="fa fa-users"></i> &nbsp  Post a job  <span class="caret"></span></center></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a style=""  href="RecruiterJobPost.php" ><i class="fa fa-share-square-o"></i> &nbsp Post Job</a></li>
        <li class="headerlinks_drops"><a href="RecruiterViewPosting.php" ><i class="fa fa-eye"></i>  &nbsp View Posting</a></li> 
         <li class="headerlinks_drops"><a href="RecruiterEditPosting.php" ><i class="fa fa-pencil-square-o"></i>  &nbsp Edit Job Postings</a></li>                    
      </ul>
    </li>

      <li class="headerlinks"  ><a style=""  href="UserMyProfile.php" ><i class="fa fa-search"></i> &nbsp Resume search</a></li>
     
        <li class="headerlinks"  ><a style=""  href="UserLeaves.php" ><i class="fa fa-history"></i> &nbsp History</a></li>	
     <li class="dropdown headerlinks navbar-right">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="width: 193px;"  ><span  class="glyphicon glyphicon-user"></span> &nbsp My Account <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a style=""  href="RecruiterResetPassword.php" ><span class="glyphicon glyphicon-refresh"></span> &nbsp Reset Password</a></li>
        <li class="headerlinks_drops"><a href="RecruiterLogout.php" ><span class="glyphicon glyphicon-log-out"></span>  &nbsp Logout</a></li>                       
      </ul>
    </li>
  </ul>
    </div>
</nav>

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