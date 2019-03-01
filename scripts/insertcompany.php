<?php
include_once 'connect.php';
$conn=connect("localhost","root","","industry");
if($_POST['name']=="" && $_POST['person']=="" && $_POST['Phno']=="")
{
    echo "<script type='text/javascript'>alert('Please Fill All The Fields');window.location.href='../company.php'</script>";
}
else {
    $field = "";
    if (isset($_POST['name'])) {
        $Name = $_POST['name'];
        if (!ctype_alpha(str_replace(' ', '', $Name)))
            $field .= "Invalid Name\\n";
    }
    if (isset($_POST['cpname'])) {
        $Person = $_POST['cpname'];
        if (!ctype_alpha(str_replace(' ', '', $Person)))
            $field .= "Invalid Contact Name\\n";
    }
    $Phno = $_POST['cpno'];
    if (array_key_exists('Phno', $_POST)) {
        if (!preg_match('/^[7-9]{1}[0-9]{9}$/', $_POST['cpno'])) {
            $field .= "Invalid Phone Number\\n";
        }
    }
    if ($field == "")
    {
        $result = mysqli_query($conn, "SELECT max(cid) as id FROM companydetails");
        $row = mysqli_fetch_array($result);
        if(is_null($row['id']))
            $cid=1;
        else
            $cid=$row['id'] + 1;
        $db_name = $Name . "_" . $cid;
				$db_name=str_replace(' ', '_', $db_name);
				
        if($query=$conn->prepare("insert into companydetails values(?,?,?,?)"))
        {
            $query->bind_param('isss',$cid,$db_name,$Person,$Phno);
            if($query->execute()) {

                $query = "create database " . $db_name;
				echo $query;
                if (mysqli_query($conn, $query)) {
                    $conn=connect("localhost","root","",$db_name);
                    $sql = "CREATE TABLE locations (lid int PRIMARY KEY ,Location Varchar(30))";
                    $conn->query($sql);
                    $count=$_POST['count'];
                for ($i = 1; $i <= $count; $i++) {
                    $query = "insert into locations values(?,?)";
                    if ($stmt = $conn->prepare($query)) {
                        $temp = "location" . ($i);
                        $stmt->bind_param("is", $i, $_POST[$temp]);
                        $stmt->execute();
                    }
                }

                    $sql = "CREATE TABLE Elements (eid int PRIMARY KEY ,Name Varchar(30),lid int)";
                 

                    if ($conn->query($sql) === TRUE) {
                        $sql = "CREATE TABLE Sensor (eid int,sid int PRIMARY KEY ,Name Varchar(30))";
                        if ($conn->query($sql) === TRUE) {
                            $sql = "CREATE TABLE Unit (sid int,uid int PRIMARY KEY ,Name Varchar(30))";
                            if ($conn->query($sql) === TRUE) {
								$sql = "CREATE TABLE data (Dataid int Primary Key,Element int ,Sensor int,Unit int,measured varchar(50),date varchar(50))";
								echo $sql;
								$conn->query($sql);
                                header('Location: ../mainindex.php');
								}
							else
                                header('Location: ../company.php');
                        } else
                            header('Location: ../company.php');
                    } else {
                        header('Location: ../company.php');
                    }
                }
            }
            else
            {
                header('Location: ../company.php');
            }
        }
    }
    else
        echo "<script type='text/javascript'>alert('$field');window.location.href='../company.php'</script>";
}
?>
