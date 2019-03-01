<?php 
require("phpMQTT.php");
$host = "m20.cloudmqtt.com";
$port = 11255;
$username = "ulods";
$password = "20120058";
$message="hi";

//MQTT client id to use for the device. "" will generate a client id automatically
  $mqtt = new phpMQTT($host, $port, "ClientID".rand());
echo "created";

  if ($mqtt->connect(true,NULL,$username,$password))
  {
      echo "connected";
    if($mqtt->publish("abctopic",$message, 0))
    {
        echo "sent";
    }
    $mqtt->close();
  }
  else
  {
    echo "Fail or time out<br />";
  }
  ?>