<?php
function connect($host,$username,$password,$db)
{
    $conn = mysqli_connect($host, $username, $password, $db);
    return $conn;
}
?>