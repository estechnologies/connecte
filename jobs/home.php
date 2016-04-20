<?php

	session_start();
	require 'connect.php';
	
	$database =  new connect();
	
	if(!isset($_SESSION['id']['userid'])){
		header("Location:index.php?msg=session not found");
	}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>portal </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="home.php" class="site_title"><i class="fa fa-desktop"></i> <span>COMPANY</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php echo $_SESSION['id']['photo_loc']?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo $_SESSION['id']['firstname']?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="home.php"><i class="fa fa-home"></i> Home </a>
                                </li>
                                <li>
									<a href="form.php"><i class="fa fa-edit"></i>Edit</a>
                                </li>
                                <li><a><i class="fa fa-comment-o"></i>Notifications<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="inbox.html">Inbox</a>
                                        </li>
                                        <li><a href="calender.html">Calender</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
									<a href="tables_dynamic.html"><i class="fa fa-search"></i> Search </a>
                                </li>
                                <li>
									<a href="history.php"><i class="fa fa-history"></i>History</a>
                                </li>
								<li>
									<a href="resume.php"><i class="fa fa-file-o"></i> Resume<span class="fa fa-chevron-down"></span></a>
                                </li>
								<li>
									<a href="updates.php"><i class="fa fa-pencil"></i>Updates<span class="fa fa-chevron-down"></span></a>
                                </li>
								<li>
									<a href="reports.php"><i class="fa fa-bug"></i> Reports<span class="fa fa-chevron-down"></span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo $_SESSION['id']['photo_loc']?>" alt=""><?php echo $_SESSION['id']['firstname']?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="userLogout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="<?php echo  $_SESSION['id']['photo_loc']?>" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="<?php $_SESSION['id']['photo_loc']?>" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="<?php echo $_SESSION['id']['photo_loc']?>" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="<?php echo $_SESSION['id']['photo_loc']?>" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>User Profile</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    <ul>
						<?php 
						
					//profile	
					$id = $_SESSION['id']['userid'];
					$first = $_SESSION['id']['firstname'];
					$last = $_SESSION['id']['lastname'];
					$dob = $_SESSION['id']['dateofbirth'];
					$nationality = $_SESSION['id']['nationality'];
					$pancard = $_SESSION['id']['pancard'];
					$gender = $_SESSION['id']['gender'];
					$mobile = $_SESSION['id']['mobile'];
					$email = $_SESSION['id']['email'];
					
					$address = $_SESSION['id']['address'];
					$preferskill = $_SESSION['id']['preferskill'];
					$preferLocation = $_SESSION['id']['preferlocation'];
					$preferCompanies = $_SESSION['id']['prefercompanies'];
					$preferctc = $_SESSION['id']['preferctc'];
					
					echo "<li>FirstName: ".$first."</li>";
					echo "<li>LastName: ".$last."</li>";
					echo "<li>DateOfBirth : ".$dob."</li>";
					echo "<li>nationality : ".$nationality."</li>";
					echo "<li>Pancard : ".$pancard."</li>";
					echo "<li>Gender: ".$gender."</li>";
					echo "<li>mobile: ".$mobile."</li>";
					echo "<li>email : ".$email."</li>";
					echo "<li>address: ".$address."</li>";
					echo "<li>prefer skill: ".$preferskill."</li>";
					echo "<li>prefer location : ".$preferLocation."</li>";
					echo "<li>prefer comapnies: ".$preferCompanies."</li>";
					echo "<li>prefer ctc: ".$preferctc."</li>";
				?>
				
				
				</ul>
				
				
				
				<h2>Experience</h2>
				<?php 
						$expFile = "experience/".$id.".xml";
						$exp = simplexml_load_file($expFile);
						
						foreach ($exp->xpath("/person/experience") as $expDetails){
							print "<ul>";
							
							print "<li>";
							print "organization: ".$expDetails->organization;
							print  "</li>";
							
							print "<li>";
							print "jobtype : ".$expDetails->jobtype;
							print  "</li>";
							
							
							print "<li>";
							print "organization name : ".$expDetails->organizationName;
							print  "</li>";
							
							print "<li>";
							print " designation : ".$expDetails->designation;
							print  "</li>";
							
							
							print "<li>";
							print " noticeperiod : ".$expDetails->noticeperiod;
							print  "</li>";
							
							print "<li>";
							print " fixedctc : ".$expDetails->fixedctc;
							print  "</li>";
							
							
							print "<li>";
							print "  variable ctc: ".$expDetails->variablectc;
							print  "</li>";
							
							
							print "<li>";
							print " joiningdate: ".$expDetails->joiningdate;
							print  "</li>";
						
							print "</ul>";
							
						}
						
						
						echo "<h2>primary skills</h2>";
						foreach ($exp->xpath("/person/primary") as $primary){
							print "<ul>";
							
							print "<li>";
							print " skill Name: ".$primary->skillName;
							print  "</li>";
							
							print "<li>";
							print " from: ".$primary->from;
							print  "</li>";
							
							
							print "<li>";
							print " to: ".$primary->to;
							print  "</li>";
							
							
							print "<li>";
							print " project Name: ".$primary->projectName;
							print  "</li>";
			
							print "<li>";
							print " team Size: ".$primary->teamSize;
							print  "</li>";
							
							print "<li>";
							print "role: ".$primary->role;
							print  "</li>";
							
							print "<li>";
							print "project Description: ".$primary->projectDescription;
							print  "</li>";
							
							print "<li>";
							print "companyName: ".$primary->companyName;
							print  "</li>";
							
							
							print "</ul>";
							
						}
						
						
						echo "<h2>Secondary Skills</h2>";
						
						foreach ($exp->xpath("/person/secondary") as $second){
							print "<ul>";
								
							print "<li>";
							print " skill Name: ".$second->skillName;
							print  "</li>";
								
							print "<li>";
							print " from: ".$second->from;
							print  "</li>";
								
								
							print "<li>";
							print " to: ".$second->to;
							print  "</li>";
								
								
							print "<li>";
							print " project Name: ".$second->projectName;
							print  "</li>";
								
							print "<li>";
							print " team Size: ".$second->teamSize;
							print  "</li>";
								
							print "<li>";
							print "role: ".$second->role;
							print  "</li>";
								
							print "<li>";
							print "project Description: ".$second->projectDescription;
							print  "</li>";
								
							print "<li>";
							print "companyName: ".$second->companyName;
							print  "</li>";
								
							print "</ul>";
						}
						
						
						echo "<h2>Knowledge </h2>";
					
						foreach ($exp->xpath("/person/knowledge") as $know){
							print "<ul>";
							
							print "<li>";
							print "knowledge skills : ".$know->skillName;
							print  "</li>";
							
							print "</ul>";
						}
				?>	
				
				<?php 
				
					$studyFile = "study/".$id.".xml";
					$study = simplexml_load_file($studyFile);
						
					echo "<h2>Study</h2>";
					foreach ($study->xpath("/study/group") as $group){
						print "<ul>";
						
						print "<li>";
						print "education :".$group->education;
						print "</li>";
						
						print "<li>";
						print "specialization :".$group->specialization;
						print "</li>";
						
						print "<li>";
						print "institute :".$group->institute;
						print "</li>";
						
						
						print "<li>";
						print "university :".$group->university;
						print "</li>";
						
						print "<li>";
						print "from :".$group->from;
						print "</li>";
						
						print "<li>";
						print "to :".$group->to;
						print "</li>";
						
						
						print "<li>";
						print "aggregate :".$group->aggregate;
						print "</li>";
						
						print "</ul>";
						
					}
				
					echo "<h2>Certificates</h2>";
					
					
					foreach ($study->xpath("/study/certificate") as $cer){
						print "<ul>";
						
						print "<li>";
						print "Name :".$cer->name;
						print "</li>";
						
						print "<li>";
						print "awarded :".$cer->awarded;
						print "</li>";
						
						print "<li>";
						print "date :".$cer->date;
						print "</li>";
						
						
						print "<li>";
						print "validity :".$cer->validity;
						print "</li>";
						
						
						print "</ul>";
					}
				
				?>	
                </div>

                <!-- footer content -->
               <footer>
			<div class="container" >
				<div class="footer col-md-6" style="text-align:left;"> 
					<a href="aboutus.php" target="_blank" style="font-size: 15px;">About us</a>&nbsp;&nbsp;&nbsp;
					<a href="team.html" target="_blank" style="font-size: 15px;">Team</a>&nbsp;&nbsp;&nbsp; 
					<a href="Terms_Privacy.html" target="_blank" style="font-size: 15px;">Terms & Privacy</a>
				</div>
				<div class="footer col-md-6" style="text-align:right;">
					<a href="http://www.yodhaa.com" target="_blank" style="font-size: 15px;">All rights reserved.Yodhaa Business Solutions Pvt Ltd-2016</a>
				</div>
			</div>
	        </footer>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>

    <!-- image cropping -->
    <script src="js/cropping/cropper.min.js"></script>
    <script src="js/cropping/main.js"></script>

    
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
    <!-- moris js -->
    <script src="js/moris/raphael-min.js"></script>
    <script src="js/moris/morris.js"></script>
    <script>
        $(function () {
            var day_data = [
                {
                    "period": "Jan",
                    "Hours worked": 80
                },
                {
                    "period": "Feb",
                    "Hours worked": 125
                },
                {
                    "period": "Mar",
                    "Hours worked": 176
                },
                {
                    "period": "Apr",
                    "Hours worked": 224
                },
                {
                    "period": "May",
                    "Hours worked": 265
                },
                {
                    "period": "Jun",
                    "Hours worked": 314
                },
                {
                    "period": "Jul",
                    "Hours worked": 347
                },
                {
                    "period": "Aug",
                    "Hours worked": 287
                },
                {
                    "period": "Sep",
                    "Hours worked": 240
                },
                {
                    "period": "Oct",
                    "Hours worked": 211
                }
    ];
            Morris.Bar({
                element: 'graph_bar',
                data: day_data,
                xkey: 'period',
                hideHover: 'auto',
                barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                ykeys: ['Hours worked', 'sorned'],
                labels: ['Hours worked', 'SORN'],
                xLabelAngle: 60
            });
        });
    </script>
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <!-- /datepicker -->
</body>

</html>