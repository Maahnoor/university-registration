<?php
require 'config.php';
require_once 'index.php';
$sql="SELECT * FROM `degrees`";
$result= mysqli_query($con,$sql);
$count=1;
?>
<h3>Add courses to Degree.</h3>
<form action="addDegree_courses.php" method="post">
<label for="cars">Choose a Degree:</label>

<select name="d_id" id="cars">
	<?php while ($record= mysqli_fetch_array($result)) { ?>
  <option value="<?php echo $record['id']?>"><?php echo $record['degree_name']?></option>
  <?php }?>
</select>
<br>
<?php
$sql1="SELECT * FROM `courses`";
$result1= mysqli_query($con,$sql1);
while ($record1= mysqli_fetch_array($result1)) {
?>
<input type="checkbox" id="Subject" name="list[]" value="<?php echo $record1['id']?>">
<label for="option1"><?php echo $record1['course_name']?></label><br>
<?php } ?>
<input type="submit" value="Submit">
</form>