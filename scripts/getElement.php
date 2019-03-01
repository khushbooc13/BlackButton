
<?php
	session_start();
    include_once 'connect.php';
    $conn=connect("localhost", "root", "", "industry");
    $query="select name from companydetails where cid=?";
    $stmt=$conn->prepare($query);
   $stmt->bind_param("s", $_SESSION['cid']);
    $stmt->execute();
    $stmt->bind_result($name);
    $stmt->fetch();
    $stmt->close();
    $conn = connect("localhost", "root", "", $name);
	?>
<label class="control-label">Select Element:</label>
                    <div class="controls">
                        <select name="element" data-placeholder="Choose a Element..." id="clear-results" tabindex="2">
                    <?php
                            $result = mysqli_query($conn, "SELECT * FROM elements where lid=".$_GET['lid']);
                            while($row = mysqli_fetch_array($result))
                            {?>
                                <option value="<?php echo $row['eid'];?>"><?php echo $row['Name'];?></option>
                                <?php
                            }?>
                        </select>
                    </div>