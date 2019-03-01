<?php 
include_once 'connect.php';
include_once 'encrypt.php';
$conn=connect("localhost","root","","industry");
$emailid=$_POST['email'];
$sql = 'SELECT * from users where emailid=?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $emailid);
$stmt->execute();
$res = $stmt->get_result();
if($row = $res->fetch_array(MYSQLI_ASSOC))
{ 
	$password=decryptIt($row['password']);

	$to = "$emailid";
         $subject = "Forgot Password";
         
         $message = "Hello ".$row['name']."\nYour account details are as follows\n"."User id:".$emailid."\nPassword: ".$password;
        
         
         $retval = mail ($to,$subject,$message);
         if( $retval == true ) 
         {
            echo "Message sent successfully...";
			header('Location: ../login.html');
         }
         else 
         {
            echo "Message could not be sent...";
         }
}
else
	echo "invalid email id";	
?>