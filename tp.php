<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Project</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<style>
.clt, .clt ul, .clt li {
     position: relative;
}
.clt ul {
    list-style: none;
    padding-left: 32px;
}
.clt li::before, .clt li::after {
    content: "";
    position: relative;
    left: -12px;
}
.clt li::before {
    top: 9px;
    width: 8px;
    height: 0;
}
.clt li::after {
    height: 100%;
    width: 0px;
    top: 2px;
}


</style>
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

<body>

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<a href="index.html" title="" class="logo"><!--<img src="img/logo.png" alt="" />--></a>
			<ul class="top-menu">
				<li><a class="fullview"></a></li>
				<li class="dropdown">
					<a class="user-menu" data-toggle="dropdown"><img src="img/userpic.png" alt="" /><span>
					 
					<b class="caret"></b></span></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php" title=""><i class="icon-user"></i>Profile</a></li>
						<li><a href="scripts/logout.php" title=""><i class="icon-remove"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /fixed top -->


	<!-- Content container -->
	<div id="container">

		<!-- Sidebar -->
		<div id="sidebar">

			<div class="sidebar-tabs">
		      
		        <div id="general">


				    <!-- Main navigation -->
			        <ul class="navigation widget">
			            <li class="active"><a href="#" title=""><i class="icon-home"></i>Dashboard</a></li>
			            <li><a href="secondaryregistration.php" title=""><i class="icon-home"></i>Create Secondary User</a></li>
						<li><a href="secondaryprivileges.php" title=""><i class="icon-home"></i>Assign Privileges To User</a></li>
						<li><a href="addsensor.php"><i class="icon-home"></i>Add Sensor To Element</a></li>
						</ul>
		    </div>
		</div>
		</div>



		<div id="content">
		<div class="well row-fluid">
		<div class="control-group">
	                                <div class="controls">
	                                <div class="clt" style="width:300px">
  <ul>
    <li>
     Mumbai
      <ul>
        <li>
          Boiler
          <ul>
            <li><input type="checkbox">Heat</li>
            <li><input type="checkbox">Temperature</li>
          </ul>
        </li>
        <li>
          Yellow
          <ul>
            <li><input type="checkbox">Banana</li>
          </ul>
        </li>
      </ul>
    </li>
  
 </div>
	  <div class="clt" style="top:-130px;left:350px;width:300px">
	<ul>
	<li>
      Meat
      <ul>
        <li><input type="checkbox">Beef</li>
        <li><input type="checkbox">Pork</li>
      </ul>
    </li>
  </ul>
 </div>                                
	                            </div>
        </div>
		</div>
		</div>
		</body>
</html>
