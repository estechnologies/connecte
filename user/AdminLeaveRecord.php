<?php 
        session_start();
                                    
                                    	if(!isset($_SESSION['company']['username'])){
                                    		header("Location:index.php");
                                    	}
                                    	
                                    	$companyCode = $_SESSION['company']['code'];
                                    	
                                    	require 'connect.php';
                                    	$database = new connect();
                                    	
                                    
                                    	
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Admin leave Record</title>
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
  .datetimepicker {
  left: 425px; z-index: 1010; display: none; top: 375px; margin-top: 81px;
    padding: 4px;

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    direction: ltr;
}

	th {
    white-space: nowrap;
       text-align: center;
}
	td {
    white-space: nowrap;
        text-align: center;
}
</style>
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
    text-align:center;
}
	td {
    white-space: nowrap;
    text-align:center;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #FFFFFF;
    cursor: default;
    border: 1px solid #eee;
    border-bottom-color: transparent;
    font-size: 18px;
    background-color: #073a65;
}
.panel-default>.panel-heading {
    color: white;
    /* background-color: #eee; */
    /* border-color: #eee; */
    background-image: linear-gradient(#ffffff, #eeeeee 50%, #e4e4e4);
    background-repeat: no-repeat;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe4e4e4', GradientType=0);
    -webkit-filter: none;
    filter: none;
    /* border: 1px solid rgb(238, 238, 238); */
    text-shadow: 0 1px 0 rgb(238, 238, 238);
    color: black;
}
.nav-tabs {
    border-bottom: 1px solid #eee;
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    font-size: 18px;
    color: #073a65;
    border-radius: 4px 4px 4px 4px;
}
.nav-tabs>li>a:hover {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    font-size: 18px;
    color:white;
    background-color:#073a65;
    border-radius: 4px 4px 4px 4px;
}
.panel-heading {
    padding: 0px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
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



<!-- 


				/*
				*	types of leaves
				*/

-->
<div class="main" id="mainborder" style="margin-top:30px;margin-bottom:50px;">
<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading" id="leavesTab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#ManageHolidays" data-toggle="tab">Manage Holidays </a></li>
                              <li ><a href="#ApproveLeaves" data-toggle="tab">Approve Leaves</a></li>
                        </ul>
                </div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane active" id="ManageHolidays">
							<div class="container" style="margin-bottom: 36px;">
							<center style="margin-bottom:50px;"><strong><h3 style="font-weight:700">Manage Holidays</h3></strong></center>
							<center><?php 
	


	

		function failed($msg){
			
			
			
			?>
			<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center class="message"> <label style="font-size: 14px;color:Red;"><?php echo $msg;?></label></center> 
  </div>
		 <?php	
		}?></center>
		 <center><?php 
	
	

		function success($msg){
			
			$msg1 =$msg;
			
			?>
		<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center class="message"> <label style="font-size: 14px;color:green;"><?php echo $msg1;?></label></center>
  </div>
		 <?php	
		}?></center>

 <div class="col-md-6 table-responsive">
 
 
 
 <!--  
 
 		
 					LEAVES
 
  -->
 
 
 <?php 
 
 			if(isset($_POST['leavesLogin'])){
 				$clLeave = htmlspecialchars($_POST['Causalleave']);
 				$slLeave = htmlspecialchars($_POST['Sickleave']);
 				$elLeave = htmlspecialchars($_POST['Emergencyleave']);
 				
 				
 			
 				
 				if(mysql_num_rows($checkResult) <= 0){
 					$insertQuery = "INSERT INTO LeavesType(Causalleave,Sickleave,Emergencyleave,companyCode)VALUES('$clLeave','$slLeave','$elLeave','$companyCode')";
 					$resultInsert = mysql_query($insertQuery);
 					
 					if($resultInsert == 1){
 						$message = "Leaves Inserted successfully";
 						success($message);
 					}else{
 						$message = "Leaves Inserted unSuccessfull";
 						failed($message);
 					}
 					
 				}else{
 					$updateQuery = "UPDATE LeavesType SET Causalleave='$clLeave', Sickleave='$slLeave',Emergencyleave='$elLeave' WHERE companyCode='$companyCode'";
 					$resultUpdate = mysql_query($updateQuery);
 					
 					
 					if($resultUpdate == 1){
 						$message = "Leaves Updated successfully";
 						success($message);
 					}else{
 						$message = "Leaves Updated unSuccessfull";
 						failed($message);
 					}
 					
 				}
 				
 				

 				
 				
 				
 			}
 
 
 
 ?>
 
 <!-- 
 
 		new leaves type
 
  -->
 
 <?php 
 
 	if(isset($_POST['removeTypeLeave'])){
 		$leaveTypeId = htmlspecialchars($_POST['ltid']);
 		
 		$removeLeaveTypeQuery = "DELETE FROM LeavesType WHERE LId='$leaveTypeId'";
 		$removeLeaveTypeResult = mysql_query($removeLeaveTypeQuery);

 		if($removeLeaveTypeResult == 1){
 			success("Leave Type has been removed successfully.");
 		}else{
 			failed("unsuccessfull removed leave. please try agian");
 		}
 		
 		

 	}
 
 	
 	if(isset($_POST['typeLeaveAdd'])){
 		$leaveTypeName = htmlspecialchars($_POST['leavetype']);
 		$leaveTypeNumbers = htmlspecialchars($_POST['leavenumber']);
 		
 		$checkTypeLeaveQuery =  "SELECT * FROM LeavesType WHERE companyCode='$companyCode' AND leaveName='$leaveTypeName'";
 		$resultCheckTypeLeave = mysql_query($checkTypeLeaveQuery);
 		if(mysql_num_rows($resultCheckTypeLeave) <= 0){
	 		$addLeaveTypeQuery = "INSERT INTO LeavesType(companyCode,leaveName,leaves)VALUES('$companyCode','$leaveTypeName','$leaveTypeNumbers')";
	 		$addLeaveTypeResult = mysql_query($addLeaveTypeQuery);
	 		
	 		if($addLeaveTypeResult == 1){
	 			success("Leave Type has been added successfully.");
	
	 		}else{
	 			failed("Leave added unsuccess full..");
	 		}
 		}else{
 			failed("Entered Leave type is already added.");	
 		}
 		
 		
 	}
 
 	$leavesGetResult = "SELECT * FROM LeavesType WHERE companyCode='$companyCode'";
 	$resultGetLeaves = mysql_query($leavesGetResult);
 	
 	
 
 ?>
 
 
 
<table  class="table table-striped table-bordered table-hover table-condensed">
<thead>
  <tr>
    	<th>Type of Leave</th>
    	<th>No. of leaves</th>
    	<th>Action</th>
    </tr>
</thead>
    <tbody>
  
  <?php
  while($leaves = mysql_fetch_array($resultGetLeaves)){
  	 if(!empty($leaves)){?>
      <tr>
        <td><?php if(!empty($leaves)){ echo $leaves['leaveName'];}?></td>
       	<td><?php if(!empty($leaves)){echo $leaves['leaves']; }?></td>
       	<td><center><form action="AdminLeaveRecord.php" method="post"><input type="hidden" name="ltid" value="<?php if(!empty($leaves)){ echo $leaves['LId'];}?>" ><button type="submit" name="removeTypeLeave" id="login-submit"  class="btn btn-default">Remove</button></form></center></td>
       </tr>
         <?php }
 		 }
         ?>
         
         
         
         
       <tr>
         <tr>
      <form action="AdminLeaveRecord.php" method="POST">
         <td><input  type="text" id="leavetype" name="leavetype" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter Leave type" maxlength="50"  class="form-control" /></td>
         <td ><input  type="text" id="leavenumber" name="leavenumber" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter no of leaves" maxlength="3"  class="form-control" /></td>
        <td><center><button type="submit" name="typeLeaveAdd" id="login-submit"  class="btn btn-default">Add</button></center></td>
       </tr>
       </form>
    </tbody>
    </table>
	</div>
	<div class="col-md-6 table-responsive">
	
	<!-- 
	
	
			holidays list
	
	
	 -->
	
	
	<?php 
	
	
		
		
	
	
		if(isset($_POST['holidaySubmit'])){
				
				$holidayName = htmlspecialchars($_POST['Holidayname']);
				$holidayDate = htmlspecialchars($_POST['holidaydate']);
				
				
			
				
				$checkHolidayQuery = "SELECT * FROM HolidayList WHERE date='$holidayDate' AND companyCode='$companyCode'";
				$resultCheckHolday = mysql_query($checkHolidayQuery);
				
				if(mysql_num_rows($resultCheckHolday) <= 0){
				
					$holidayQuery = "INSERT INTO HolidayList(Holidayname,date,companyCode)VALUES('$holidayName','$holidayDate','$companyCode')";
					$holidayResult = mysql_query($holidayQuery);
					
					if($holidayResult == 1){
						success("Holiday has been added successfully.");
					}else{
						failed("Holiday added failed");
					}
				}else{
					failed("Holiday already declared on this date");
				}
				
				
				
			
				
		}
	
	
	
	?>
	
	
<table  class="table table-striped table-bordered table-hover table-condensed">
<thead>
  <tr>
    	<th>Holiday Name</th>
    	<th>Date</th>
    	<th>Action</th>
    </tr>
</thead>
    <tbody>
    
    
    <?php 
    
    	if(isset($_POST['removeSubmit'])){
    		$hid = htmlspecialchars($_POST['holidayId']);
    		
    		$removeHolidayQuery = "DELETE FROM HolidayList WHERE HId='$hid'";
    		$resultHolidayRemove = mysql_query($removeHolidayQuery);
    		
    		if($resultHolidayRemove == 1){
    			success("Holiday has been removed successfully.");
    		}else{
    			failed("holiday remove unsuccessfull");
    		}
    		
    		
    			
    	}
    	
    	
    	$holidayCheckQuery = "SELECT * FROM HolidayList WHERE companyCode='$companyCode'";
    	$resultHolidayQuery = mysql_query($holidayCheckQuery);
    
    
    ?>
  
      
      
      
      	
										<?php 
										
												while($holidays = mysql_fetch_array($resultHolidayQuery)){ ?>
												
													
													<tr>
														<td><?php echo $holidays['Holidayname']; ?></td>
														<td><?php echo $holidays['date']; ?></td>
				
														<td><center><form action="AdminLeaveRecord.php" method="post"> <input type="hidden" name="holidayId" value="<?php echo $holidays['HId'];?>" ><button type="submit" name="removeSubmit" id="login-submit"  class="btn btn-default">Remove</button></form></center></td>
												<?php  }
										
										?>
      
      
     
       <tr><form action="AdminLeaveRecord.php" method="POST">
        <td style="width:50%;"><input  type="text" id="Holidayname" name="Holidayname" oninvalid="InvalidMsgError(this);" required="required"  oninput="InvalidMsgError(this); "  placeholder="Enter Holiday name" maxlength="50"  class="form-control" /></td>
       	<td style="width:50%;"><div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="widthdate form-control" style="background-color: white;"  type="text" oninvalid="InvalidMsgsdate(this);"  oninput="InvalidMsgsdate(this);"   required="required" placeholder="Select date" name="holidaydate" id="date"  value="" size="16" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div></td>
									<td><center><button type="submit" name="holidaySubmit" id="login-submit"  class="btn btn-default">Add</button></center></td>
       </tr>
       </form>
    </tbody>
    </table>
	</div>
							</div>
						</div>
						
						
						<!--  
						
									approve leaves
										-->
						
						
						
						<?php 
						
    
                                if(isset($_POST['approveSaveButt'])){
                                
                                    $getElid = htmlspecialchars($_POST['elid']);
                                    
                                    $getStatus = htmlspecialchars($_POST['status']);
                                   
                                    if($getStatus == 'Rejected'){
                                    	$updateStatus ="UPDATE empLeaves SET status='$getStatus' AND days='0' WHERE elid='$getElid'";
                                    	
                                    	$updateResult = mysql_query($updateStatus);
                                    }else{
                                    	$updateStatus ="UPDATE empLeaves SET status='$getStatus' WHERE elid='$getElid'";
                                    	
                                    	$updateResult = mysql_query($updateStatus);
                                    }
                                    
                                    $updatedMsg = "Status has been updated successfully.";
                                }
								$username =  $_SESSION['company']['username'];
								$approveLeaveSeeQuery = "SELECT * FROM empLeaves WHERE approvalBy='$username'";
								$resultApproveSee = mysql_query($approveLeaveSeeQuery);
						
						      		
						
						?>
						<div class="tab-pane" id="ApproveLeaves">
							<div class="container" style="margin-bottom:100px">
							
							
							<!--  message -->
							<center><p style="color: green;"><?php if(isset($updatedMsg)){echo $updatedMsg; }else{echo '';}?></p></center>
							
							
							
								<div class="col-md-12 table-responsive">
								<center style="margin-bottom:50px;"><strong><h3 style="font-weight:700">Approve Leaves</h3></strong></center>
							<table  class="table table-striped table-bordered table-hover table-condensed">
							<thead>
							         <tr><th>User id</th>
							         <th>User name</th>
							    	<th>Leave Type</th>
							    	<th>Start Date</th>
							    	<th>End Date</th>
							    
							    	<th>Leave days</th>
							    	<th>Subject</th>
							    	<th>Reason</th>
							    	<th>Status</th>
							    	<th>Save</th>
							    </tr>
							</thead>
							    <tbody>
							     <?php
                                        if(mysql_num_rows($resultApproveSee)> 0){
                                        while($approveLeaves = mysql_fetch_array($resultApproveSee)){?>
                                            
                                                        <tr>
                                                            <?php $approvalUserids = $approveLeaves['userid']; ?>
                                                            <td><?php echo $approvalUserids; ?> </td>
                                                            <?php 
                                                                                                     $usernameResult = mysql_query("SELECT * FROM AddUser  WHERE UserId='$approvalUserids' AND code='$companyCode'"); 
                                                                            
                                                                                                     $usernames = mysql_fetch_array($usernameResult);
                                                                                                        
                                                            ?>
                                                            <td><?php echo  $usernames['UserName']; ?> </td>
                                                            <td><?php echo  $approveLeaves['leavetype']; ?> </td>
                                                            <td><?php echo  $approveLeaves['startdate']; ?> </td>
                                                            <td><?php echo  $approveLeaves['enddate']; ?> </td>
                                                           
                                                            <td><?php echo  $approveLeaves['days']; ?> </td>
                                                            <td><?php echo  $approveLeaves['subject']; ?> </td>
                                                            <td><?php echo  $approveLeaves['reason']; ?> </td>
                                                            <form action="AdminLeaveRecord.php?class=1" method="post">
                                                                
                                                                <?php $status = $approveLeaves['status']; ?>
                                                            <td> <select id="status"  name="status" class="form-control" >
								<option value="" disabled selected hidden>Select Status</option>
								<option value="Approved" <?php if($status == 'Approved'){ echo  'selected';} ?> >Approved</option>
								<option value="Pending" <?php if($status == 'Pending'){ echo  'selected';} ?> >Pending</option>
								<option value="Rejected" <?php if($status == 'Rejected'){ echo  'selected';} ?> >Rejected</option>
								<option value="Approved and Utilized" <?php if($status == 'Approved and Utilized'){ echo  'selected';} ?> >Approved and Utilized</option>
								<option value="Cancelled by user" <?php if($status == 'Cancelled by user'){ echo  'selected';} ?> >Cancelled by user</option>
							</select></td>
                                                                
                                                                
                                                                <?php
                                                                                        
                                                                            $currentStatus = $approveLeaves['status'];
                                                                                                     
                                                                                                     if($currentStatus == 'Approved and Utilized'){
                                                                                                         $blockSave = true;
                                                                                                     }else if($currentStatus == 'Cancelled by user'){
                                                                                                         $blockSave = true;
                                                                                                     }else{
                                                                                                         $blockSave= false;
                                                                                                     }
                                                                    
                                                                                                     ?>
                                                                <td><center> <input type="hidden"  name="elid" value="<?php echo $approveLeaves['elid']; ?>"> <button type="submit"  name="approveSaveButt" id="login-submit"  <?php if($blockSave){ echo  'disabled';}?> class="btn btn-default">Save</button></center></td>
							       
                                                                </form>
                                                        </tr>
                                                    
                                    <?php    }
                                    
                                        }else{ ?>
                                        	<tr><td style="color: red;" colspan="9">No Records to display<td></tr>
                                       <?php  }
                                    
                                ?>
							     
							    </tbody>
							    </table>
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
  
<?php 
  
  	if(isset($_GET['class'])){
  		$class = $_GET['class'];
  		
  		?> <script>jQuery(function(){ jQuery('#leavesTab a:eq(<?php echo  $class;?>)').tab('show') });</script>
  	<?php }
  
  ?>

</body>
</html>
