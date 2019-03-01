<?php
include_once 'connect.php';
$conn=connect("localhost","root","","industry");
$query="update users set pid=1 where userid=?";
if($stmt=$conn->prepare($query))
{
    $stmt->bind_param("s",$_GET['uid']);
    if($stmt->execute())
    {
        header('Location:../secondaryprivileges.php');
    }
    else
    {
        header('Location:../index.php');
    }
}
else
{
    header('Location:../index.php');
}
?>