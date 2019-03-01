
<label class="control-label">Select Location: <span class="text-error">*</span></label>
<div class="controls">
<select name="location" id="location" class="styled" data-prompt-position="topLeft:-1,-5" required>
    <?php
    include_once 'connect.php';
    $conn=connect("localhost", "root", "", "industry");
    $query="select name from companydetails where cid=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("s", $_GET['cid']);
    $stmt->execute();
    $stmt->bind_result($name);
    $stmt->fetch();
    $stmt->close();
    $conn = connect("localhost", "root", "", $name);
    $query="select * from locations";
$stmt = $conn->prepare($query);
$stmt->execute();
$res = $stmt->get_result();
while($row = $res->fetch_array(MYSQLI_ASSOC))
{
    ?>
    <option value="<?php echo $row['lid'];?>"><?php echo $row['Location'];?></option>
    <?php
}
?>
</select>
</div>