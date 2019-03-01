<?php
session_start();
if(isset($_SESSION['cid']) && $_SESSION['cid']==0)
{
	include_once 'scripts/connect.php';
	$conn=connect("localhost","root","","industry");
    ?>
<!DOCTYPE html>
<html lang="en">
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

<body>

<!-- Fixed top -->
<div id="top">
    <div class="fixed">
        <a href="index.html" title="" class="logo"><!--<img src="img/logo.png" alt="" />--></a>
        <ul class="top-menu">
            <li><a class="fullview"></a></li>
            <li class="dropdown">
                <a class="user-menu" data-toggle="dropdown"><img src="img/userpic.png" alt="" /><span><?php 
					$name="";
					$query="select name from users where userid=".$_SESSION['userid'];
					$result=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($result);
					echo $row['name'];
					?> <b class="caret"></b></span></a>
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
                    <li><a href="mainindex.php" title=""><i class="icon-home"></i>Dashboard</a></li>
                    <li><a href="registrationform.php" title="" class="expand"><i class="icon-reorder"></i>Create New User</a>
                    </li>

                    <li><a href="company.php" title="" class="expand"><i class="icon-reorder"></i>Add Company Details</a>
                    </li>
                    
						<li><a href="addelement.php" title="" class="expand"><i class="icon-reorder"></i>Add Element in Company</a>
                        </li>
						
            </div>


        </div>
    </div>
    <!-- /sidebar -->


    <!-- Content -->
    <div id="content">
	 <div class="widget">
                	<div class="navbar"><div class="navbar-inner"><h6>Company Details</h6></div></div>
                    <div class="table-overflow">
					<form id="validate" action="editcompany.php" method="get">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact Person</th>
                                    <th>Person</th>
									<th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
    		                                $query="select * from companydetails";
    		                                $result=mysqli_query($conn,$query);
    		                                while($row=mysqli_fetch_array($result))
    		                                {
    		                                	?>
    								
    												<tr>
    							
    													<td><?php echo $row['name']?></td>
    													<td><?php echo $row['contact_person']?></td>
    													<td><?php echo $row['phoneno']?></td>    													
    													<?php $cid=$row['cid']?>
    													<td><a href="editcompany.php?cid=<?php echo $cid;?>" i class="material-icons">Edit</i></a>
    											<a href="scripts/deletecompany.php?cid=<?php echo $cid;?>" i class="material-icons">Delete</i></a></td>

    												</tr>
    									<?php
    		                                }
    		                                ?>	    
                            </tbody>
							
                        </table>
						</form>
						
                    </div>
                </div>
	
                        
				    	
    </div>



</body>
</html>
    <?php
}
else
    header('Location:login.html');
?>