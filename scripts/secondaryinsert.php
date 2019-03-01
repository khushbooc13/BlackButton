<?php
include_once 'connect.php';
include_once 'encrypt.php';
$conn=connect("localhost","root","","industry");
if($_POST['req']=="" && $_POST['emailValid']=="" && $_POST['numsValid']=="" && $_POST['password1']=="" && $_POST['password2']=="")
{
    header('Location:../secondaryregistration.php?alert=1&field=Please Fill All The Details');
}
else {
    $field = "";
    if(isset($_POST['req'] ))
    {
        $Name=$_POST['req'];
        if(!ctype_alpha(str_replace(' ', '', $Name)))
            $field.="Invalid Name\\n";
    }

    $Email = $_POST['emailValid'];
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL) === false && isset($_POST['emailValid'])) ;
    else {
        $field .= "Invalid Email Address\\n";

    }
    if (isset($_POST['password1'])) {
        $Password1 = $_POST['password1'];
        if (array_key_exists('password1', $_POST)) {
            if (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $_POST['password1'])) {
                $field .= "Password not up to date\\n";
            }
        }
    }

    $Password2 = $_POST['password2'];

    if (strcmp($Password1, $Password2) != 0) {
        $field .= "Password And Confirm Password Mismatch\\n";
    } else {
        if (array_key_exists('password2', $_POST)) {
            if (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $_POST['password2'])) {
                $field .= "Password Mismatch\\n";
            }
        }
    }
    $Phno = $_POST['numsValid'];
    if (array_key_exists('numsValid', $_POST)) {
        if (!preg_match('/^[7-9]{1}[0-9]{9}$/', $_POST['numsValid'])) {
            $field .= "Invalid Phone Number\\n";
        }
    }

    if ($field == "") {
        $cid = $_POST['select2'];
        $result = mysqli_query($conn, "SELECT emailid FROM users where emailid='" . $Email . "' and cid=" . $cid);
        if (mysqli_num_rows($result) > 0) {
            echo "<script type='text/javascript'>alert('Already Registered');window.location='../secondaryregistration.php'</script>";

        } else {
            $result = mysqli_query($conn, "SELECT max(userid) as id FROM users");
            $row = mysqli_fetch_array($result);
            if (is_null($row['id']))
                $uid = 1;
            else
                $uid = $row['id'] + 1;
            echo $uid;
            $pid = -1;
            if ($query = $conn->prepare("insert into users values(?,?,?,?,?,?,?)")) {
                $query->bind_param('issssii', $uid, $Name, $Email, encryptIt($Password1), $Phno, $pid, $cid);
                if ($query->execute()) {
                    header('Location: ../index.php');
                } else {
                   header('Location: ../secondaryregistration.php');
                }
            } else {
                echo "error";
            }
        }
    }
    else
        echo "<script type='text/javascript'>alert('$field');window.location.href='../secondaryregistration.php'</script>";
}
?>

