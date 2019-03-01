<?php
$conn=new mysqli("localhost","root","","pollution");

$query="select * from sensorrawdata order by timestamp desc limit 1"; 
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$value=(int)$row['mq6'];

$datetime=strtotime($row['timestamp']);
echo $datetime;
?>
