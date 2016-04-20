<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Registration</title>
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/index.css" rel="stylesheet" />	
	<link href="css/main.css" rel="stylesheet" />	
<link href="css/job.css"rel="stylesheet"/>
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link href="css/CR.css"rel="stylesheet"/>
	<script type="text/javascript" src="jquery-2.1.4.js"></script><script src="js/validations.js"></script>
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
      left: 632.222px;
    z-index: 1040;
   
    top: 571.337px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    direction: ltr;

}
.dropdown-menu {  left: 632.222px;
    z-index: 1040;
   
    top: 571.337px;
cursor: pointer;}

@media (max-width:1500px) {

}
@media (max-width:990px) {
}
@media (max-width:668px) {} 
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
	
	<div id="breadcrumb" >
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.php">Home</a></li>
				<li>Candidate Registration</li>			
			</div>		
		</div>	
	</div>
	<section >
        <div class="container">
            <div class="row">
                <div class="board">
                 
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                   
                     <li class="active">
                     <a href="#Profile" data-toggle="tab" title="Profile">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-user"></i>
                      </span> 
                  </a></li>
                  <li class="disabled"><a href="#Verfication" data-toggle="tab" title="Verfication">
                     <span class="round-tabs two">
                          <i class="glyphicon glyphicon-phone"></i>
                     </span> 
                    </a>
                 </li>
                 

                     <li class="disabled"><a href="#Experience" data-toggle="tab" title="Experience">
                         <span class="round-tabs four">
                               <i class="glyphicon glyphicon-list"></i>
                         </span> 
                     </a></li>

                     <li class="disabled"><a href="#Education" data-toggle="tab" title="Education">
                         <span class="round-tabs five">
                             <i class="glyphicon glyphicon-star"></i>
                         </span> </a>
                     </li>
					  <li class="disabled"><a href="#Preffered_Skill" data-toggle="tab" title="Preffered Skill">
                         <span class="round-tabs six">
                              <i class="glyphicon glyphicon-list"></i>
                         </span> </a>
                     </li>
                     
                     <li class="disabled"><a href="#Additional_Information" data-toggle="tab" title="Additional Information">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-folder-open"></i>
                     </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="Profile">
<div class="container" >
<div class="col-md-3">
</div>

<div class="col-md-6">
    <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Profile</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
 
 <form class="form-horizontal" id="Profile_form" name="Profile_form" role="form">
			 <label for="Firstname">First Name*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="Full_Name" id="Full_Name" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); "  maxlength="100"  class="form-control" placeholder="Enter Full Name" >         
                                    </div>
 <label for="LastName">Last Name*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input   type="text" oninvalid="InvalidMsgError(this);" maxlength="50" oninput="InvalidMsgError(this); " required="required" class="form-control" name="lastName"  id="lastName" placeholder="Enter Last Name">
                                    </div>
                                     <center> <p style="color:red" id="msgdatebirth"></p></center>
								  	 <label for="DateofBirth">Date of Birth*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgdate(this);"  oninput="InvalidMsgdate(this);" required="required" placeholder="Select date of birth" name="Date_Birth" id="Date_Birth"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
                                    </div>
                                     <label for="Nationality">Nationality*</label>
  <div style="margin-bottom: 12px" class="input-group">
										 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" onfocus="datevalidatefuction()" name="Nationality" id="Nationality" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); "  maxlength="50"  class="form-control" placeholder="Enter Nationality" >         
                                    </div>
                                  
							<label for="PAN_Number">Pan card Number*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                        <input maxlength="10" type="text" name="PAN_Number" id="PAN_Number"  pattern="[A-Z]{3}[P]{1}[A-Z]{1}[0-9]{4}[A-Z]{1}" required="required"  oninvalid="InvalidMsgpan(this);"  oninput="InvalidMsgpan(this);" placeholder="Enter permanent account number" class="form-control"/>
                                    </div>
							<label for="Gender">Gender*</label>
							<div style="margin-bottom: 12px;color:black;" class="input-group" >
								
								<input type="Radio" name="Gender_Type" id="Gender_Type" value="Male" >
								Male
								<input type="Radio" name="Gender_Type" id="Gender_Type" value="Female">
								Female
							</div>
							<div class="form-group">
								
								<input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['id']?>"class="form-control" >
							</div>
                                    
                                    <center><button type="submit" href="#Verfication" id="Profile-submit"  onclick= "profile();" name="Profile_form" class="btn-submit btn btn-default btn-outline-rounded "> Next tab <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button></center>
                                  
                                    </div>
                                    
  
  

</form>
  </div>
</div>
</div>
                       
                        
                        
                       <script type="text/javascript">
	
    							function profile(){
										var fullName = $('#Full_Name').val();
										var lastName = $('#lastName').val();
										var dob = $('#Date_Birth').val();
										var nationality = $('#Nationality').val();
										var pan = $('#PAN_Number').val();
										var gender = $('#Gender_Type').val();
										var id = $('#userid').val();

						
										
										$.post('profile.php',{firstname:fullName,lastname:lastName,Date_Birth:dob,Nationality:nationality,PAN_Number:pan,Gender_Type:gender,id:id},function(data){alert(data);});
    							}       					

                       </script> 
                       

                      </div>
					  <div class="tab-pane fade" id="Additional_Information">
<div class="container" >
<div class="col-md-3">
</div>

<div class="col-md-6">
    <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Additional Information</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
  <center></center>
		 <center></center>
<form id="Employee-form" action="SuperAdminLoginBack.php" method="POST" role="form" style="display: block;">
			 <label for="HavePassport">Have Passport? *</label>
  <div style="margin-bottom: 12px" class="input-group">
					
								<input type="Radio" name="Passport_Type" required onclick="validatepassportyes()"  id="Job_Type-0" value="1" >
								Yes
								<input type="Radio" name="Passport_Type" required onclick="validatepassportno()" id="Job_Type-1" value="2">
								No
</div>
<div id="passportval" style="display:none">
<label for="Passport_Number">Passport Number*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                       <input  type="text"   id="Passport_Number" name="Passport_Number" oninvalid="InvalidMsgError(this);"    oninput="InvalidMsgError(this); "  placeholder="Enter Passport Number" maxlength="15"  class="form-control" />
                                  </div> <label for="passportexpire">Passport Expire Date*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgdate(this);"  oninput="InvalidMsgdate(this);"  placeholder="Select Passport Expire Date" name="Passport_Expire_Date" id="Passport_Expire_Date"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
                                    </div>
								<label for="Vailable_Visa">Any vailable Visa*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                       <input  type="text"   id="Vailable_Visa" name="Vailable_Visa"  placeholder="Enter available visa" maxlength="20"  class="form-control" />
                                  </div>
													</div>
							
 <label for="Current_Organizaqtion_Name">Current organization</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <input  maxlength="50" type="text" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this); " required="required" class="form-control"  name="Current_Organizaqtion_Name" id="Current_Organizaqtion_Name" placeholder="Enter current Organization">
                                    </div>
 <label for="Current_Location">Where are you currently located?*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <input  maxlength="20" type="text" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this); " required="required" class="form-control"  name="Current_Location" id="Current_Location" placeholder="Enter current location">
                                    </div>
<center> <p style="color:red" id="msgsphoto"></p></center>
                                   <label for="Photo_User">Photo</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                        <input id="Photo_User" name="Photo_User" onfocusout="validatephoto('Photo_User')" class="input-file form-control" type="file">
							</input>
                                    </div>
									<label for="CTC">CTC</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <select  required="required" name="selection" id="selection" onchange="selectrow1()"class="form-control">
								<option value="" disabled selected hidden>Select</option>
								<option value="Fixed">Fixed</option>
								<option value="Variable">Variable</option>
							</select>
                                    </div>
									<div id = "t1"  style="display:none;">
									<label for="Fixed_FixedCTC">Fixed CTC*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <input  maxlength="20" type="text" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this); " required="required" class="form-control"  name="Fixed_FixedCTC" id="Fixed_FixedCTC" placeholder="Enter Fixed CTC">
                                    </div>
								
								</div>
								<div id = "t2"  style="display:none;">
									<label for="Varible_FixedCTC">Fixed CTC*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <input  maxlength="20" type="text" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this); " required="required" class="form-control"  name="Varible_FixedCTC" id="Varible_FixedCTC" placeholder="Enter Fixed CTC">
                                    </div>
									<label for="Varible_VaribleCTC">Variable CTC*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <input  maxlength="20" type="text" oninvalid="InvalidMsgError(this);"  oninput="InvalidMsgError(this); " required="required" class="form-control"  name="Varible_VaribleCTC" id="Varible_VaribleCTC" placeholder="Enter Variable CTC">
                                    </div>
							
								</div>

                                    <center><button type="submit" name="login-submit" id="login-submit"  class="btn btn-default">Login</button></center>
                                  
                                    </div>
                                    
  
  

</form>
  </div>
</div>
</div>
                     
                    </div>
                    
                    <script type="text/javascript">
                				function additional(){

									var Passport_Number = $('#Passport_Number').val();
									var Passport_Expire_Date = $('#Passport_Expire_Date').val();
									var Vailable_Visa = $('#Vailable_Visa').val();
									var Current_Organizaqtion_Name = $('#Current_Organizaqtion_Name').val();
									var Photo_User = $('#Photo_User').val();
									var Varible_FixedCTC = $('#Varible_FixedCTC').val();
									var Varible_VaribleCTC = $('#Varible_VaribleCTC').val();

									$.post('additionalInformation.php',{Passport_Number:Passport_Number,Passport_Expire_Date:Passport_Expire_Date,Vailable_Visa:Vailable_Visa,Current_Organizaqtion_Name:Current_Organizaqtion_Name,Varible_VaribleCTC:Varible_VaribleCTC,Varible_FixedCTC:Varible_FixedCTC},
										function(data){
												alert(data);
										});
									
                    		}
        						

                    </script>
                    
                    
                      <div class="tab-pane fade" id="Experience">
					  <div class="container" >
							<div class="col-md-3">
							</div>

							<div class="col-md-6">
								<div class="panel panel-default">
							  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong>Experience</strong></h3>
								  
							  </div> </center> 
							  
							  <div class="panel-body">
							  <center></center>
									 <center></center>
							 <form class="form-horizontal " id="Experience_form" name="Experience_form" role="form">
										 <label for="Username">Current Organization Name*</label>
							  <div style="margin-bottom: 12px" class="input-group">
																	 
																	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
																	<input type="text" name="organization0" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); " id="organization0" maxlength="100" class="form-control" placeholder="Enter Current Organization Name" >         
																</div>
							 <label for="jobtype0">Job Type*</label>
														<div style="margin-bottom: 12px" class="input-group">
																<input type="Radio" name="jobtype0" id="jobtype0" onclick="JobTypePermanent()" value="Permanent" >
								  Permanent
							   
								  <input type="Radio" name="jobtype0"  id="jobtype1" onclick="JobTypeContract()" value="Contract">
								  Contract	
																</div>
																<div id="contractorganization" style="display:none" >
																 <label for="Username">Contract Organization Name*</label>
							  <div style="margin-bottom: 12px" class="input-group">
																	 
																	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
																	<input type="text" name="organizationName0" id="organizationName0" maxlength="100" class="form-control" placeholder="Enter Contract Organization Name" >         
																</div>
							</div>
							<label for="designationRole0">Designation/Role*</label>
							  <div style="margin-bottom: 12px" class="input-group">
																	 
																	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="designationRole0" id="designationRole0" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); "  maxlength="100" class="form-control" placeholder="Enter Designation/Role" >
</div>				
	<label for="notice0">Notice Period*</label>
							  <div style="margin-bottom: 12px" class="input-group">
																	 
																	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="notice0" id="notice0" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); "  maxlength="4" class="form-control" placeholder="Enter Notice period" >
</div>		
							<label for="CTC">CTC</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <select  required="required" name="selection2" id="selection2" onchange="selectrow2()"class="form-control">
								<option value="" disabled selected hidden>Select</option>
								<option value="Fixed">Fixed</option>
								<option value="Variable">Variable</option>
							</select>
                                    </div>
									<div id = "fixedaccess"  style="display:none;">
									<label for="Fixed_FixedCTC">Fixed CTC*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <input  maxlength="20" type="text"   class="form-control"  name="fixedctc0" id="fixedctc0"  placeholder="Enter Fixed CTC">
                                    </div>
								
								</div>
								<div id = "variableaccess"  style="display:none;">
								
									<label for="Varible_VaribleCTC">Variable CTC*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <input  maxlength="20" type="text" class="form-control"   name="variablectc0" id="variablectc0"  placeholder="Enter Variable CTC">
                                    </div>
							
								</div>
							<label for="JoiningDate">Joining Date*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgdate(this);"  oninput="InvalidMsgdate(this);"  placeholder="Select Joining Date"  name="date0" id="date0" value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
                                    </div>
							
																<center><button type="submit" name="login-submit" id="login-submit"  class="btn btn-default">Login</button></center>
															  
																</div>
																
							  
							  

							</form>
							  </div>
							</div>
					</div>
                          <h3 class="head text-center">Experience</h3>
                        <form class="form-horizontal " id="Experience_form" name="Experience_form" role="form">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<label>Current Organization Name</label>
								<input type="text" name="organization0" id="organization0" class="form-control"/>
							</div> 
							<div class="form-group" style="color:black;">
							  <label >Job Type</label>
								<input type="Radio" name="jobtype0" id="jobtype0" value="Permanent" >
								  Permanent
							   
								  <input type="Radio" name="jobtype0" onclick="showMe('div4', this)" id="jobtype0" value="Contract">
								  Contract
							</div>		
							<div id="div4" style="display:none" class="form-group">
								<label>Contract Organization Name</label>  
								<input  name="organizationName0" id="organizationName0" class="form-control input-md" type="text">
							</div>
							<div class="form-group">
								<label>Designation/Role</label>
								<input type="text" name="designationRole0" id="designationRole0" class="form-control" >
							</div>
							<div class="form-group">
								<label class="control-label">Notice Period</label>
								<input maxlength="200" type="text" required="required" name="notice0" id="notice0" class="form-control" placeholder="Enter Notice Period" />
							</div>
							<label>CTC</label>
							<div class="form-group">
								
								<div class="col-md-6">
									<input type="text" name="fixedctc0" id="fixedctc0" class="form-control" placeholder="Fixed Pay">
								</div>
								<div class="col-md-6" style=" margin-left: -32px;">
									<input type="text" name="variablectc0" id="variablectc0" class="form-control" placeholder="Variable Pay">
								</div>
							</div>				
							<div class="form-group">
								<label>Joining Date</label>
								<input type="date" name="date0" id="date0" class="form-control">
							</div>
							
							<!-- one form complete -->
							
							
							<div style="margin-bottom:20px;">
								<a href="#" onClick="Advanced1(); "style="color:#1BBD36; " >+ Add Previous Organization details</a><hr>
								<div id="hidethis" style=" display:none;">
									<div class="form-group">
								<label>Previous Organization Name</label>
								<input type="text" name="Current_Organization_Name1" id="Current_Organization_Name1" class="form-control">
							</div> 
							<div class="form-group" style="color:black;">
							  <label >Job Type</label>
								<input type="Radio" name="Job_Type1" id="Job_Type1" value="Permanent" >
								  Permanent
							   
								  <input type="Radio" name="Job_Type0"  onclick="showMe('div2', this)" id="Job_Type1" value="Contract">
								  Contract
							</div>		
							<div id="div2" style="display:none" class="form-group">
								<label>Contract Organization Name</label>  
								<input name="ContractOrganizationName1" id="ContractOrganizationName1"class="form-control input-md" type="text">
							</div>
							<div class="form-group">
								<label>Designation/Role</label>
								<input type="text" name="Previous_Designation" class="form-control" >
							</div>
								<label>CTC</label>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="Fixed_Pervious_Salary" class="form-control" placeholder="Fixed Pay">
								</div>
								<div class="col-md-6" style=" margin-left: -32px;">
									<input type="text" name="Variable_Pervious_Salary" class="form-control" placeholder="Variable Pay">
								</div>
							</div>				
							<div class="form-group">
								<label>Joining Date</label>
								<input type="text" name="Pervious_Joining_Date"class="form-control">
							</div>
							<div class="form-group">
								<label>Ending Date</label>
								<input type="text" name="Pervious_Ending_Date" class="form-control" >
							</div>
							
							<!-- experience counter -->
							<div class="form-group">
								
								<input type="value" name="experienceCounter"  value="0" class="form-control" >
							</div>
							
							<!--  end of experience counter -->
							
							<div style="margin-bottom:20px;">
								<a href="#" onClick="Advanced2(); "style="color:#1BBD36; " >+ Add Previous Organization details</a><hr>
							</div>
								</div>
							</div>
							
							<div id="hidethis1" style=" display:none;">
								<div class="form-group">
									<label>Previous Organization Name</label>
									<input type="text" name="Previous1_Organization_Name" class="form-control">
								</div> 
								<div class="form-group" style="color:black;">
									<label >Job Type</label>
									<input type="Radio" name="Previous1_Job_Type" id="Job_Type-0" value="1" >
									Permanent
									<input type="Radio" name="Previous1_Job_Type" onclick="showMe('div3', this)" id="Job_Type-1" value="2">
									Contract
								</div>		
								<div id="div3" style="display:none" class="form-group">
									<label>Contract Organization Name</label>  
									<input id="container" name="container" class="form-control input-md" type="text">
								</div>
								<div class="form-group">
									<label>Designation/Role</label>
									<input type="text" name="Designation" class="form-control" >
								</div>
								 <label>CTC</label>
								<div class="form-group">
									<div class="col-md-6">
										<input type="text" name="Fixed_Pervious_Salary" class="form-control" placeholder="Fixed Pay">
									</div>
									<div class="col-md-6" style=" margin-left: -32px;">
										<input type="text" name="Variable_Pervious_Salary" class="form-control" placeholder="Variable Pay">
									</div>
								</div>				
								<div class="form-group">
									<label>Joining Date</label>
									<input type="text" name="Joining_Date"class="form-control">
								</div>
								<div class="form-group">
									<label>Ending Date</label>
									<input type="text" name="Ending_Date" class="form-control" ><hr>
								</div>
							</div>
							
							<!--  primary skills -->
							
							<h3 style="color:#1BBD36;" data-toggle="tooltip" data-placement="left" title="Hooray!"  >Primary Skills</h3>
							<div class="form-group" >
								<label class="control-label">Skill Name</label>
								<input maxlength="200" type="text"  required="required" class="form-control" name="primaryskillName" id="primaryskillName"/>
							</div>
							<div class="form-group">
								<!-- Indicates a successful or positive action -->
							<label class="control-label">From</label>
							<input   type="date" required="required" class="form-control" name="primaryfrom"  id="primaryfrom"/>
							</div>	
							<div class="form-group">
								<label>To</label>
								<input type="date"  required="required" class="form-control"   name="primaryto" id="primaryto"/>
							</div>
							<div class="form-group">
								<label class="control-label">Project Name</label>
								<input maxlength="200" type="text" required="required" class="form-control" name="primaryprojectName" id="primaryprojectName" />
							</div>
							<div class="form-group">
								<label class="control-label">Team Size</label>
								<input type="number" required="required" class="form-control" name="primaryteamSize" id="primaryteamSize" />
							</div>
							<div class="form-group">
								<label class="control-label">Role</label>
								<input maxlength="200" type="text" required="required" class="form-control" name="primaryrole" id="primaryrole" />
							</div><!-- Textarea -->
							<div class="form-group">
								<label>Project Description</label>
								<textarea class="form-control"  style="height:150px;"name="primaryprojectDescription" id="primaryprojectDescription"></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Company Name</label>
								<input maxlength="200" type="text" required="required" class="form-control" name="primaryCompanyName" id="primaryCompanyName" />
							</div>
							
							
							<!--  secondary skills -->
							<h3 style="color:#1BBD36;" data-toggle="tooltip" data-placement="left" title="Hooray!"  >Secondary Skills</h3>
							<div class="form-group" >
								<label class="control-label">Skill Name</label>
								<input maxlength="200" type="text"  class="form-control" name="secondaryskillName" id="secondaryskillName" />
							</div>
							<div class="form-group">
								<!-- Indicates a successful or positive action -->
								<label class="control-label">From</label>
								<input   type="date"  class="form-control" name="secondaryfrom" id="secondaryfrom" />
							</div>
							<div class="form-group">
								<label>To</label>
								<input type="date"   class="form-control" name="secondaryto" id="secondaryto"/>
							</div>
							<div class="form-group">
								<label class="control-label">Project Name</label>
								<input maxlength="200" type="text" class="form-control" name="secondaryprojectName" id="secondaryprojectName" />
							</div>
							<div class="form-group">
								<label class="control-label">Team Size</label>
								<input type="number" class="form-control" name="secondaryteamSize" id="secondaryteamSize"/>
							</div>
							<div class="form-group">
								<label class="control-label">Role</label>
								<input maxlength="200" type="text" class="form-control" name="secondaryrole" id="secondaryrole" />
							</div><!-- Textarea -->
							<div class="form-group">
								<label>Project Description</label>
								<textarea class="form-control" id="secondaryprojectDescription" style="height:150px;" name="secondaryprojectDescription"></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Company Name</label>
								<input maxlength="200" type="text" class="form-control" name="secondarycompanyName"  id="secondarycompanyName" />
							</div>
							<h3 style="color:#1BBD36;" data-toggle="tooltip" data-placement="left" title="Hooray!"  >Good Knowledge on</h3>
							<!-- Textarea -->
							<div class="form-group">
								<label>Skills Name</label>
								<textarea class="form-control" id="knowledgeName" style="height:150px;"name="knowledgeName" placeholder="Enter your skills Name"></textarea>
							</div>
                            <fieldset>
                                    <button type="submit" onclick="experience();"href="#Education" name="Experience_form" class="btn-submit btn btn-success btn-outline-rounded green"> Next tab <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                            </fieldset>
							
						</div>
                        </form>  
                        
                        
                       <script type="text/javascript">

							function experience(){

								//main
								var organization0 = $('#organization0').val();
								var jobtype0 = $('#jobtype0').val();
								var organizationName0 =  $('#organizationName0').val();
								var designationRole0 = $('#designationRole0').val();
								var notice0 = $('#notice0').val();
								var fixedctc0 = $('#fixedctc0').val();
								var variablectc0 = $('#variablectc0').val();
								var date0 = $('#date0').val();
								var experienceCounter = 0;


								//primary skills
								var primaryskillName = $('#primaryskillName').val();
								var primaryfrom = $('#primaryfrom').val();
								var primaryto = $('#primaryto').val();
								var primaryprojectName = $('#primaryprojectName').val(); 
								var primaryteamSize = $('#primaryteamSize').val();
								var primaryrole = $('#primaryrole').val();
								var primaryprojectDescription = $('#primaryprojectDescription').val();
								var primaryCompanyName = $('#primaryCompanyName').val();



								//secondary skills
								var secondaryskillName = $('#secondaryskillName').val();
								var secondaryfrom = $('#secondaryfrom').val();
								var secondaryto = $('#secondaryto').val();
								var secondaryprojectName = $('#secondaryprojectName').val();
								var secondaryteamSize = $('#secondaryteamSize').val();
								var secondaryrole = $('#secondaryrole').val();
								var secondaryprojectDescription =$('#secondaryprojectDescription').val();
								var secondarycompanyName = $('#secondarycompanyName').val();


								//knowledge skills
								var knowledgeName = $('#knowledgeName').val();
 
$.post('userExperience.php',
{organization0:organization0,jobtype0:jobtype0,organizationName0:organizationName0,designationRole0:designationRole0,notice0:notice0,fixedctc0:fixedctc0,variablectc0:variablectc0,date0:date0,experienceCounter:experienceCounter,
	primaryskillName:primaryskillName,primaryfrom:primaryfrom,primaryto:primaryto,primaryprojectName:primaryprojectName,primaryteamSize:primaryteamSize,primaryrole:primaryrole,primaryprojectDescription:primaryprojectDescription,primaryCompanyName:primaryCompanyName,
	secondaryskillName:secondaryskillName,secondaryfrom:secondaryfrom,secondaryto:secondaryto,secondaryprojectName:secondaryprojectName,secondaryteamSize:secondaryteamSize,secondaryrole:secondaryrole,secondaryprojectDescription:secondaryprojectDescription,secondarycompanyName:secondarycompanyName,
	knowledgeName:knowledgeName},
function(data){
	alert(data);
});

							}


</script>
                          
                      </div>
						<div class="tab-pane fade" id="Education">
									  <h3 class="head text-center">Education</h3> 
							<form class="form-horizontal" id="Education_form" name="Education_form" role="form">
								<TABLE id="education">
										<tr>
											<td>
												<label >Education</label>
											</td>
											<td>
												<label >Specialization</label>
											</td>
											<td>
												<label >Name of Institute</label>
											</td>
											<td>
												<label >University</label>
											</td>
											<td>
												<label >From</label>
											</td>
											<td>
												<label >To</label>
											</td>
											<td>
												<label >Aggregate</label>
											</td>
											<td>
											&nbsp;
											</td>
										</tr>
										<tr>
											<td>
												 <select name="Education1" id='Education1' class="form-control input-md">
													<option value="1">Select</option>
													<option value="SSC">SSC</option>
													<option value="Intermediate">Intermediate</option>
													<option value="Diploma">Diploma</option>
													<option value="Degree">Degree</option>
													<option value="Post Graduation">Post Graduation</option>
													<option value="Doctorate">Doctorate</option>
													<option value="Others">Others</option>
												</select>
											</td>
											<td>
												<input type = "text" name="nameofspecialization" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="nameofinstitute" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="university" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="From" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="To" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="Aggregate" class="form-control input-md">
											</td>
											<td>
												&nbsp;
											</td>
										</tr>
										<tr>
											<td>
												 <select name="Education2" id='Education2' class="form-control input-md">
													<option value="1">Select</option>
												</select>
											</td>
											<td>
												<input type = "text" name="nameofspecialization" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="nameofinstitute" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="university" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="From" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="To" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="Aggregate" class="form-control input-md">
											</td>
											<td>
												&nbsp;
											</td>
										</tr>
										<tr>
											<td>
												 <select name="Education3" id='Education3' class="form-control input-md">
													<option value="1">Select</option>
												</select>
											</td>
											<td>
												<input type = "text" name="nameofspecialization" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="nameofinstitute" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="university" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="From" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="To" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="Aggregate" class="form-control input-md">
											</td>
											<td>
												&nbsp;
											</td>
										</tr>
										<tr>
											<td>
												<select name="Education4" id='Education4' class="form-control input-md">
													<option value="1">Select</option>
												</select>
											</td>
											<td>
												<input type = "text" name="nameofspecialization" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="nameofinstitute" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="university" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="From" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="To" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="Aggregate" class="form-control input-md">
											</td>
											<td>
												&nbsp;
											</td>
										</tr>
										<tr>
											<td>
												 <select name="Education5" id='Education5' class="form-control input-md">
													<option value="1">Select</option>
												</select>
											</td>
											<td>
												<input type = "text" name="nameofspecialization" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="nameofinstitute" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="university" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="From" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="To" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="Aggregate" class="form-control input-md">
											</td>
											<td>
												&nbsp;
											</td>
										</tr>
										<tr>
											<td>
												 <select name="Education6" id='Education6' class="form-control input-md">
													<option value="1">Select</option>
													<option value="SSC">SSC</option>
													<option value="Intermediate">Intermediate</option>
													<option value="Diploma">Diploma</option>
													<option value="Degree">Degree</option>
													<option value="Post Graduation">Post Graduation</option>
													<option value="Doctorate">Doctorate</option>
													<option value="Others">Others</option>
												</select>
											</td>
											<td>
												<input type = "text" name="nameofspecialization" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="nameofinstitute" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="university" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="From" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="To" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="Aggregate" class="form-control input-md">
											</td>
											<td>
												&nbsp;
											</td>
										</tr>
										<tr>
											<td>
												 <select name="Education7" id='Education7' class="form-control input-md">
													<option value="1">Select</option>
												</select>
											</td>
											<td>
												<input type = "text" name="nameofspecialization" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="nameofinstitute" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="university" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="From" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "date" name="To" value="" class="form-control input-md">
											</td>
											<td>
												<input type = "text" name="Aggregate" class="form-control input-md">
											</td>
											<td>
												<input type="button" name="addRow[7]" onclick="educationname(8)" class="add" value='+' />
											</td>
										</tr>
									</table>
									<hr>
									<h3 class="head text-center">Certification</h3> 
								<div class="table-responsive">
									<table id= "Certification" name="Certification">
										<tr>
											<td><label>Certificate Name</label> </td>
											<td><label>Awarded by</label> </td>
											<td><label>Awarded date</label> </td>
											<td><label>Validity</label> </td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><input type="text" name="Certificate_Name" class="form-control input-md" /></td>
											<td><input type="text" name="Awarded_by" class="form-control input-md"/></td>
											<td><input type="date" name="Awarded_date" class="form-control input-md" /></td>
											<td><input type="text" name="Validity"  class="form-control input-md" /></td>
											<td><input type="button" name="addRow[1]" onclick="displayResult(2)" class="add" value='+' /></td>
										</tr>
									</table>
								</div>	
									<fieldset>
											<button type="submit" href="#Preffered_Skill" name="Education_form" class="btn-submit btn btn-success btn-outline-rounded green"> Next tab <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
									</fieldset>
								
							</form>  
						</div>
						
						<script type="text/javascript">

								function study(){


									//counter
									var studyCounter = $("#studyCounter").val();
									var certificateCounter = $("#certificateCounter").val();

										//study
										
										//0
										var education0      = $("#education0").val();
										var specialization0 = $("#specialization0").val();
										var institute0 = $("#institute0").val();
										var university0 = $('#university0').val();
										var from0 = $("#from0").val();
										var to0 = $("#to0").val();
										var aggregate0 = $("#aggregate0").val();

										//1
										var education1      = $("#education1").val();
										var specialization1 = $("#specialization1").val();
										var institute1 = $("#institute1").val();
										var university1 = $('#university1').val();
										var from1 = $("#from1").val();
										var to1 = $("#to1").val();
										var aggregate1 = $("#aggregate1").val();

										//2
										var education2      = $("#education2").val();
										var specialization2 = $("#specialization2").val();
										var institute2 = $("#institute2").val();
										var university2 = $('#university2').val();
										var from2 = $("#from2").val();
										var to2 = $("#to2").val();
										var aggregate2 = $("#aggregate2").val();
										
										//3
										var education3      = $("#education3").val();
										var specialization3 = $("#specialization3").val();
										var institute3 = $("#institute3").val();
										var university3 = $('#university3').val();
										var from3 = $("#from3").val();
										var to3 = $("#to3").val();
										var aggregate3 = $("#aggregate3").val();

										//4
										var education4      = $("#education4").val();
										var specialization4 = $("#specialization4").val();
										var institute4 = $("#institute4").val();
										var university4 = $('#university4').val();
										var from4 = $("#from4").val();
										var to4 = $("#to4").val();
										var aggregate4 = $("#aggregate4").val();

										//5
										var education5      = $("#education5").val();
										var specialization5 = $("#specialization5").val();
										var institute5 = $("#institute5").val();
										var university5 = $('#university5').val();
										var from5 = $("#from5").val();
										var to5 = $("#to5").val();
										var aggregate5 = $("#aggregate5").val();


										//6
										var education6      = $("#education6").val();
										var specialization6 = $("#specialization6").val();
										var institute6 = $("#institute6").val();
										var university6 = $('#university6').val();
										var from6 = $("#from6").val();
										var to6 = $("#to6").val();
										var aggregate6 = $("#aggregate6").val();
										

										// certificate

										var name0 = $("#name0").val();
										var awarded0 = $("#awarded0").val();
										var date0 = $("#date0").val();
										var validity0 = $("#validity0").val();


										// posting
										$.post('education.php',
												{studyCounter:studyCounter,certificateCounter:certificateCounter,
											education0:education0,specialization0:specialization0,institute0:institute0,university0:university0,from0:from0,to0:to0,aggregate0:aggregate0,
											education1:education1,specialization1:specialization1,institute1:institute1,university1:university1,from1:from1,to1:to1,aggregate1:aggregate1,
											education2:education2,specialization2:specialization2,institute2:institute2,university2:university2,from2:from2,to2:to2,aggregate2:aggregate2,
											education3:education3,specialization3:specialization3,institute3:institute3,university3:university3,from3:from3,to3:to3,aggregate3:aggregate3,
											education4:education4,specialization4:specialization4,institute4:institute4,university4:university4,from4:from4,to4:to4,aggregate4:aggregate4,
											education5:education5,specialization5:specialization5,institute5:institute5,university5:university5,from5:from5,to5:to5,aggregate5:aggregate5,
											education6:education6,specialization6:specialization6,institute6:institute6,university6:university6,from6:from6,to6:to6,aggregate6:aggregate6,
											name0:name0,awarded0:awarded0,date0:date0,validity0:validity0},
											function(data){
												alert(data)});
										
								}

						</script>
						
						
						<!--  verification -->
                    <div class="tab-pane fade" id="Verfication">
                        <h3 class="head text-center">Verfication</h3>
						<form class="form-horizontal" id="Verfication_form" name="Verfication_form" role="form">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="Mobile_Verfication"></label>  
									<div class="col-md-4">
										<input id="number" name="number" type="text" placeholder="Enter your Mobile Number" class="form-control input-md" required="">
									</div>
									<div class="col-md-2">
									<button id="Button_verify" name="Button_verify" class="btn btn-success">Verify</button>
									</div>
								</div>
								<div class="form-group">
								  <label class="col-md-4 control-label" for="Email_Verfication"></label>  
									<div class="col-md-4">
										<input id="email" name="email"  type="text" placeholder="Enter your Email Number" class="form-control input-md" required="">
									</div>
									<div class="col-md-2">
									<button id="Email_Button_verify" name="Email_Button_verify" class="btn btn-success">Verify</button>
									</div>
								</div>
								<!-- Textarea -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="Contact_Address">Contact Address</label>
								  <div class="col-md-4">                     
									<textarea class="form-control" id="address" name="address"></textarea>
								  </div>
								</div>

								<fieldset>
										<button type="submit"  onclick="verification();"href="#Experience" name="Verfication_form" class="btn-submit btn btn-success btn-outline-rounded green"> Next tab <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
								</fieldset>
							</div>
                        </form>  
                    </div>
                    
                    <!-- verification  -->
                    <script type="text/javascript">

						function verification(){
								var mobile = $('#number').val();
								var email =  $('#email').val();
								var address = $('#address').val();
								$.post('verification.php',{number:mobile,email:email,address:address},
										function(data){
											alert(data);
									});
						}


                    </script>
                    
                    <div class="tab-pane fade" id="Preffered_Skill">
						<h3 class="head text-center">Preffered Job</h3>
                            <form id="Preffered_Skill" name="Preffered_Skill" role="form">
								<div class="col-md-3">
								</div>
								<div class="col-md-6">
									<!-- Text input-->
									<div class="form-group">
										<label>Skill</label>
										<input id="preferSkill" name="preferSkill" type="text" placeholder="" class="form-control input-md" required="">
									</div>

									<!-- Text input-->
									<div class="form-group">
									  <label>Location</label>
									  <input id="preferLocation" name="preferLocation" type="text" placeholder="" class="form-control input-md">
									</div>

									<!-- Text input-->
									<div class="form-group">
									  <label>Companies</label> 
									  <input id="preferCompany" name="preferCompany" type="text" placeholder="" class="form-control input-md">
									</div>

									<!-- Text input-->
									<div class="form-group">
									  <label>CTC</label>
									  <input id="preferCtc" name="preferCtc" type="text" placeholder="" class="form-control input-md">
									</div>
									<button type="submit"  onclick="prefer();" href="#Additional_Information" name="Preffered_Skill" class="btn-submit btn btn-success btn-outline-rounded green"> submit<span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
								</div>
									
									
							</form>  
					</div>
					
					<script type="text/javascript">
			
									function prefer(){
											var preferSkill = $("#preferSkill").val();
											var preferLocation = $("#preferLocation").val();
											var preferCompany = $("#preferCompany").val();
											var preferCtc = $("#preferCtc").val();

											$.post('preferredJob.php',
													{preferSkill:preferSkill,preferLocation:preferLocation,preferCompany:preferCompany,preferCtc:preferCtc},
													function(data){
														alert(data);
														});
									}

					</script>
					
					
                        <div class="clearfix"></div>
                        </div>

				</div>
			</div>
		</div>
	</section>
 <footer style="margin-bottom:0px" class="navbar  footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Yodhaa Business Solutions Pvt Ltd. </a></p></center>
		</div>
 	
	
	</footer>
	<script src="js/jquery-2.1.1.min.js"></script>	


	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script src="js/validations.js"></script>
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
   function showMe (it, box) {
  var vis = (box.checked) ? "block" : "none";
  document.getElementById(it).style.display = vis;
}
//-->
</script>
<script>
function educationname(j)
{
    if (j <= document.getElementById("education").rows.length) {
        for (var i= document.getElementById("education").rows.length; i>j ;i--) {
            var elName = "addRow[" + i + "]";
            var newName = "addRow[" + (i+1) + "]";
            var newClick = "educationname(" + (i+1) + ")";
            var modEl = document.getElementsByName(elName);

            modEl.setAttribute("onclick", newClick);
            document.getElementsByName("addRow[" + i + "]").setAttribute('name', "addRow[" + (i+1) + "]");
        }
    }
	
    var table=document.getElementById("education");
    var row=table.insertRow(j);
	var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
		var cell7 = row.insertCell(6);
        var cell8 = row.insertCell(7);
	cell1.innerHTML = "<input type=text  name='Education []'  class='form-control input-md'/>";
	cell2.innerHTML = "<input type=text  name='Specialization []'  class='form-control input-md'/>";
	cell3.innerHTML = "<input type=text  name='Institution[]' class='form-control input-md'/>";
	cell4.innerHTML = "<input type=text  name='University[]'  class='form-control input-md'/>";
	cell5.innerHTML = "<input type=Date  name='From[]'  class='form-control input-md'/>";
	cell6.innerHTML = "<input type=Date  name='To[]'  class='form-control input-md'/>";
	cell7.innerHTML = "<input type=text  name='Aggregate[]'  class='form-control input-md'/>";
	cell8.innerHTML="<input type='button' name='addRow["+ j + "]' class='add' onclick=\"educationname(" + (j+1) + ")\" value='+' />";
    
}
function displayResult(j)
{
    if (j <= document.getElementById("Certification").rows.length) {
        for (var i= document.getElementById("Certification").rows.length; i>j ;i--) {
            var elName = "addRow[" + i + "]";
            var newName = "addRow[" + (i+1) + "]";
            var newClick = "displayResult(" + (i+1) + ")";
            var modEl = document.getElementsByName(elName);

            modEl.setAttribute("onclick", newClick);
            document.getElementsByName("addRow[" + i + "]").setAttribute('name', "addRow[" + (i+1) + "]");
        }
    }
	
    var table=document.getElementById("Certification");
    var row=table.insertRow(j);
    var cell1=row.insertCell(0);
    var cell2=row.insertCell(1);
    var cell3=row.insertCell(2);
    var cell4=row.insertCell(3);
    var cell5=row.insertCell(4);
    cell1.innerHTML="<input type='text'  name='Certification_Name[]'  class='form-control input-md'/>";
    cell2.innerHTML="<input type='text' name='Awarded_by[]' class='form-control input-md' />";
    cell3.innerHTML="<input type='date' name='Awarded_date[]' class='form-control input-md'  />";
    cell4.innerHTML="<input type='text' name='designation[]' class='form-control input-md' />";
    cell5.innerHTML="<input type='button' name='addRow["+ j + "]' class='add' onclick=\"displayResult(" + (j+1) + ")\" value='+' />";
}
  
function Advanced1() {
 if( document.getElementById("hidethis").style.display=='none' ){
   document.getElementById("hidethis").style.display = '';
 }else{
   document.getElementById("hidethis").style.display ='none'; 
 }
}
function Advanced2() {
 if( document.getElementById("hidethis1").style.display=='none' ){
   document.getElementById("hidethis1").style.display = '';
 }else{
   document.getElementById("hidethis1").style.display ='none'; 
 }
}
function Advanced3() {
 if( document.getElementById("hidethis2").style.display=='none' ){
   document.getElementById("hidethis2").style.display = '';
 }else{
   document.getElementById("hidethis2").style.display ='none'; 
 }
}
function Advanced4() {
 if( document.getElementById("hidethis4").style.display=='none' ){
   document.getElementById("hidethis4").style.display = '';
 }else{
   document.getElementById("hidethis4").style.display ='none'; 
 }
}
function selectrow1() {
var selectedValue = document.getElementById('selection').value
if (selectedValue == 'Variable'){
document.getElementById('t2').style.display='inline'
document.getElementById('t1').style.display='none'
}
if (selectedValue == 'Fixed'){
document.getElementById('t1').style.display='inline'
document.getElementById('t2').style.display='none'
}
}
function selectrow2() {
var selectedValue = document.getElementById('selection2').value
if (selectedValue == 'Variable'){
document.getElementById('variableaccess').style.display='inline';
document.getElementById('fixedaccess').style.display='inline';
 document.getElementById("fixedctc0").setAttribute("required","required");
  document.getElementById("variablectc0").setAttribute("required","required");
}
if (selectedValue == 'Fixed'){
document.getElementById('fixedaccess').style.display='inline';
document.getElementById('variableaccess').style.display='none';
 document.getElementById("fixedctc0").setAttribute("required","required");
}
}
</script>
	<script>
$(function(){
    $('a[title]').tooltip();

    $('.btn-submit').on('click', function(e) {

        var formname = $(this).attr('name'); 
        var tabname = $(this).attr('href');
        
        if ($('#' + formname)[0].checkValidity()) { /* Only works in Firefox/Chrome need polyfill for IE9, Safari. http://afarkas.github.io/webshim/demos/ */
            e.preventDefault();
            $('ul.nav li a[href="' + tabname + '"]').parent().removeClass('disabled');
            $('ul.nav li a[href="' + tabname + '"]').trigger('click');
        }

    });

    $('ul.nav li').on('click', function(e) {
        if ($(this).hasClass('disabled')) {
            e.preventDefault();
            return false;
        }
    });
});
	</script>
	
	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
$('#Education1').on('change', function(){
    var html = '';
    var current_id = $(this).val();
    $('#Education1 option').each(function(){
        if(current_id != $(this).val()){
            html += '<option value="'+$(this).val()+'">'+$(this).text()+'</option>';
        }
    });

    $('#Education2').html(html);
});
$('#Education2').on('change', function(){
    var html = '';
    var current_id = $(this).val();
    $('#Education2 option').each(function(){
        if(current_id != $(this).val()){
            html += '<option value="'+$(this).val()+'">'+$(this).text()+'</option>';
        }
    });

    $('#Education3').html(html);
});
$('#Education3').on('change', function(){
    var html = '';
    var current_id = $(this).val();
    $('#Education3 option').each(function(){
        if(current_id != $(this).val()){
            html += '<option value="'+$(this).val()+'">'+$(this).text()+'</option>';
        }
    });

    $('#Education4').html(html);
});
$('#Education4').on('change', function(){
    var html = '';
    var current_id = $(this).val();
    $('#Education4 option').each(function(){
        if(current_id != $(this).val()){
            html += '<option value="'+$(this).val()+'">'+$(this).text()+'</option>';
        }
    });

    $('#Education5').html(html);
});
$('#Education5').on('change', function(){
    var html = '';
    var current_id = $(this).val();
    $('#Education5 option').each(function(){
        if(current_id != $(this).val()){
            html += '<option value="'+$(this).val()+'">'+$(this).text()+'</option>';
        }
    });

    $('#Education6').html(html);
});
$('#Education6').on('change', function(){
    var html = '';
    var current_id = $(this).val();
    $('#Education6 option').each(function(){
        if(current_id != $(this).val()){
            html += '<option value="'+$(this).val()+'">'+$(this).text()+'</option>';
        }
    });

    $('#Education7').html(html);
});
</script>
  <script>
function datevalidatefuction() {
 document.getElementById("Date_Birth").setAttribute("required","required");
var x = document.getElementById("Date_Birth").value;
    
   var year = x.slice(0,4);
   var birthyear = parseInt(year);
   var date = new Date();
   var presentYear = date.getFullYear();
   presentYear = parseInt(presentYear);
var age = presentYear - birthyear;
  var y = document.getElementById("msgdatebirth");
   if(age  < 18){
    y.innerHTML= "Age should be above 18 years";
document.getElementById("Profile-submit").disabled = true;
}else{ y.innerHTML= "";
document.getElementById("Profile-submit").disabled = false;}
   
}
function validatepassportyes(){
    var remember = document.getElementById('Job_Type-0');
    if (remember.checked){
        document.getElementById('passportval').style.display='inline';
 document.getElementById("Passport_Number").setAttribute("required","required");
 document.getElementById("Passport_Expire_Date").setAttribute("required","required");
 document.getElementById("Vailable_Visa").setAttribute("required","required");

    }
    
}    
   function validatepassportno(){
 var remember = document.getElementById('Job_Type-1');
    if (remember.checked){
       document.getElementById('passportval').style.display='none';
    }
}
function JobTypePermanent(){
    var remember = document.getElementById('jobtype0');
    if (remember.checked){
        document.getElementById('contractorganization').style.display='none';

    }
    
} 
function JobTypeContract(){
    var remember = document.getElementById('jobtype1');
    if (remember.checked){
        document.getElementById('contractorganization').style.display='inline';
 document.getElementById("organizationName0").setAttribute("required","required");

    }
    
} 

function validatephoto(fileId)
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

</script>	
	
  </body>
</html>
