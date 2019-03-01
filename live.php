<?php
// Set the JSON header
header("Content-type: text/json");
$conn=new mysqli("localhost","root","","pollution");

// The x value is the current JavaScript time, which is the Unix time multiplied 
// by 1000.
$x = time() * 1000;
// The y value is a random number
$y = rand(0, 100);
$i=1;
/*$temp=time();
$query=$conn->prepare("insert into data values(?,?,?)");
$query->bind_param('sii',$temp,$y,$i);
$query->execute();
$i=2;
$y = rand(0, 100);
$query=$conn->prepare("insert into data values(?,?,?)");
$query->bind_param('sii',$temp,$y,$i);
$query->execute();*/
$query="select * from sensorrawdata order by timestamp desc limit 1"; 
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$value=(int)$row['mq6'];

$datetime=strtotime($row['timestamp']);
$datetime=$datetime*1000;
$index=0;
$mainarray[$index]=array();
$mainarray[$index]["time"]=$datetime;
$mainarray[$index]["point"]=$value;
//$query="select uv,timestamp from sensorrawdata order by timestamp desc limit 1"; 
//$result=mysqli_query($conn,$query);
//$row=mysqli_fetch_array($result);
$value=(int)$row['mq7'];
$index=1;
$mainarray[$index]=array();
$mainarray[$index]["time"]=$datetime;
$mainarray[$index]["point"]=$value;
$value=(int)$row['mq9'];
$index=2;
$mainarray[$index]=array();
$mainarray[$index]["time"]=$datetime;
$mainarray[$index]["point"]=$value;
$value=(int)$row['mq131'];
$index=3;
$mainarray[$index]=array();
$mainarray[$index]["time"]=$datetime;
$mainarray[$index]["point"]=$value;
$value=(int)$row['mq135'];
$index=4;
$mainarray[$index]=array();
$mainarray[$index]["time"]=$datetime;
$mainarray[$index]["point"]=$value;
$value=(int)$row['uv'];
$index=5;
$mainarray[$index]=array();
$mainarray[$index]["time"]=$datetime;
$mainarray[$index]["point"]=$value;


// Create a PHP array and echo it as JSON
echo json_encode($mainarray);
?>