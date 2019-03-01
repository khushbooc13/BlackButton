<?php 
$conn=mysqli_connect("localhost","root","","matquiz");
$filename = "sampledata.xls"; // File Name
 
// Download file
header("Content-Disposition: attachment; filename=\"$filename\""); 
header("Content-Type: application/vnd.ms-excel");
$result=mysqli_query($conn,"select * from users"); 
// Write data to file
$flag = false;
while($row = mysqli_fetch_assoc($result)) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
  }
?>