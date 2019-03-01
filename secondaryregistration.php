<?php
include_once 'scripts/connect.php';
$conn=connect("localhost","root","","industry");
session_start();
if(isset($_SESSION['cid']) && $_SESSION['cid']!=0 && $_SESSION['pid']==1)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
        <title>Project</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <!--[if IE 8]>
        <link href="css/ie8.css" rel="stylesheet" type="text/css"/><![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript"
                src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <script type="text/javascript"
                src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>

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
                    <a class="user-menu" data-toggle="dropdown"><img src="img/userpic.png" alt=""/><span><?php 
					$name="";
					$query="select name from users where userid=".$_SESSION['userid'];
					$result=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($result);
					echo $row['name'];
					?> <b
                                    class="caret"></b></span></a>
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

                    <!-- Sidebar user -->
                    <!--<div class="sidebar-user widget">
                        <div class="navbar"><div class="navbar-inner"><h6>Wazzup, Eugene!</h6></div></div>
                        <a href="#" title="" class="user"><img src="http://placehold.it/210x110" alt="" /></a>
                        <ul class="user-links">
                            <li><a href="" title="">New users<strong>+12</strong></a></li>
                            <li><a href="" title="">New orders<strong>+156</strong></a></li>
                            <li><a href="" title="">New messages<strong>+45</strong></a></li>
                        </ul>
                    </div>
                    <!-- /sidebar user -->

                    <!--<div class="general-stats widget">
                        <ul class="head">
                            <li><span>Users</span></li>
                            <li><span>Orders</span></li>
                            <li><span>Visits</span></li>
                        </ul>
                        <ul class="body">
                            <li><strong>116k+</strong></li>
                            <li><strong>1290</strong></li>
                            <li><strong>554</strong></li>
                        </ul>
                    </div>-->

                    <!-- Main navigation -->
                    <ul class="navigation widget">
                        <li><a href="index.php" title=""><i class="icon-home"></i>Dashboard</a></li>
			            <li><a href="#" title=""><i class="icon-home"></i>Create Secondary User</a></li>
						<li><a href="secondaryprivileges.php" title=""><i class="icon-home"></i>Assign Privileges To User</a></li>
						<li><a href="addsensor.php"><i class="icon-home"></i>Add Sensor To Element</a></li>
						<li class="active"><a href="charts.php"><i class="icon-home"></i>Get Sensor Data</a></li>


            </div>
        </div>
        </div>
        <!-- /sidebar -->


        <!-- Content -->
        <div id="content">

            <form id="validate" class="form-horizontal" method="post" action="scripts/secondaryinsert.php">
                <fieldset>

                    <!-- Form validation -->
                    <div class="widget">
                        <div class="navbar">
                            <div class="navbar-inner"><h6>Form validation</h6></div>
                        </div>
                        <div class="well row-fluid">

                            <div class="control-group">
                                <label class="control-label">Name: <span class="text-error">*</span></label>
                                <div class="controls">
                                    <input type="text" class="span6" name="req" id="req" />
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">Email address: <span class="text-error">*</span></label>
                                <div class="controls">
                                    <input type="text" value="" class="span6" placeholder="Email Address"
                                           name="emailValid" id="emailValid" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Password: <span class="text-error">*</span></label>
                                <div class="controls">
                                    <input type="password" class="span6" name="password1" id="password1"
                                           />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Repeat password: <span class="text-error">*</span></label>
                                <div class="controls">
                                    <input type="password" class="span6" name="password2" id="password2"
                                           />
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">Phone Number: <span class="text-error">*</span></label>
                                <div class="controls">
                                    <input type="text" class="span6" placeholder="Phone Number" name="numsValid"
                                           id="numsValid" />
                                </div>
                            </div>




                            <div class="control-group">
                                <label class="control-label">Company: <span class="text-error">*</span></label>
                                <div class="controls">
                                    <?php
                                        $cid=$_SESSION['cid'];
                                        $sql="SELECT name FROM companydetails where cid=?";                                    
                                        
                                                $stmt = $conn->prepare($sql);
                                                $stmt->bind_param('i', $cid);
                                                $stmt->execute();
                                                $res = $stmt->get_result();
                                                    while($row = $res->fetch_array(MYSQLI_ASSOC))
                                                            { ?>
                                                                    <input type="text" value="<?php echo $row['name']; ?>" class="span6" id="others"
                                                                           disabled>
                                                                    <input type="hidden" name="select2" value="<?php echo $_SESSION['cid']; ?>">
                                                      <?php }
                                    
                                     ?>
                                </div>

                            </div>
                            <div>

                            </div>

                            <div class="form-actions align-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn">Reset</button>
                            </div>

                        </div>

                    </div>
                    <!-- /form validation -->

                </fieldset>
            </form>
        </div>

    </body>
    </html>
    <?php
}
else
    header('Location:login.html');
?>