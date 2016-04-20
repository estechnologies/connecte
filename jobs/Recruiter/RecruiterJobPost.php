<!DOCTYPE html>
<html lang="en">
<head>
 <title>Recruiter Post a job</title>
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
 <script>

function delPreviousExpRow(currElement) {
     var parentRowIndex = currElement.parentNode.parentNode.rowIndex;
     document.getElementById("PreviousExp").deleteRow(parentRowIndex);
}


  function Previous_Exp(j)
{
if(j<10){
    if (j <= document.getElementById("PreviousExp").rows.length) {
        for (var i= document.getElementById("PreviousExp").rows.length; i>j ;i--) {
            var elName = "addRow[" + i + "]";
            var newName = "addRow[" + (i+1) + "]";
            var newClick = "Previous_Exp(" + (i+1) + ")";
            var modEl = document.getElementsByName(elName);

            modEl.setAttribute("onclick", newClick);
            document.getElementsByName("addRow[" + i + "]").setAttribute('name', "addRow[" + (i+1) + "]");
        }
    }
    var table=document.getElementById("PreviousExp");
    var row=table.insertRow(j);
    var cell1=row.insertCell(0);
    var cell2=row.insertCell(1);
 var cell3=row.insertCell(2);
  var cell4=row.insertCell(3);
    cell1.innerHTML="<input id='Expertisearea"+j+"' name='Expertisearea"+j+"' placeholder='Enter Expertise area' maxlength='50' class='form-control' type='text'/>";
    cell2.innerHTML="<input id='yearsexperience"+j+"' name='yearsexperience"+j+"' placeholder='Enter years of experience' maxlength='3' class='form-control' type='text'/>";
    cell3.innerHTML="<input type='button' name='addRow["+ j + "]' class='add' onclick=\"Previous_Exp(" + (j+1) + ")\" value='+' />";
    cell4.innerHTML="<input type='button' value='x' onclick=\"delPreviousExpRow(this)\"/>";
	}
};
  
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
<div class="container" id="mainborder" style="margin-bottom:50px;">
<div class="col-md-3">
</div>

<div class="col-md-6">
    <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Post a Job</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body"  >
  <center></center>
		 <center></center>
<form id="Employee-form" action="" method="POST" role="form" style="display: block;">
<center><h4  style=" margin-top: 20px; font-weight: 700;">Specifications</h4></center>
<label for="Type">Type*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <select id="Specifications_Type" name="Specifications_Type" required class="form-control">
                                       <option value="" disabled selected hidden>Select Job Type</option>
								  <option value="Contract">Contract</option>
								   <option value="Contract to Hire">Contract to Hire</option>
								  <option value="Permanent">Permanent</option>
								</select>
                                    </div>
                                  	
 <label for="Specifications_Organization_name">Organization name*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <input id="Specifications_Organization_name" maxlength="100" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" name="Specifications_Organization_name" class="form-control" placeholder="Enter your organization name">     
                                    </div>
                                	
 <label for="Department">Department</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="Specifications_Department" name="Specifications_Department" type="text" maxlength="100" placeholder="Enter job Department name" class="form-control input-md">         
                                    </div>
 <label for="Location">Location*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                       <input  id="Specifications_Location" name="Specifications_Location"  oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" placeholder="Enter job Location" class="form-control">
                                    </div>
                                  
                                      <label for="Role">Role*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input id="Specifications_Role" name="Specifications_Role" type="text" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" maxlength="50" placeholder="Enter job role name" class="form-control input-md">
                                    </div>
                                    	  <label for="NoofOpenings">No. of Openings*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input id="NoofOpenings" name="NoofOpenings" type="number" maxlength="3" placeholder="Enter job role name" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" class="form-control input-md">
                                    </div>
 <label for="Specifications_Job Description">Job Description*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <textarea class="form-control"  maxlength="300"  id="Specifications_Job Description" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" placeholder="Enter job description" name="Specifications_Job Description"></textarea> 
                                    </div>
                                	<center><h4 style=" margin-top: 20px; font-weight: 700;">Skills & Experience</h4></center>
 <label for="Qualification">Qualification*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <textarea class="form-control"  maxlength="100"  id="Qualification" name="Qualification" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" placeholder="Enter the Qualifications Required" ></textarea> 
                                  
                                    </div>
                                     <label for="TotalExperienceRequired">Total Experience Required*</label>
                            <div id="Total_Experience" style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input id="TotalExperienceRequired" name="TotalExperienceRequired" type="text" maxlength="2" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" placeholder="Enter Total Experience required in years" class="form-control input-md">
                                    </div>
					
                               
										<label for="PreviousExperience">Relevant Experience*</label>
  <div style="margin-bottom: 12px" class="input-group">
									 <table id= "PreviousExp" name="PreviousExp">
												<tr>
													  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><td><input id="Expertisearea" name="Expertisearea" placeholder="Enter Expertise area" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required"  maxlength="50" class="form-control" type="text"></td>
													<td><input id="yearsexperience" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" placeholder="Enter years of experience"  name="yearsexperience"  class="form-control" maxlength="3" type="text"></td>
													<td><input type="button" name="addRow[0]" onclick="Previous_Exp(1)" class="add" value='+' /></td><td><input type="button" value="x" onclick="delPreviousExpRow(this)"/></td>
												</tr>
					
											</table>
                                       
                                    </div>
                                    <center><h4 style=" margin-top: 20px; font-weight: 700;">Timelines</h4></center>

	<label for="Job Opening Start date">Job Opening Start date</label>
  <div style="margin-bottom: 12px" class="input-group">
									
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgsdate(this);"  oninput="InvalidMsgsdate(this);"   required="required" placeholder="Select end date of the job opening"  name="Startdate" id="Startdate"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
                                    </div>
	<label for="Job Opening End Date">Job Opening End Date</label>
   <div style="margin-bottom: 12px" id="" class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgsdate(this);"  oninput="InvalidMsgsdate(this);"   required="required" placeholder="Select end date of the job opening" name="Enddate" id="Enddate"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
									
	</div>
	
                                     <label for="TentativeInterviewdate">Tentative Interview date*</label>
   
  <div style="margin-bottom: 12px" id="maximumemployee" class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgsdate(this);"  oninput="InvalidMsgsdate(this);"   required="required" placeholder="Select tentative interview date" name="TentativeInterviewdate" id="TentativeInterviewdate"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
									
	</div>
	  <center><h4 style=" margin-top: 20px; font-weight: 700;">Pay Structure</h4></center>
	   <label for="Salary">Salary*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="Salary" name="Salary" class="form-control" maxlength="50" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required"  placeholder="Enter Salary Range">   
                                    </div>
                                   
                                 <center><h4 style=" margin-top: 20px; font-weight: 700;">Contact Details</h4></center>    
                                     <label for="Name">Name*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="Name" id="Name" maxlength="50" minlength="4" oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" required="required" tabindex="1" class="form-control" placeholder="Enter Name" value="">
	</div>
	<label for="email">Email address*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input  name= "email" id="email" maxlength="50"  class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="InvalidMsgEmail(this);"  oninput="InvalidMsgEmail(this); " type="text" class="form-control"  value="" placeholder="Enter Email Address">                                     
  </div>
	<label for="Mobilenumber">Mobile Number*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
             <input type="text" name="number" id="number" tabindex="1" oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" class="form-control" pattern="[0-9]{10}" placeholder="Enter mobile number" value="">                                       
  </div>
  <label for="Landlinenumber">Landline Number</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
             <input type="text" name="Landlinenumber" id="Landlinenumber" placeholder="Enter Landline number" maxlength="15"  class="form-control"  value="">                                       
  </div>
  
                                      

                                     <center><button type="submit" name="submit" id="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> &nbsp Post Job</button></center>
                                    
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
    $(function() {
  $('#Total_Experience').on('keydown', '#TotalExperienceRequired', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
});
$(function() {
  $('#PreviousExp').on('keydown', '#yearsexperience', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
});
</script>
<script>
function selectrow1() {

var selectedValue = document.getElementById('Salary').value;
if (selectedValue == 'Range'){

document.getElementById('Maximum_Salary').style.display='inline';
document.getElementById('Minimum_Salary').style.display='inline';
document.getElementById('Hike_Salary').style.display='none';
 document.getElementById("MaximumSalary").setAttribute("required","required");
 document.getElementById("MinimumSalary").setAttribute("required","required");

}
if (selectedValue == 'Max'){
document.getElementById('Maximum_Salary').style.display='inline';
document.getElementById('Minimum_Salary').style.display='none';
document.getElementById('Hike_Salary').style.display='none';
  document.getElementById("MaximumSalary").setAttribute("required","required");
     }
if (selectedValue == 'Hike %'){

document.getElementById('Hike_Salary').style.display='inline';
document.getElementById('Maximum_Salary').style.display='none';
document.getElementById('Minimum_Salary').style.display='none';
 document.getElementById("onCTC").setAttribute("required","required");
  document.getElementById("onFixed").setAttribute("required","required");

}
}</script>
<script>
function Addcontact(){
document.getElementById('Add_contact').style.display='inline';
 document.getElementById("Name1").setAttribute("required","required");
  document.getElementById("email1").setAttribute("required","required");
   document.getElementById("number1").setAttribute("required","required");
}
function Addcontact1(){
document.getElementById('Add_contact1').style.display='inline';
 document.getElementById("Name2").setAttribute("required","required");
  document.getElementById("email2").setAttribute("required","required");
   document.getElementById("number2").setAttribute("required","required");
}
</script>
</body>
</html>
</body>
</html>