<?php
session_start();
	include_once 'scripts/connect.php';
	//$conn=connect("localhost","root","","industry");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Pannonia - premium responsive admin template by Eugene Kopyov</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>

<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/ui/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.mousewheel.js"></script>
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

<script type="text/javascript" src="js/charts/chart1.js"></script>
<script type="text/javascript" src="js/charts/chart2.js"></script>
<script type="text/javascript" src="js/charts/chart3.js"></script>
<script type="text/javascript" src="js/charts/updating.js"></script>
<script type="text/javascript" src="js/charts/graph.js"></script>
<script type="text/javascript" src="js/charts/bar.js"></script>
<script type="text/javascript" src="js/charts/hBar.js"></script>
<script type="text/javascript" src="js/charts/pie.js"></script>
<script type="text/javascript" src="js/charts/pie_full.js"></script>
<script type="text/javascript" src="js/charts/donut.js"></script>
<script type="text/javascript" src="js/charts/filled1.js"></script>
<script type="text/javascript" src="js/charts/filled2.js"></script>
<script type="text/javascript" src="js/charts/filled3.js"></script>

</head>

<body>

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<!--<a href="index.html" title="" class="logo"><img src="img/logo.png" alt="" /></a>-->
			<ul class="top-menu">
				<li class="dropdown">
					<a class="user-menu" data-toggle="dropdown"><img src="img/userpic.png" alt="" /><span>User
					<b class="caret"></b></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" title=""><i class="icon-user"></i>Profile</a></li>
						<li><a href="#" title=""><i class="icon-remove"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /fixed top -->


	<!-- Content container -->
	<div id="container">

		<!-- Sidebar -->

		<!-- Sidebar -->
		<div id="sidebar">

		      
		        <div id="general">


				    <!-- Main navigation -->
			        <ul class="navigation widget">
			            <li><a href="index.php" title=""><i class="icon-home"></i>Dashboard</a></li>
						<li class="active"><a href="#" title=""><i class="icon-home"></i>Download JSON Of Data</a></li>
			            <!--<li><a href="#"><i class="icon-home"></i>Add Sensor To Area</a></li>-->
                        </ul>
		    </div>
		</div>
		

		<!-- /sidebar -->


		<!-- Content -->
		<div id="content">

		    <!-- Content wrapper -->
		    <div class="wrapper">


			<!-- Breadcrumbs line -->
			    
			<!-- /breadcrumbs line -->

			    <!-- Page header -->
			   
			    <!-- /page header -->

			    <!-- Action tabs -->
			   <!-- <div class="actions-wrapper">
				    <div class="actions">

				    	<div id="user-stats">
					        <ul class="round-buttons">
					            <li><div class="depth"><a href="" title="Add new post" class="tip"><i class="icon-plus"></i></a></div></li>
					            <li><div class="depth"><a href="" title="View statement" class="tip"><i class="icon-signal"></i></a></div></li>
					            <li><div class="depth"><a href="" title="Media posts" class="tip"><i class="icon-reorder"></i></a></div></li>
					            <li><div class="depth"><a href="" title="RSS feed" class="tip"><i class="icon-rss"></i></a></div></li>
					            <li><div class="depth"><a href="" title="Create new task" class="tip"><i class="icon-tasks"></i></a></div></li>
					            <li><div class="depth"><a href="" title="Layout settings" class="tip"><i class="icon-cogs"></i></a></div></li>
					        </ul>
				    	</div>

				    	<div id="quick-actions">
				    		<ul class="statistics">
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="blue-square"><i class="icon-plus"></i></a>
					    				<strong>12,476</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 60%;"></div></div>
									<span>User registrations</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="red-square"><i class="icon-hand-up"></i></a>
					    				<strong>621,873</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 20%;"></div></div>
									<span>Total clicks</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="purple-square"><i class="icon-shopping-cart"></i></a>
					    				<strong>562</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 90%;"></div></div>
									<span>New orders</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="green-square"><i class="icon-ok"></i></a>
					    				<strong>$45,360</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 70%;"></div></div>
									<span>General balance</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="sea-square"><i class="icon-group"></i></a>
					    				<strong>562K+</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 50%;"></div></div>
									<span>Total users</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="dark-blue-square"><i class="icon-facebook"></i></a>
					    				<strong>36,290</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 93%;"></div></div>
									<span>Facebook fans</span>
				    			</li>
				    		</ul>
				    	</div>

				    	<div id="map">
				    		<div id="google-map"></div>
				    	</div>

				    	<ul class="action-tabs">
				    		<li><a href="#user-stats" title="">Quick actions</a></li>
				    		<li><a href="#quick-actions" title="">Website statistics</a></li>
				    		<li><a href="#map" title="" id="map-link">Google map</a></li>
				    	</ul>
				    </div>
				</div>
			    <!-- /action tabs -->

		    	<!-- Search widget -->
				
		    	<form class="search widget" action="json.php" style="margin-top:10px" method="post">
		    		<div class="autocomplete-append">    		
<select id="year"  data-placeholder="Choose a Year...">
                            <option value="">Select Year</option>
							<?php 
							for($i=2005;$i<=date('Y');$i++)
							{
								?>
								<option value="<?php echo $i?>"><?php echo $i?></option>
								
							<?php }
							?>
                            
                        </select>			    		  
						  <select id="sensor"  data-placeholder="Choose a Sensor...">
                            <option value="">Select Sensor</option>
							<option value="mq6">MQ6</option>
							<option value="mq7">MQ7</option>
							<option value="mq9">MQ9</option>
							<option value="mq131">MQ131</option>
							<option value="mq135">MQ135</option>
							<option value="uv">UV</option>
                            
                        </select>
			    		<input type="submit" style="float:right"  class="btn btn-info" value="Submit" />
			    	</div>
		    	</form>
			
				<!-- /search widget -->


		    	<!-- Earnings stats widgets -->
	
	<!-- Footer -->
	
	<!-- /footer -->
<script src="jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
<script>
function jsonExport()
{
	var sensor=document.getElementById("sensor").value;
	var year=document.getElementById("year").value;
	if (window.XMLHttpRequest) 
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else 
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
				
		    }
        };
        xmlhttp.open("GET","json.php?year="+year+"&sensor="+sensor,true);
        xmlhttp.send();
}
</script>
</body>
</html>
