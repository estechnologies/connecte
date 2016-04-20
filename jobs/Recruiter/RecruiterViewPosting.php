<!DOCTYPE html>
<html lang="en">
<head>
 <title>Recruiter View Posting</title>
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

	th {
    white-space: nowrap;
}
	td {
    white-space: nowrap;
}
.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #000000;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #000;
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

<div class="container" id="mainborder" style="margin-top:30px;margin-bottom:71px;">
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
	
			

							
							 <form name="search_form" method="POST" style="margin-top:10px;" action="ViewCompany.php">
							 	   
	  <center> <strong><h3 style="font-weight: 700;margin-bottom:50px">View Posting</h3></strong></center>
							 
							 <div class="container">
								<div class="row">
								
									<div class="col-md-3">
									<div class="search">
							<input type="text" name="search_box" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required" class="form-control input-sm" maxlength="10" placeholder="Enter Posting Id" />
							 
							</div>
							</div>
							<div style="width: 12.666667%;" class="col-md-2">
							 <button type="submit"  name="search" style="width:100px;" class="btn btn-default">Search</button>							</div></form><form name="search_form" method="POST"  action="ViewCompany.php">
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
			  					 <th ><strong>Edit</strong></th> 
								 <th ><strong>Specifications Type</strong></th> 
								 <th><strong>Organization name</strong> </th> 
								   <th><strong>Department</strong></th> 
								   <th> <strong>Location</strong></th> 
								   <th ><strong>Role</strong></th> 
								 <th><strong>No. of Openings</strong> </th> 
								   <th><strong>Job Description</strong></th>
								    <th ><strong>Qualification</strong></th> 
								 <th><strong>Total Experience Required</strong> </th> 
								   <th><strong>Relevant Experience</strong></th> 
                                                                   <th><strong>Job Opening Start date</strong> </th> 
								   <th><strong>Job Opening End Date</strong></th> 
								   <th> <strong>Tentative Interview date</strong></th> 
								   <th ><strong>Salary</strong></th> 
								 <th><strong>Contact Name</strong> </th> 
								   <th><strong>Email address</strong></th>
								    <th ><strong>Mobile Number</strong></th> 
								 <th><strong>Landline Number</strong> </th> 
								 </tr>
			</thead>
			<tbody>
			
			
							<tr>
								 <td><a href="EditCompany.php?cmp=<?php echo $row['cmpId'];?>">Edit</a></td> 
								 <td><?php echo $row['code'];?></td>
								 <td><?php echo $row['name'];?></td> 
								
								 <td><?php echo $row['type'];?></td> 
								  <td><?php echo $row['address'];?></td> 
								 <td><?php echo $row['number'];?></td> 
								  <td><?php echo $row['personname'];?></td> 
								 <td><?php echo $row['personemail'];?></td>
								   <td><?php echo $row['personnumber'];?></td> 
								 <td><?php echo $row['numberUsers'];?></td> 
								  <td><?php echo $row['username'];?></td> 
								 
							</tr>
							  
								
			</tbody>
		  </table>
						
							
  
						
					</div>
										   <div>
        
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