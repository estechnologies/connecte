<?php 
        session_start();
                                    
                                    	if(!isset($_SESSION['company']['username'])){
                                    		header("Location:index.php");
                                    	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Add User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/jquery-2.1.4.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
   
  <!-- Custom CSS -->
     <link href="css/index.css" rel="stylesheet">
     <link href="css/main.css" rel="stylesheet">
    
  <style>
  .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
    cursor: not-allowed;
    filter: alpha(opacity=65);
      background-color: #073A65;
    border-color: #073A65;
    color:white;
    -webkit-box-shadow: none;
    box-shadow: none;
    opacity: .65;
}
  .btn.disabled:hover, .btn[disabled]:hover, fieldset[disabled] .btn:hover {
    cursor: not-allowed;
    filter: alpha(opacity=65);
      background-color:white ;
    border-color: #073A65;
    color:#073A65;
    -webkit-box-shadow: none;
    box-shadow: none;
    opacity: .65;
}
  	th {
    white-space: nowrap;
}
	td {
    white-space: nowrap;
}
  .datetimepicker {
  left: 425px; z-index: 1010; display: none; top: 375px; margin-top: 81px;
    padding: 4px;

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    direction: ltr;
}

@media (max-width:1500px) {

}
@media (max-width:990px) {
}
@media (max-width:668px) {} 
</style>
<script>

function checkPasswords(){

										var password1 = $("#password").val();
										var password2 = $("#confirm-password").val();

										if(password1 != password2){
											document.getElementById("msgPassword").innerHTML = "Password and Confirm Passwords must be same."; document.getElementById("password").style.borderColor = "#E34234";
            document.getElementById("confirm-password").style.borderColor = "#E34234";
											document.getElementById("login-submit").disabled = true;
											
										}else{
											document.getElementById("msgPassword").innerHTML = "";
											document.getElementById("login-submit").disabled = false;
											 document.getElementById("password").style.borderColor = "#ccc";
            document.getElementById("confirm-password").style.borderColor = "#ccc";
										}

									}

/*
 * checks the photo validations
 */
function validate1(fileId)
{

var extensions = new Array("jpg","jpeg","gif","png","tiff");

/*
 Alternative way to create the array

var extensions = new Array();

extensions[1] = "jpg";
extensions[0] = "jpeg";
extensions[2] = "gif";
extensions[3] = "png";
extensions[4] = "tiff";
*/

var image_file = document.getElementById(fileId).value;

var image_length = image_file.length;
var pos = image_file.lastIndexOf('.') + 1;

var ext = image_file.substring(pos, image_length);

var final_ext = ext.toLowerCase();
var valid  = false;
for (i = 0; i < extensions.length; i++)
{
    if(extensions[i] == final_ext)
    {
    	valid = true;
    }
}
if(!valid){
	document.getElementById("msgsphoto").innerHTML="You must upload an image file with one of the following extensions: "+ extensions.join(', ') +".";
}else{document.getElementById("msgsphoto").innerHTML="";}
}


 function validate(){
    var remember = document.getElementById('ApprovedBy');
    if (remember.checked){
        document.getElementById('Approving').style.display='inline';
    }else{
       document.getElementById('Approving').style.display='none';
  document.getElementById('Approvinguser').style.display='none';
    }
}
 function validateapproveruser(){
    var remember = document.getElementById('radios-1');
    if (remember.checked){
        document.getElementById('Approvinguser').style.display='inline';
    }
    
}    
   function validateapproveruserhid(){{
       document.getElementById('Approvinguser').style.display='none';
    }
}

/*
 * checks the user id
 */
 function checkUserId(){

		var  userId = $('#UserId').val();

		$.post('checkUsers.php',{userid:userId},function(data){
				if(data == ''){
						$("#msgsUserId").html(data);
						document.getElementById("login-submit").disabled = false;
				}else{
					$("#msgsUserId").html(data);
					document.getElementById("login-submit").disabled = true;
                    
				}
		});
		

 }

/*
 * checks the user email
 */

 function checkUserEmail(){
			var userEmail = $('#email1').val();

			$.post('checkUsers.php',{email:userEmail},function(data){
						if(data == ''){
								$("#msgsUserEmail").html(data);
								document.getElementById("login-submit").disabled = false;
						}else{
							$("#msgsUserEmail").html(data);
							document.getElementById("login-submit").disabled = true;
						}
			});
 }


 

/**
 * checks the user
 */

$(document).ready(function(){
	var numberOfUsers = "<?php echo $_SESSION['company']['numberUsers']; ?>";
	var companyCode = "<?php echo $_SESSION['company']['code']; ?>";
	
	
	var submitButt = $("#login-submit");
	
	 
	$.post("checkCreateUserValid.php",{numberUsers:numberOfUsers,companyCode:companyCode},function(data){
			
			if(data == 'restrict'){
				document.getElementById("login-submit").disabled = true;
				document.getElementById("errorMsg").innerHTML = "Your have exceeded the limit to add users. Please contact connect employee Team.";
			}else if(data == 'ok'){
				document.getElementById("login-submit").disabled = false;
				document.getElementById("errorMsg").innerHTML = "";
			}
	});
    
    /*
    *   if employee id not found submit will disable
    */
    
    $("#ApprovingEmployeeId").focusout(function(){
        var emps = $("#ApprovingEmployeeId").val();
        $.post("checkApproveEmpId.php",{empId:emps,code:companyCode},function(data){
     
            if(data == 0){
                document.getElementById("login-submit").disabled = true;
                document.getElementById("msgApprove").innerHTML = "Entered user id does not exist. Try another one.";
            }else{
                document.getElementById("login-submit").disabled = false;
                document.getElementById("msgApprove").innerHTML = "";
            }
        });
    });
});

 
</script>
  </head>
  <body onload="checkUsers()">

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
	<div class="container" id="mainborder" style="margin-top:30px;margin-bottom:100px;">
<div class="col-md-3">
</div>

<div class="col-md-6">
    <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Add User</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
  <center>
  
  <center class="message"> <label id ="errorMsg" style="font-size: 14px;color:Red;"></label></center> 
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
  <center class="message"> <label id ="errorMsg" style="font-size: 14px;color:Red;"><?php echo $msg;?></label></center> 
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
<form id="Employee-form" action="createUserLoginBack.php" method="POST" role="form" style="display: block;" enctype="multipart/form-data">
			
 									<center> <p style="color:red" id="msgsUserId"></p></center>
									<label for="UserId">User Id*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                         <input type="hidden" name="companycode" id="companycode" value="<?php echo $_SESSION['company']['code']; ?>" >
                                       <input  type="text"   id="UserId" name="UserId" oninvalid="InvalidMsgError(this);" onfocusout="checkUserId()" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter user id" maxlength="10"  class="form-control" />
                                  </div>
                                  		 <label for="Salutation">Salutation*</label>
  <div style="margin-bottom: 12px" class="input-group">
									 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                         <select id="Salutation" name="Salutation"  class="form-control" required="required" value="">
								<option value="" disabled selected hidden>Select Salutation</option>
								<option style="color:black;"value="Mr">Mr</option>
								<option style="color:black;"value="Miss">Miss</option>
								<option style="color:black;" value="Mrs">Mrs</option>
							</select>
                                        </div>
								  <label for="User Name">Name*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <input  type="text"  id="UserName" name="UserName" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter user name" maxlength="50"  class="form-control" />
                                  </div> 
 <center>  <p style="color:red;font-size:15px" id="msgPassword"></p></center>
								   <label for="password">Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="password" minlength="6" maxlength="20" name="password1" id="password" required="required" onpaste="return false;" tabindex="2" class="form-control"  oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this);"  placeholder="Enter password">

  </div>
   <label for="password">Confirm Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" minlength="6" maxlength="20" name="password2" id="confirm-password" onpaste="return false;" required="required" tabindex="2" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this);" class="form-control"  onfocusout="checkPasswords()" placeholder="Re-enter password">
  </div>
   <label for="Access">Access*</label>
                                  <div style="margin-bottom: 12px">
    <label class="checkbox-inline" for="Access-0">
      <input type="checkbox" name="ViewLogs" id="ViewLogs" value="1">
      View Logs
    </label>
    <label class="checkbox-inline" for="Access-1">
      <input type="checkbox" name="ApplyLeaves" id="ApplyLeaves" value="1">
      Apply Leaves
    </label>
    <label class="checkbox-inline" for="Access-2">
      <input type="checkbox" name="ApproveLeaves" id="ApproveLeaves" value="1">
      Approve Leaves
    </label>
    <label class="checkbox-inline" for="Access-3">
      <input type="checkbox" name="ApprovedBy" id="ApprovedBy" onclick="validate()" value="1">
      Approved By
    </label>
  </div>
  <div id="Approving" style="display:none;">
  <div style="margin-bottom: 12px">
     <label class="radio-inline" for="radios-0">
      <input type="radio" name="approvings" id="radios-0" value="admin" onclick="validateapproveruserhid()">
      Admin
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="approvings" id="radios-1" onclick="validateapproveruser()" value="user">
      User
    </label> 
    </div>
									
                                    </div>
                                      <div id="Approvinguser" style="display:none;">
                                       <center> <p style="color:red" id="msgApprove"></p></center>
									<label for="EmployeeId">Approver User id*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                               
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <input  type="text"   id="ApprovingEmployeeId" name="ApprovingEmployeeId"  placeholder="Enter Employee id" maxlength="10"  class="form-control" />
                                  </div>
                                  </div><center> <p style="color:red" id="msgdatebirth"></p></center>
								  	 <label for="DateofBirth">Date of Birth*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgdate(this);"  oninput="InvalidMsgdate(this);" required="required" placeholder="Select date of birth" name="date_of_birth" id="date_of_birth"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
                                    </div>
								   <label for="Joiningdate">Joining date*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control"  type="text" oninvalid="InvalidMsgjoin(this);"  oninput="InvalidMsgjoin(this);"  onfocus="datevalidatefuction()"  required="required" placeholder="Select date of joining" name="Joiningdate" id="Joiningdate"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
                                    </div>
                                    <center> <p style="color:red" id="msgsUserEmail"></p></center>
							<label for="email">Email address*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input  name= "email1" id="email1" maxlength="50" onfocusout="checkUserEmail()" class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="InvalidMsgEmail(this);"  oninput="InvalidMsgEmail(this); " type="text" class="form-control"  value="" placeholder="Enter email address">                                     
  </div>
	<label for="Mobilenumber">Mobile Number*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
             <input type="text" name="number" id="number" tabindex="1" oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" class="form-control" pattern="[0-9]{10}" placeholder="Enter mobile number" value="">                                       
  </div>	
									 <label for="ContactPerson">Pan card Number*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                        <input maxlength="10" type="text" id="pancard_number" name="pancard_number"  pattern="[A-Z]{3}[P]{1}[A-Z]{1}[0-9]{4}[A-Z]{1}" required="required"  oninvalid="InvalidMsgpan(this);"  oninput="InvalidMsgpan(this);" placeholder="Enter permanent account number" class="form-control"/>
                                    </div>
										<label for="Designation">Designation*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <input  type="text"   id="Designation" name="Designation" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter Designation" maxlength="50"  class="form-control" />
                                  </div>
                                  <center> <p style="color:red" id="msgsphoto"></p></center>
                                   <label for="EmployeePhoto">Employee Photo</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                        <input id="Employeephoto" name="Employeephoto" onfocusout="validate1('Employeephoto')" class="input-file form-control" type="file">
							</input>
                                    </div>
								  <label for="ProjectName">Project Name*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <input  type="text"  id="ProjectName" name="ProjectName" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter Project Name" maxlength="50"  class="form-control" />
                                  </div>
                                
                                    <center><button type="submit" name="login-submit" id="login-submit"  class="btn btn-default">Add</button></center>
                                   
                                    </div>
                                    
  
  

</form>
  </div>
</div>
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
   <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1,
		startDate:new Date() 
    });
	$('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });

</script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy MM dd- hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "today",
        minuteStep: 10
		minDate: 0
    });
	
</script> 
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy MM dd- hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "",
        minuteStep: 10
		minDate: 0
    });
    </script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy MM dd- hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "",
        minuteStep: 10
		minDate: 0
    });
   
    </script>
    <script>
function datevalidatefuction() {
 document.getElementById("date_of_birth").setAttribute("required","required");
var x = document.getElementById("date_of_birth").value;
    
   var year = x.slice(0,4);
   var birthyear = parseInt(year);
   var date = new Date();
   var presentYear = date.getFullYear();
   presentYear = parseInt(presentYear);
var age = presentYear - birthyear;
  var y = document.getElementById("msgdatebirth");
   if(age  < 18){
    y.innerHTML= "User age should be above 18 years";
document.getElementById("login-submit").disabled = true;
}else{ y.innerHTML= "";
document.getElementById("login-submit").disabled = false;}
   
}
</script>

</body>
</html>