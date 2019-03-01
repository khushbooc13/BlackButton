<?php
include_once 'connect.php';
session_start();
echo $_POST['location'];
if($_POST['company']=="")
{
    echo "<script type='text/javascript'>alert('Please Select Company');window.location.href='../addelement.php'</script>";
}
else {
    $conn=connect("localhost", "root", "", "industry");
    $company = $_POST['company'];
    $query="select name from companydetails where cid=?";
    if($stmt=$conn->prepare($query)) {
        $stmt->bind_param("s", $company);
        if ($stmt->execute()) {
            $stmt->bind_result($name);
            $stmt->fetch();
            $conn = connect("localhost", "root", "", $name);
			echo $name;
            $query = "select max(eid) as id from elements";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            if (is_null($row['id']))
                $eid = 1;
            else
                $eid = $row['id'] + 1;
			echo $eid;
            $query = "insert into elements values(?,?,?)";
            if ($stmt = $conn->prepare($query)) {
				echo $_POST['element'];
                $stmt->bind_param("isi", $eid, $_POST['element'],$_POST['location']);
                if ($stmt->execute()) 
				{
						$query = "select max(sid) as id from sensor";
                         $result = mysqli_query($conn, $query);
                         $row = mysqli_fetch_array($result);
                         if (is_null($row['id']))
                           $sid = 1;
                        else
                          $sid = $row['id'] + 1;
					  $count=$_POST['sensorcount'];
						for ($i = 0; $i < $count; $i++) 
						{
							$j=$i;
                           $query = "insert into sensor values(?,?,?)";
						   if ($stmt = $conn->prepare($query)) 
						   {
							   $temp="sensor".($j+1);
								$stmt->bind_param("iis", $eid,$sid, $_POST[$temp]);
								if ($stmt->execute()) 
								{
									echo "sensor Insert";
									$query = "select max(uid) as id from unit";
									 $result = mysqli_query($conn, $query);
									 $row = mysqli_fetch_array($result);
									 if (is_null($row['id']))
									   $uid = 1;
									else
									  $uid = $row['id'] + 1;
									   $query = "insert into unit values(?,?,?)";
									   if ($stmt = $conn->prepare($query)) 
									   {
										   $temp="unit".($j+1);
											$stmt->bind_param("iis", $sid,$uid, $_POST[$temp]);
											if ($stmt->execute()) 
											{
												echo "Unit Insert";
												$sid++;
											}
									   }
									}							
								}
						   }
						}
                }
            }
        }
    }
	header('Location:../mainindex.php');
?>
