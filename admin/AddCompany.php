<?php 
	
	session_start();

	if(!isset($_SESSION['admin']['username'])){
		header("Location:index.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Add Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/jquery-2.1.4.js"></script>
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
    $(function() {
  $('#phonenumber').on('keydown', '#CompanyPhonenumber', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
})
   $(function() {
  $('#maximumemployee').on('keydown', '#Maximumnoofemployees', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
})
    </script>
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
  <li class="headerlinks"  ><a style=""  href="Home.php" ><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></li>
  <li class="dropdown headerlinks">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="width: 247px;"><center><span class="glyphicon glyphicon-equalizer"> Company <span class="caret"></span></center></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a style=""  href="AddCompany.php" ><span class="glyphicon glyphicon-plus"></span> &nbsp Add Company</a></li>
        <li class="headerlinks_drops"><a style=""  href="ViewCompany.php" ><span class="glyphicon glyphicon-list-alt"></span> &nbsp View & Edit Companies</a></li>                       
      </ul>
    </li>
<li class="headerlinks"  ><a style=""  href="ViewContact.php" ><span class="glyphicon glyphicon-envelope"></span> &nbsp Contact Messages</a></li>
    <li class="headerlinks navbar-right"><a href="Logout.php" ><span class="glyphicon glyphicon-log-out"></span>  &nbsp Logout</a></li>
  </ul>
    </div>
</nav>
	<div class="container" id="mainborder" style="margin-top:30px;margin-bottom:100px;">
<div class="col-md-3">
</div>

<div class="col-md-6">
    <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Add Company</strong></h3>
      
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
<form id="Employee-form" action="YodhaaAdminCompanyCreateBack.php" method="POST" role="form" style="display: block;">
			
 
								  <label for="CompanyName">Company Name*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                                       <input  type="text"  id="CompanyName" name="CompanyName" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter Company name" maxlength="50"  class="form-control" />
                                        </div>
									<label for="CompanyCode">Company Code*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                                       <input  type="text"   id="CompanyCode" name="CompanyCode" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter Company code" maxlength="10"  class="form-control" />
                                  </div>
                                 			<label for="CompanyType">Company Type*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                                       <input  type="text"   id="CompanyType" name="CompanyType" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter Company type" maxlength="50"  class="form-control" />
                                  </div>
								  <label for="CompanyAddress">Company Address*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                       <textarea  type="text"  id="CompanyAddress" name="CompanyAddress" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter Company Address" maxlength="200"  class="form-control" ></textarea>
                                  </div>
                   
    <div  id="phonenumber">
	<label for="CompanyPhonenumber">Company Phone number*</label>
  <div style="margin-bottom: 12px"  class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
             <input type="text" name="CompanyPhonenumber" id="CompanyPhonenumber" minlength="9" maxlength="15" oninvalid="InvalidMsgErrorphone(this);" oninput="InvalidMsgErrorphone(this);" required="required" class="form-control" placeholder="Enter Company Phone number" value="">                                       
  </div>
</div>
                                  	 <label for="Contactpersonname">Contact Person name*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="Contactpersonname" id="Contactpersonname" maxlength="50" minlength="4" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" tabindex="1" class="form-control" placeholder="Enter Contact Person name" value="">
	</div>
	<center><p style="color: red;" id="msgEmail" name="msgEmail" ></p></center>
	<label for="ContactpersonEmailaddress">Contact Person Email address*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input  name= "ContactpersonEmailaddress" id="ContactpersonEmailaddress" maxlength="50" onfocusout="checkEmail()" class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="InvalidMsgEmail(this);"  oninput="InvalidMsgEmail(this); " type="text" class="form-control"  value="" placeholder="Enter contact person email address">                                     
  </div>
	<label for="ContactpersonMobilenumber">Contact Person Mobile number*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
             <input type="text" name="ContactpersonMobilenumber" id="ContactpersonMobilenumber" oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" class="form-control" pattern="[0-9]{10}" placeholder="Enter contact person mobile number" value="">                                       
  </div><center> <p style="color:red" id="msgnoofuser"></p></center>		
  <label for="Maximumnoofemployees">No of users*</label>
   
  <div style="margin-bottom: 12px" id="maximumemployee" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="Maximumnoofemployees" id="Maximumnoofemployees" maxlength="5" onfocusout="noofuserzero()" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this);" required="required" tabindex="1" class="form-control" placeholder="Enter maximum number of users" value="">
	</div>
	<center> <p style="color:red" id="msgaccess"></p></center>		
  <label for="AccessYear">Access End Date*</label>
   
  <div style="margin-bottom: 12px" id="maximumemployee" class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgsdate(this);"  oninput="InvalidMsgsdate(this);"   required="required" placeholder="Select date" name="Access" id="Access"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
	</div>		
	<center> <p style="color:red" id="msgamount"></p></center>		
  <label for="Maximumnoofemployees">Amount*</label>
   
  <div style="margin-bottom: 12px" id="maximumemployee" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="Amount" id="Amount" maxlength="5" onfocusout="amountzero()" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this);" required="required" tabindex="1" class="form-control" placeholder="Enter Amount" value="">
	</div>	
	<center><p style="color: red;" id="msgUsername" name="msgUsername" ></p></center>
	<label for="Username">Admin Username*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="AdminUsername" id="AdminUsername" maxlength="50" minlength="4" oninvalid="InvalidMsgError(this);" onfocusout="checkUsername()"  oninput="InvalidMsgError(this);" required="required" tabindex="1" class="form-control" placeholder="Enter Admin username" value="">
	</div>			
	  <center><p style="color: red;" id="msgPassword" name="msgPassword" ></p></center>
						   <label for="password">Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="password" minlength="6" maxlength="20" name="password1" id="password" required="required" onpaste="return false;" tabindex="2" class="form-control"  oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this);" placeholder="Enter password">

  </div>
   <label for="password">Confirm Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" minlength="6" maxlength="20" name="password2" id="confirm-password" onfocusout="checkPasswords()" onpaste="return false;" required="required" tabindex="2" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this);" class="form-control"  placeholder="Re-enter password">
  </div>
                                    <center><button type="submit" name="login-submit" id="login-submit"  class="btn btn-default">Add Company</button></center>
                                   
                                    </div>
                                    
                                    
                                    <script type="text/javascript">

									function checkUsername(){

										var username = $('#AdminUsername').val();

										$.post('checkUsernameEmail.php',{username:username},function(data){

											if(data != ''){
												document.getElementById("msgUsername").innerHTML = data;
												document.getElementById("login-submit").disabled = true;
											}else{
												document.getElementById("msgUsername").innerHTML = data;
												document.getElementById("login-submit").disabled = false;				
											}
										});
										
									}



									function checkEmail(){

										var email = $('#ContactpersonEmailaddress').val();

										$.post('checkUsernameEmail.php',{email:email},function(data){
													
												if(data != ''){
													document.getElementById("msgEmail").innerHTML = data;
													document.getElementById("login-submit").disabled = true;
												}else{
													document.getElementById("msgEmail").innerHTML = data;
													document.getElementById("login-submit").disabled = false;				
												}

										});
									}
                                    
                                	function checkPasswords(){

										var password1 = $("#password").val();
										var password2 = $("#confirm-password").val();

										if(password1 != password2){
											document.getElementById("msgPassword").innerHTML = "Password and Confirm Passwords must be same.";
											document.getElementById("login-submit").disabled = true;
											
										}else{
											document.getElementById("msgPassword").innerHTML = "";
											document.getElementById("login-submit").disabled = false;
											
										}

									}


                                    </script>
                                    
  
  

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

    <script>
     function noofuserzero() {
    var x = document.getElementById("Maximumnoofemployees");
    var y = document.getElementById("msgnoofuser");
   if(x.value <= 0){
    y.innerHTML= "No of users should be greater than zero"
    	document.getElementById("login-submit").disabled = true;
}else{ y.innerHTML= "";
document.getElementById("login-submit").disabled = false;
	}
}
    </script>
  <script>

   function amountzero() {
    var x = document.getElementById("Amount");
    var y = document.getElementById("msgamount");
   if(x.value <= 0){
    y.innerHTML= "Amount should be greater than zero"
    	document.getElementById("login-submit").disabled = true;
}else{ y.innerHTML= "";
document.getElementById("login-submit").disabled = false;
	}
}
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validations.js"></script>
  <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
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
<script>
function InvalidMsgErrorphone(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please fill in this field');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('Please enter valid company phone number');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
</script>

</body>
</html>