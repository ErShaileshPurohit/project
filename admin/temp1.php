<?php
// require_once "db.php";
include('config.php');
$t_id = $_POST["t_id"];
$result = mysqli_query($conn,"SELECT * FROM `screens` WHERE t_id='$t_id'");
?>
<option value="">Select State</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["screen_id"];?>"><?php echo $row["screen_name"];?></option>
<?php
}
?>