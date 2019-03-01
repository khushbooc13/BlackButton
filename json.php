<?php
$conn=new mysqli("localhost","root","","pollution");
$sql="Select ".$_POST['sensor'].",timestamp,data_id from sensorrawdata where timestamp like '%-".$_POST['year']."%'";
$year=$_POST['year'];
$sensor=$_POST['sensor'];
$l= array();
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
  $l[] = $row;
}
$j = json_encode($l);
header("Content-disposition: attachment; filename=data-".$year.".json");
header('Content-type: application/json');
echo $j;


?>

