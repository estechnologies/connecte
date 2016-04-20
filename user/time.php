
<?php 



   $strStart = '2013-06-19 4:25'; 
   $strEnd   = '06/19/13 21:47'; 

?> 

2. Next convert the string to a date variable 
~~~ 
<?php 

   $dteStart = new DateTime($strStart); 
   $dteEnd   = new DateTime($strEnd); 

?> 
~~~ 

3. Calculate the difference 
~~~ 
<?php 

   $dteDiff  = $dteStart->diff($dteEnd); 

?> 
~~~ 
<?php 

   print $dteDiff->format("%H:%I:%S"); 

/* 
    Outputs 
    
    03:22:00 
*/ 

?> 
<?php
if(isset($_POST['submit']))
{
$date_1=$_POST['form_datetime'];
$date_2=$_POST['To_datetime'];
echo " $date_1<br>";
echo " $date_2<br>";
$date1 = new DateTime($date_1);
$date2 = new DateTime($date_2);
$interval = $date1->diff($date2);
$hours = $interval->format("%H<br>"); 
$mins=$interval->format("%I");
echo $interval->format('%a Day and %h hours');
echo "mins: $mins<br>";
echo "hours :$hours<br>";
$total_mins = $mins + ($interval->format("%H")*60);
echo "Total mins :$total_mins<br>";
   print $interval->format("%H:%I:%S"); 
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
}
else
{
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body>
<div class="container">
    
        <fieldset>
            <legend>Test</legend>
            <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" name="Pick_Time" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
			<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Date Picking</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" name="Drop_Time"value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
			<div class="form-group">
                <label for="dtp_input3" class="col-md-2 control-label">Time Picking</label>
                <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
				<input type="hidden" id="dtp_input3" value="" /><br/>
            </div>
        </fieldset>
		<form method="post" action="<?php $_PHP_SELF ?>">
		<div class="input-append date form_datetime" >
    <input size="16" class="form-control"  name="form_datetime" type="text" value="" readonly>
    <span class="add-on"><i class="icon-remove"></i></span>
    <span class="add-on"><i class="icon-calendar"></i></span>
</div>
<br>
<br>
	<div class="input-append date form_datetime" >
    <input size="16"  class="form-control" name="To_datetime" type="text" value="" >
    <span class="add-on"><i class="icon-remove"></i></span>
    <span class="add-on"><i class="icon-calendar"></i></span>
</div>
<input type="submit" name="submit"  style="color:white;background-color: #FAD922;margin-bottom:70px;" />
  
	</form>
<?php
}
?>
</div>

<script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
      
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
     
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
      
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
        startDate: "",
        minuteStep: 10
		minDate: 0
    });
</script>   

</body>

</html>