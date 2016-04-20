<?php 

session_start();

require 'connect.php';
$database = new connect();

if(!isset($_SESSION['user']['UserId'])){
	header("Location:index.php");
}
$userId = $_SESSION['user']['UserId'];

$companyCode = $_SESSION['user']['code'];


if(isset($_GET['leaveType'])){
	$leaveType = htmlspecialchars($_GET['leaveType']);
	$remainingLeaves = htmlspecialchars($_GET['remaining']);
}else{
	header("Location:UserLeaves.php?msg=no leave type found");
}

$approvingEmployeeId = $_SESSION['user']['ApprovingEmployeeId'];


if($approvingEmployeeId == ''){
	$companyQuery = "SELECT * FROM company WHERE code ='$companyCode'";
	$companyResult = mysql_query($companyQuery);
	
	$row = mysql_fetch_array($companyResult);
	
	$approvingEmployeeId = $row['username'];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>User Leaves</title>
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

.panel-title {
    margin-top: 0px;
    margin-bottom: 0;
    font-size: 16px;
    padding: 0px;
    color: inherit;
}
  .datetimepicker {
  left: 425px; z-index: 1010; display: none; top: 375px; margin-top: 81px;
    padding: 4px;

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    direction: ltr;
}
.ui-datepicker .ui-datepicker-title select {
    font-size: 1em;
    margin: 1px 0;
    color: black;
}
</style>
<script>


function getDaysAndCheck(){
    var start =  document.getElementById("Startdate").value;
    var end =  document.getElementById("Enddate").value;
    
    $.post("leavesDaysSpecify.php",{startDate:start,endDate:end},function(data){
        var days =  data;
        document.getElementById("days").value =  data;
         var validDays = parseInt("<?php echo $remainingLeaves; ?>");
         var days2 = parseInt(days);
        

        if(validDays < days2){
            document.getElementById("login-submit").disabled =  true;
            document.getElementById("daysmsg").innerHTML = "Enter days more than acceptance";
        }else{
            document.getElementById("login-submit").disabled =  false;
            document.getElementById("daysmsg").innerHTML = "";
        }
        
    });
}


    
    /*
    *checking remaining leaves
    */
    function checkHolidays(){
            var validDays = parseInt("<?php echo $remainingLeaves; ?>");
           var noofdays = document.getElementById("days").value;
       
        if(noofdays > validDays){
            document.getElementById("login-submit").disabled = true;
            document.getElementById("daysmsg").innerHTML = "Enter days more than acceptance";
        }else if(noofdays <= validDays){
            document.getElementById("login-submit").disabled = false;
            document.getElementById("daysmsg").innerHTML = "";
        }
    }
    
     /*
     * get Days       
     */
    function getDays(){
        var start =  document.getElementById("Startdate").value;
        var end  =  document.getElementById("Enddate").value;
    
        $.post("leavesDaysSpecify.php",{startDate:start,endDate:end},function(data){
                document.getElementById("days").value = data;
        });
    }
    
    
    
    
     function checkAlreadyApplied(){
            var startDates =  document.getElementById("Startdate").value;
            var endDates = document.getElementById("Enddate").value;
            var user = "<?php echo  $userId; ?>";
            var companyCode = "<?php echo  $companyCode;?>";
            
            
            $.post("checkAlreadyLeaveApplied.php",{startDate:startDates,endDate:endDates,userId:user,code:companyCode},function(data){
                if(data == 1){
                    document.getElementById("login-submit").disabled = true;
                    document.getElementById("msgdate").innerHTML = "Leave has been already applied for the selected dates";
                }else{
                    document.getElementById("login-submit").disabled = false;
                    document.getElementById("msgdate").innerHTML = "";
                }
            });
        }

     function checks(){
    	 checkAlreadyApplied();
    	 getDays();
    	 checkHolidays();
     }
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
<div class="container" id="mainborder" style="margin-top:50px;margin-bottom:30px;">

<div class="col-md-3">
</div>

<div class="col-md-6">
    <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Apply Leave</strong></h3>
      
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
<form id="Employee-form" action="userLeaveApplyBack.php" method="POST" role="form" style="display: block;">
			
 
								  <label for="LeaveType">Leave Type*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                                         <input type="hidden" name="code"  value="<?php echo $companyCode;?>" >
                                         <input type="hidden" name="userId" value="<?php echo  $userId;?>" >
                                         <input type="hidden" name="approverEmpId" value="<?php echo $approvingEmployeeId;?>" >
                                       <input  type="text"  id="LeaveType" name="LeaveType" Readonly oninvalid="InvalidMsgError(this);" required="required"  value="<?php echo $leaveType;?>" oninput="InvalidMsgError(this); "  placeholder="Enter Leave type" maxlength="50"  class="form-control" />
                                        </div>
                       <center> <p id="msgdate" style="font-size: 14px;color:Red;"></p> </center>          	
 
<label for="Startdate">Start date*</label>
   
  <div style="margin-bottom: 12px" id="maximumemployee" class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgsdate(this);"  oninput="InvalidMsgsdate(this);"   required="required" placeholder="Select date" name="Startdate" id="Startdate"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
	</div>	
<label for="Enddate">End date*</label>
   
  <div style="margin-bottom: 12px" id="maximumemployee" class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgsdate(this);"  oninput="InvalidMsgsdate(this);"   required="required" placeholder="Select date" name="Enddate" id="Enddate"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
	</div>	
	
<script>
        
       
    
   
    
</script>
    
    
    
 <p style="color:red;" id="daysmsg"></p>
	 <label for="days">No of days*</label>
  <div style="margin-bottom: 12px" class="input-group">
     
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="days" id="days" readonly maxlength="3" onfocusout="" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" tabindex="1" class="form-control" placeholder="Enter Leave days" value="">
	</div>	
		 <label for="subject">Subject*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text"  name="subject" id="subject" onfocus="getDaysAndCheck()" onfocusout="checkAlreadyApplied()" maxlength="50" minlength="4" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" tabindex="1" class="form-control" placeholder="Enter subject" value="">
	</div>	
	<label for="Reason">Reason*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<textarea type="text" name="Reason" id="Reason"   oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" tabindex="1" class="form-control" placeholder="Enter Reason for leave" value=""></textarea>
	</div>	
                                    <center><button type="submit" name="login-submit" id="login-submit"  class="btn btn-default">Apply Leave</button></center>
                                   
                                    </div>
                                   
                                    
  
  

</form>
  </div>
</div>
</div>	


</div>
 <footer style="margin-bottom:0px" class="navbar navbar-default footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Yodhaa Business Solutions Pvt Ltd. </a></p></center>
		</div>
   </footer>


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
		forceParse: 0,
		 autoclose: true,
        todayBtn: true,
        minDate: 0,
       startDate:new Date() 
		
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
		forceParse: 0,
		  startDate: "today",
		minDate: 0
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/validations.js"></script>
   <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
 


</script>
<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
<script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" />
</body>
</html>