<?php
// Set the JSON header
header("Content-type: text/json");
$conn=new mysqli("localhost","root","","pollution");

// The x value is the current JavaScript time, which is the Unix time multiplied 
// by 1000.
// The y value is a random number
$mq6=rand(0,100);
$mq7=rand(0,100);
$mq9=rand(0,100);
$mq131=rand(0,100);
$mq135=rand(0,100);
$uv=rand(0,100);



$i=1;
$temp=date('d-m-Y H:i:s');

$query=$conn->prepare("insert into sensorrawdata(timestamp,mq6,mq7,mq9,mq131,mq135,uv) values(?,?,?,?,?,?,?)");
$query->bind_param('siiiiii',$temp,$mq6,$mq7,$mq9,$mq131,$mq135,$uv);
$query->execute();
$datetime=time()*1000;
$index=0;
$mainarray[$index]=array();
$mainarray[$index]["time"]=$datetime;
$mainarray[$index]["point"]=$mq6;
//$query="select uv,timestamp from sensorrawdata order by timestamp desc limit 1"; 
//$result=mysqli_query($conn,$query);
//$row=mysqli_fetch_array($result);

// Create a PHP array and echo it as JSON
echo json_encode($mainarray);
?>