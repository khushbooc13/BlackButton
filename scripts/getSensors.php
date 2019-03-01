<?php
session_start();
include_once 'connect.php';
$conn=connect("localhost","root","","industry");
$query="select name from companydetails where cid=?";
if($stmt=$conn->prepare($query)) {
    $stmt->bind_param("s", $_SESSION['cid']);
    if ($stmt->execute()) {
        $stmt->bind_result($name);
        $stmt->fetch();
        $conn = connect("localhost", "root", "", $name);
    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Project</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>

    <script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

    <script type="text/javascript" src="js/plugins/ui/jquery.easytabs.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/plugins/ui/prettify.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.bootbox.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.timepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.fullcalendar.min.js"></script>
    <script type="text/javascript" src="js/plugins/ui/jquery.elfinder.js"></script>

    <script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/plupload.html4.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/plupload.html5.js"></script>
    <script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

    <script type="text/javascript" src="js/plugins/forms/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.autosize.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.inputmask.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.listbox.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.validation.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.form.wizard.js"></script>
    <script type="text/javascript" src="js/plugins/forms/jquery.form.js"></script>

    <script type="text/javascript" src="js/plugins/tables/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="js/files/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/files/functions.js"></script>

    <script type="text/javascript" src="js/charts/graph.js"></script>
    <script type="text/javascript" src="js/charts/chart1.js"></script>
    <script type="text/javascript" src="js/charts/chart2.js"></script>
    <script type="text/javascript" src="js/charts/chart3.js"></script>

</head>



     <label class="control-label">Select Sensors: <span class="text-error">*</span></label>
	   <div class="controls">
	                           
		<select name="sid" id="sid" tabindex="2"  onChange="showUnits(this.value);" required>
	                                    		<option value="">Select</option>
										   <?php
										   $id = intval($_GET['eid']);
										   			$sql = 'SELECT * from sensor where eid=?';
										   			$stmt = $conn->prepare($sql);
										   			$stmt->bind_param('i', $id);
										   			$stmt->execute();
										   			$res = $stmt->get_result();
													while($row = $res->fetch_array(MYSQLI_ASSOC))
													{ 
														?>
														<option value="<?php echo $row['sid'];?>"><?php echo $row['Name'];?></option>
						                                <?php
													}
											?>
	                                    </select>
	                                    </div>
	      



	</html>