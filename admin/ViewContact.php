<?php 
	
	session_start();

	if(!isset($_SESSION['admin']['username'])){
		header("Location:index.php");
	}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
 <title>View Contact Messages</title>
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
text-align:center;
}
	td {
    white-space: nowrap;
text-align:center;
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
<div class="main">
<div class="container" style="margin-bottom:50px;">
<?php
    	if(isset($_POST['removeSubmit'])){
        	  $dbhost = 'localhost';
            $dbuser = 'connecte_admin';
            $dbpass = 'YBSwb#2015';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $ContactMessageId = $_POST['ContactMessageId'];
          
            $sql = " DELETE FROM ContactMessages WHERE CM_Id = $ContactMessageId" ;
            mysql_select_db('connecte_timer');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }  ?><div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center class="message"> <label style="font-size: 14px;color:green;"><?php echo "Message has been deleted successfully";?></label></center>
  </div><?php
            mysql_close($conn);
         }
		?>					 	   
	 
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
	
			
			
							<?php

							// databases
							
							require 'connect.php';
							$database = new connect();
							
							
							
							
							/*
							 * reteriving orders according search or whole
							 */
							$pageNumber = intval($_GET['page']);
							
							
							if($pageNumber == null or $pageNumber == '1'){
								$pageNumber = 0;
							}else{
								$pageNumber = ($pageNumber*5)-5;
							}
							
							$query = "SELECT * FROM ContactMessages  ORDER BY CM_Id DESC  LIMIT $pageNumber,5 ";
							if(isset($_POST['search'])){

$search_term = htmlspecialchars($_POST['search_box']);



$query = "SELECT * FROM ContactMessages   WHERE code='$search_term' ORDER BY CM_Id DESC LIMIT $pageNumber,5";

$checkQuery= mysql_query($query);
if(mysql_num_rows($checkQuery) <= 0){
	$noFound= "The entered company code is not found in our records.$sesrch_term";
}else{
	$noFound = "";
}

	
}


							if(isset($_POST['reset'])){





$query = "SELECT * FROM ContactMessages  ORDER BY CM_Id DESC  LIMIT $pageNumber,5 ";


}




$resultQuery = mysql_query($query);




								/*
								 *page number counts 
								 */


							$pagesTotalCount = "SELECT * FROM ContactMessages";

							$resultPagesTotalCount = mysql_query($pagesTotalCount);
							$pages = mysql_num_rows($resultPagesTotalCount);

							if(isset($_POST['search'])){
								$pages = mysql_num_rows($resultQuery);
							}
							
							$pageCount = floatval($pages/5);
							$pageCount = ceil($pageCount);


							?>
 <center> <strong><h3 style="font-weight: 700;margin-top:10px;margin-bottom:50px">Contact Messages</h3></strong></center>
					
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
							
							
							 <div class="table-responsive" style="margin-top:30px;">
							 <table class="table table-striped"  id="someid">
							
			<thead>
			  <tr>					 <th><strong>Time</strong> </th> 
			  					 <th ><strong>Name</strong></th> 
								 <th ><strong>Email</strong></th> 
								 <th><strong>Subject</strong></th> 
								   <th> <strong>Message</strong></th> 

                                                                    <th> <strong>Delete</strong></th> 
								 </tr>
			</thead>
			<tbody>
			
			
			
			
			 <?php
			 if(mysql_num_rows($resultQuery) > 0){
			 	
			 
			 while($row = mysql_fetch_array($resultQuery)){ ?>
							<tr>
								 
								  <td><?php echo $row['time'];?></td> 
								 <td><?php echo $row['name'];?></td>
								   <td><?php echo $row['email'];?></td> 
								 <td><?php echo $row['subject'];?></td> 
								  <td><?php echo $row['message'];?></td> 
								 <td><center><form action="ViewContact.php" method="post"> <input type="hidden" name="ContactMessageId" value="<?php echo $row['CM_Id'];?>" ><button type="submit" name="removeSubmit" id="login-submit"  class="btn btn-default">Remove</button></form></center></td>
							</tr>
							  
								 <?php } 
			 }else{
			 	if(isset($noFound)){
			 		echo "<tr><td style='color:red;' colspan='6'>$noFoundy</td></tr>";
			 	}else{
			 		echo "<tr><td style='color:red;' colspan='6'>No Records to display</td></tr>";
			 	}
			 	
			 }
								 ?>
			</tbody>
		  </table>
						
							
  
						
					</div>
										   <div>
        <ul class="pagination pull-right" >
        
        <!--
        
        	pagnation reference
        	
        	  
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
            
            
            -->
            <?php 
            
            	for($i = 1;$i <= $pageCount; $i++){
            		?>  <li><a href="ViewContact.php?page=<?php echo $i;?>"><?php  echo $i; ?></a></li> <?php 
            	}
            
            ?>
            
            
        </ul>
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
</body>
</html>