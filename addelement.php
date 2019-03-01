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
            <a href="#" title="" class="logo"><!--<img src="img/logo.png" alt="" />--></a>
            <ul class="top-menu">
                <li><a class="fullview"></a></li>
                <li class="dropdown">
                    <a class="user-menu" data-toggle="dropdown"><img src="img/userpic.png" alt="" /><span><?php 
					$name="";
					$query="select name from users where userid=".$_SESSION['userid'];
					$result=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($result);
					echo $row['name'];
					?>
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
                       <li> <a href="mainindex.php" title=""><i class="icon-home"></i>Dashboard</a></li>
                        <li><a href="registrationform.php" title="" class="expand"><i class="icon-reorder"></i>Create New User</a>
                        </li>

                        <li><a href="company.php" title="" class="expand"><i class="icon-reorder"></i>Add Company Details</a>
                        </li>
                        <li class="active"><a href="#" title="" class="expand"><i class="icon-reorder"></i>Add Element in Company</a>
                        </li>
						 
                </div>


            </div>
        </div>
        <!-- /sidebar -->


        <!-- Content -->
        <div id="content">
            <form id="validate" class="form-horizontal" method="post" action="scripts/addElement.php" >
            <div class="widget">
                <div class="navbar">
                    <div class="navbar-inner">
                        <h6>Add Element</h6>
                    </div>
                </div>
            <div class="well row-fluid">
                <div class="control-group">
                    <label class="control-label">Select Company:</label>
                    <div class="controls">
                        <select name="company" onchange="showLocations(this.value)" data-placeholder="Choose a Company...">
                            <option value=""></option>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM companydetails");
                            while($row = mysqli_fetch_array($result))
                            {?>
                                <option value="<?php echo $row['cid'];?>"><?php echo $row['name'];?></option>
                                <?php
                            }?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div id="Locations">

                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label">Element Name:</label>
                    <div class="controls" >
                        <input type="text" class="span6" placeholder="Element Name" name="element" id="element" required />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">No of Sensor Installed:</label>
                    <div class="controls" >
                        <input type="number" class="span6" placeholder="No Of Sensor" name="sensorcount" min="1" id="sensorcount" onchange="ins();" required />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Sensor Name:</label>
                    <div class="controls" id="sensor">
                    </div>
                </div>
                <div class="form-actions align-right">
                    <button type="submit" id="submit" class="btn btn-info" disabled>Submit</button>
                    <button type="reset" class="btn">Reset</button>
                </div>
            </div>
            </div>
        </div>


        <script>
            function ins()
            {
                var foo = document.getElementById("sensor");
                var id=document.getElementById("sensorcount").value;
                if (typeof ins.counter == 'undefined') {
                    // It has not... perform the initilization
                    ins.counter = 0;
                }
                else
                {
                    if(id<ins.counter) {
                        for (var i = ins.counter; i > id; i--) {
                            $('#sensor' + i).remove();
                            $('#unit' + i).remove();
                            $("#unit" + i).parent().nextAll('br').remove();
                            ins.counter--;
                        }
                    }

                }
                for(i=ins.counter;i<id;i++) {
                    var foo = document.getElementById("sensor");
                    var element = document.createElement("input");
                    element.setAttribute("type", "text");
                    element.setAttribute("class", "span6");
                    element.setAttribute("value", "");
                    element.setAttribute("placeholder", "Sensor Name");
                    element.setAttribute("name", "sensor" + (++ins.counter));
                    element.setAttribute("id", "sensor" + (ins.counter));
                    element.required = "true";

                    var element1 = document.createElement("input");
                    element1.setAttribute("type", "text");
                    element1.setAttribute("class", "span6");
                    element1.setAttribute("value", "");
                    element1.setAttribute("height", "2px");
                    element1.setAttribute("placeholder", "Unit Measurable");
                    element1.setAttribute("name", "unit" + (ins.counter));
                    element1.setAttribute("id", "unit" + (ins.counter));
                    element1.required = "true";

                    //Append the element in page (in span).
                    foo.appendChild(element);
                    foo.appendChild(element1);

                }
                document.getElementById("submit").disabled=false;
            }
            function showLocations(str)
            {
                if (str == "")
                {
                    document.getElementById("Locations").innerHTML = "";
                    return;
                }
                else
                {
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
                            document.getElementById("Locations").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","scripts/getLocations.php?cid="+str,true);
                    xmlhttp.send();
                }
            }
        </script>

    </body>
    </html>
    <?php
}
else
    header('Location:login.html');
?>