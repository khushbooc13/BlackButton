<?php
session_start();
include_once 'connect.php';
$conn=connect("localhost","root","","industry");
	$query="select name from companydetails where cid=?";
    if($stmt=$conn->prepare($query)) {
        $stmt->bind_param("s", $_SESSION['cid']);
        if ($stmt->execute()) {
            $stmt->bind_result($name);
            $stmt->fetch();
            $conn = connect("localhost", "root", "", $name);
		}
	}
?>
<html>
<label class="control-label">Select Units: <span class="text-error">*</span></label>
	   <div class="controls">
	                           
		<select name="uid" id="uid" class="styled" data-prompt-position="topLeft:-1,-5" required>
										   <?php
										   $id = intval($_GET['uid']);
										   			$sql = 'SELECT * from unit where sid=?';
										   			$stmt = $conn->prepare($sql);
										   			$stmt->bind_param('i', $id);
										   			$stmt->execute();
										   			$res = $stmt->get_result();
													while($row = $res->fetch_array(MYSQLI_ASSOC))
													{ 
														?>
														<option value="<?php echo $row['uid'];?>"><?php echo $row['Name'];?></option>
						                                <?php
													}
											?>
	                                    </select>
	                                    </div>
	      </html>