<?php
require("phpMQTT.php");
session_start();
include_once 'scripts/connect.php';
$host = "m13.cloudmqtt.com";
$port = 12973;
$username = "jmdxoxcb";
$password = "bKJgawyrcD0g";

$clientid="ClientID".rand();
$mqtt = new phpMQTT($host, $port, $clientid);

if(!$mqtt->connect(true,NULL,$username,$password)){
    exit(1);
}

//currently subscribed topics
$topics['topic'] = array("qos"=>0, "function"=>"procmsg");
$mqtt->subscribe($topics,0);

while($mqtt->proc()){
}
$mqtt->close();

function procmsg($topic,$msg)
{
    $data = $msg;
	$conn=connect("localhost","root","","industry");
	$query="select name from companydetails where cid=?";
    if($stmt=$conn->prepare($query)) {
        $stmt->bind_param("s", $_SESSION['cid']);
        if ($stmt->execute()) {
            $stmt->bind_result($name);
            $stmt->fetch();
            $name .= "_" . $_SESSION['cid'];
            $conn = connect("localhost", "root", "", $name);
		}
	}

    $result = mysqli_query($conn, "SELECT max(Dataid) as id FROM data");
    $row = mysqli_fetch_array($result);
    if (is_null($row['id']))
        $dataid = 1;
    else
        $dataid = $row['id'] + 1;
	date_default_timezone_set('Asia/Kolkata');
    $time=date("d/m/y H:i:s");
    if ($query = $conn->prepare("insert into data values(?,?,?,?,?,?)")) {
        $query->bind_param('iiiiss', $dataid,$dataid,$dataid,$dataid,$data,$time);
        if ($query->execute()) {
            echo "done";
        }
    }
}
?>