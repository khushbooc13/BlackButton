<?php
include_once 'connect.php';
include_once 'encrypt.php';
$conn=connect("localhost","root","","industry");
$username=$_POST['username'];
$password="";
$query="select userid,password,pid,cid from users where emailid=?";
if($stmt=$conn->prepare($query))
{
    $stmt->bind_param("s",$username);
    if($stmt->execute())
    {
        $stmt->bind_result($userid,$password,$pid,$cid);
        $stmt->fetch();
        if($password==encryptIt($_POST['password']))
        {
            if($pid==0)
            {
                session_start();
                $_SESSION['cid']=0;
				$_SESSION['userid']=$userid;
             header('Location:../mainindex.php');

            }
            else if($pid==1)
            {
                session_start();
                $_SESSION['cid']=$cid;
                $_SESSION['pid']=$pid;
				$_SESSION['userid']=$userid;
                $query="select name from companydetails where cid=".$cid;
                $result=mysqli_query($conn,$query);
                header('Location:../index.php');
            }
            else if($pid==2)
            {
                session_start();
                $_SESSION['cid']=$cid;
                $_SESSION['pid']=$pid;
				$_SESSION['userid']=$userid;
              header('Location:../memberindex.php');
            }
            else 
            {
               echo "<script type='text/javascript'>alert('Permission Not Assigned\\nPlease Contact Admin');window.location.href='../login.html';</script>";
            }

        }
        else if($password!=encryptIt($_POST['password']))
        {
          echo "<script type='text/javascript'>alert('Either Email id is Wrong or Password is Incorrect');window.location.href='../login.html';</script>";
        }
	}
    else
        echo "<script type='text/javascript'>alert('No Such User Found');window.location.href='../login.html';</script>";

}
else
    echo "<script type='text/javascript'>window.location.href='../login.html';</script>";

?>