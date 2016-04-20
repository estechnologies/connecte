<?php 
	session_start();

	if(!isset($_SESSION['user']['UserId'])){
		header("Location:index.php");
	}
	$userId = $_SESSION['user']['UserId'];

	$companyCode = $_SESSION['user']['code'];
	
	require 'connect.php';
	$database =  new connect();
	
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
}	th {
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

    
   				
											
											
<div class="main" id="mainborder" style="margin-bottom:51px;">
<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading" id="leavesTab">
                        <ul class="nav nav-tabs">
                        <li class="active"><a href="#Holidayslist" data-toggle="tab">Holiday Calendar</a></li>
                              <?php 
        
        /*
        *   if apply leaves is permitted
        */
            if($_SESSION['user']['ApplyLeaves'] == '1'){
    ?>
    
                            <li ><a href="#ApplyLeaves" data-toggle="tab">Apply Leaves</a></li>
                            <li ><a href="#LeaveStatus" data-toggle="tab">Leave Status</a></li>
                            
                            
                    <?php } ?>
                             <?php    if($_SESSION['user']['ApproveLeaves'] == '1'){ ?>
                              <li ><a href="#ApproveLeaves" data-toggle="tab">Approve Leaves</a></li>
                               <?php } ?>
                        </ul>
                </div>
    
    
    
     
    
					<!-- 	
	
							apply leaves
	
											-->
					<?php 
					
					$leaveTypeQuery = "SELECT * FROM LeavesType WHERE companyCode='$companyCode'";
					$resultLeaveType = mysql_query($leaveTypeQuery);
					
					
					
					?>		
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane " id="ApplyLeaves">
							<div class="container" style="margin-bottom:100px">
								
                                
								 <div class="col-md-12 table-responsive">
								 <center style="margin-bottom:50px;"><strong><h3 style="font-weight:700">Apply Leaves</h3></strong></center>
                                 <?php    if($_SESSION['user']['ApplyLeaves'] == '1'){ ?>
							<table  class="table table-striped table-bordered table-hover table-condensed">
							<thead>
							  <tr>
							    	<th>Leave Type</th>
							    	<th>Total Leaves</th>
							    	<th>Leaves Utilized</th>
							    	<th>Remaining Leaves</th>
							    	<th>Apply</th>
							    </tr>
							</thead>
							    <tbody>
							     
							       <!-- 
							       
											approve leaves							       
							        -->
							       	
							       	<?php 
								       
							       		if(mysql_num_rows($resultLeaveType) > 0){
									       	while($leavesType = mysql_fetch_array($resultLeaveType)){
									       		$leavename = $leavesType['leaveName'];
									       		$leaves = intval($leavesType['leaves']);
									       		$empLeavesQuery  = "SELECT * FROM empLeaves WHERE userid='$userId' AND leavetype='$leavename' AND code='$companyCode'";
									       		$empLeavesResult = mysql_query($empLeavesQuery);
									       		$empLeavesUsed = 0;
									       		while($empLeaveCal = mysql_fetch_array($empLeavesResult)){
									       			$empLeavesUsed += intval($empLeaveCal['days']);
									       		}
									       		
									       		$remainingLeaves = $leaves - $empLeavesUsed;
								       		
								       		
							       		?>
							       		 <tr>
							       		<td><?php echo  $leavename;?></td>
							       		<td><?php echo $leaves; ?></td>
							       		<td><?php echo  $empLeavesUsed;?></td>
							       		<td><?php echo  $remainingLeaves;?></td>
							       		<td><center><form   action="UserApplyLeaves.php" method="GET"><input type="hidden" name="remaining" value="<?php echo $remainingLeaves; ?>" > <input type="hidden" name="leaveType" value="<?php echo $leavename; ?>" > <button type="submit"  name="login-submit" id="login-submit" <?php if($remainingLeaves <= 0){ echo "disabled";} ?> class="btn btn-default">Apply</button></form></center></td>
							       		</tr>
							       		
							      <?php
									 	}
							       	}else{
											echo  "<tr><td style='color : red;' colspan='5'>No records to display</td></tr>"; 		
									 	}
							       	
							       	?> 
							    </tbody>
							    </table>
                            <?php } ?>
							</div>	
														</div>
						</div>
						
						<!-- 
								
									leave status 
						
										-->
						<?php
						
                        
                                if(isset($_POST['userCancel'])){
                                    $elid = htmlspecialchars($_POST['elid']);
                                    $cancelQuery = "UPDATE empLeaves SET status='Cancelled by user' , days='0' WHERE elid='$elid'";
                                    $cancelResult = mysql_query($cancelQuery);
                                    
                                    $cancelledmsg = "Status has been updated successfully.";
                                   
                                }
                        
								$leaveStatusQuery = "SELECT * FROM empLeaves WHERE userid='$userId'";
								$leavesResult = mysql_query($leaveStatusQuery);
                        
                        		
                                
                               
						?>

										
						<div class="tab-pane " id="LeaveStatus">
							<div class="container" style="margin-bottom:100px">
								<center><p style="color: green;"><?php if(isset($cancelledmsg)){ echo $cancelledmsg; }else {echo "";}?></p></center>
								<div class="col-md-12 table-responsive">
								<center style="margin-bottom:50px;"><strong><h3 style="font-weight:700">Leave Status</h3></strong></center>
                                  <?php   if($_SESSION['user']['ApplyLeaves'] == '1'){ ?>  
							<table  class="table table-striped table-bordered table-hover table-condensed">
							<thead>
							  <tr>
							    	<th>Leave Type</th>
							    	<th>Start Date</th>
							    	<th>End Date</th>
							    	<th>Leave days</th>
							    	<th>Subject</th>
							    	<th>Reason</th>
							    	<th>Status</th>
							    	<th>Cancel</th>
							    </tr>
							</thead>
							    <tbody>
							     
							     
                                    <?php
                                    if(mysql_num_rows($leavesResult) >0){
                                    	
                                            while($statusLeaves = mysql_fetch_array($leavesResult)){
                                                ?>
                                                        <tr>
                                                                <td><?php echo $statusLeaves['leavetype']; ?></td>
                                                                <td><?php echo $statusLeaves['startdate']; ?></td>
                                                                <td><?php echo $statusLeaves['enddate']; ?></td>
                                                                <td><?php echo $statusLeaves['days']; ?></td>
                                                                <td><?php echo $statusLeaves['subject']; ?></td>
                                                                <td><?php echo $statusLeaves['reason']; ?></td>
                                                                <td><?php echo $statusLeaves['status']; ?></td>
                                                            
                                                            <?php 
                                                            
                                                                    $leaveStatus = $statusLeaves['status'];
                                                
                                                                    if($leaveStatus == 'Pending'){
                                                                        $cancelResult = false;
                                                                    }else if($leaveStatus == 'Approved'){
                                                                        $cancelResult = false;
                                                                    }else{
                                                                        $cancelResult = true;
                                                                    }
                                                            
                                                            ?>
                                                            
                                                            
                                                           <td><center><form  action="UserLeaves.php?class=2" method="post" ><input type="hidden" name="elid" value="<?php echo $statusLeaves['elid']; ?>" /><button <?php if($cancelResult){ echo 'disabled';}?> type="submit" name="userCancel" id="statusLeavesCancel"  class="btn btn-default">Cancel</button></form></center></td>
                                                            
                                                        </tr>
                                            <?php }
                                    }else{
                                    
                                    	echo  "<tr><td style='color : red;' colspan='8'>No records to display</td></tr>";
                                    }
                                
                                    ?>
							     
							    </tbody>
							    </table>
                                    <?php } ?>
							</div>	
							</div>
		
                    </div>
                        
                        
                  
                        
                        
                        <!-- 

                                        approve Leaves 
                                
                                    -->
                        <?php
                        
                                if(isset($_POST['approveLeavessubmit'])){
                                                                    $status = htmlspecialchars($_POST['status']);
                                                                    $adminElid = htmlspecialchars($_POST['adminElid']);
                                                                    
                                                                    if(status == 'Rejected'){
                                                                    	$approveUpdateQuery = "UPDATE empLeaves SET status='$status',days='0' WHERE elid='$adminElid'";
                                                                    	$approveUpdateResult = mysql_query($approveUpdateQuery);
                                                                    }else {
	                                                                    $approveUpdateQuery = "UPDATE empLeaves SET status='$status' WHERE elid='$adminElid'";
	                                                                    $approveUpdateResult = mysql_query($approveUpdateQuery);
                                                                    }
                                                                    
                                                                    $updateLeaveMsg = "Status has been updated successfully.";
                                                                }
                                
                                $alQuery = "SELECT * FROM empLeaves WHERE approvalBy='$userId'";
                                $resultApprove = mysql_query($alQuery);
                        
                        ?>
                        
						<div class="tab-pane " id="ApproveLeaves">
							<div class="container" style="margin-bottom:100px">
							<center><p style="color: green;"><?php if(isset($updateLeaveMsg)){ echo $updateLeaveMsg; }else {echo "";}?></p></center>
								<div class="col-md-12 table-responsive">
								<center style="margin-bottom:50px;"><strong><h3 style="font-weight:700">Approve Leaves</h3></strong></center>
                                     <?php    if($_SESSION['user']['ApproveLeaves'] == '1'){ ?>
							<table  class="table table-striped table-bordered table-hover table-condensed">
							<thead>
							  <tr>
                                    <th>User id</th>
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
							     	if(mysql_num_rows($resultApprove)){
                                        while($alRow = mysql_fetch_array($resultApprove)){?>
                                                    <tr>
                                                        <form action="UserLeaves.php?class=3" method="post">
                                                        <?php $approvalUID = $alRow['userid'];?>
                                                        <td><?php echo  $approvalUID; ?></td>
                                                        <?php 
                                                                                          
                                                                
                                                                                          
                                                                $getUsernameResult = mysql_query("SELECT * FROM AddUser WHERE UserId='$approvalUID' AND code='$companyCode'");
                                                                $getUsername = mysql_fetch_array($getUsernameResult);
                                                            
                                                        ?>
                                                        <td><?php echo $getUsername['UserName']; ?></td>
                                                        <td><?php echo  $alRow['leavetype']; ?></td>
                                                        <td><?php echo  $alRow['startdate']; ?></td>
                                                        <td><?php echo  $alRow['enddate']; ?></td>
                                                        <td><?php echo  $alRow['days']; ?></td>
                                                        <td><?php echo  $alRow['subject']; ?></td>
                                                        <td><?php echo  $alRow['reason']; ?></td>
                                                        
                                                        <?php $alStatus = $alRow['status']; ?>
                                                        
                                                        <td> <select style="width:160px;" id="status"  name="status" class="form-control">
                                                           
                                                            <option value="Approved" <?php if($alStatus == "Approved"){ echo "selected"; }?> >  Approved</option>
                                                            <option value="Pending"  <?php if($alStatus == "Pending"){ echo "selected"; }?> >Pending</option>
                                                            <option value="Rejected" <?php if($alStatus == "Rejected"){ echo "selected"; } ?> >Rejected</option>
                                                            <option value="Approved and Utilized" <?php if($alStatus == "Approved and Utilized"){ echo "selected"; } ?> >Approved and Utilized</option>
                                                            <option value="Cancelled by user" <?php if($alStatus == "Cancelled by user"){ echo "selected"; } ?> >Cancelled by user</option>
                                                        </select></td>
                                                        <?php
                                                                                    
                                                                    if($alStatus == 'Approved and Utilized') {
                                                                        $elResult = true;
                                                                    }else if($alStatus == 'Cancelled by user') {
                                                                        $elResult = true;
                                                                    }else{
                                                                        $elResult = false;
                                                                    }                    
                                                                                                      
                                                        ?>
                                                        
                                                        <td><center><input type="hidden" name="adminElid" value="<?php echo $alRow['elid']; ?>"><button <?php if($elResult){ echo  'disabled';}?> type="submit" name="approveLeavessubmit" id="login-submit"  class="btn btn-default">Save</button></center></td>
                                                        </form>
                                                    </tr>
                                     <?php   }
                                     
							     	}else{
							     		echo  "<tr><td style='color : red;' colspan='10'>No records to display</td></tr>";
							     	}
                                    ?>
							    </tbody>
							    </table>
                                    
                                    <?php } ?>
							</div>	
							</div>
						</div>
						
						<!-- 
						
								Holiday  name 
						
						 -->
						 <?php 
						 
						 	$holidayQuery ="SELECT * FROM HolidayList WHERE companyCode='$companyCode'";
						 	$holidayResult = mysql_query($holidayQuery);
						 ?>
						<div class="tab-pane active" id="Holidayslist">
							<div class="container" style="margin-bottom:100px">
								
								<div class="col-md-6 table-responsive">
								<center style="margin-bottom:50px;"><strong><h3 style="font-weight: 700;">Holiday Calendar</h3></strong></center>
								<?php if(mysql_num_rows($holidayResult) >= 1){?>
							<table  class="table table-striped table-bordered table-hover table-condensed">
							<thead>
							  <tr>
							    	<th>Holiday Name</th>
							    	<th>Date</th>
							    	
							    </tr>
							</thead>
							    <tbody>
							      
							       	<?php 
							       	
							       			while($holidays = mysql_fetch_array($holidayResult)){
							       				?><tr>
							       					<td><?php echo $holidays['Holidayname']; ?></td>
							       					<td><?php echo $holidays['date'];?></td>
							       					</tr>
							       		<?php 	}
							       	?>
							    </tbody>
							    </table>
							    <?php }else{
							    	
							    	echo "<center><h6 style='color:red; font-size:14px;'>No Holidays Found </h6></center>";
							    }
							    ?>
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
  <?php 
  
  	if(isset($_GET['class'])){
  		$class = $_GET['class'];
  		
  		?> <script>jQuery(function(){ jQuery('#leavesTab a:eq(<?php echo  $class;?>)').tab('show') });</script>
  	<?php }
  
  ?>
  
</body>
</html>