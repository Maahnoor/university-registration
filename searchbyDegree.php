<?php 
require 'config.php';
require_once 'index.php';
$sql="SELECT * FROM `degrees`";
$result= mysqli_query($con,$sql);
?>
<div class="container">
	

<form action="#" method="post">
<label for="cars">Filter by Degree:</label>

<select name="d_id" id="cars">
	<?php while ($record= mysqli_fetch_array($result)) { ?>
  <option value="<?php echo $record['id']?>"><?php echo $record['degree_name']?></option>
  <?php }?>
</select>
<input type="submit" value="Submit">
</form>
<?php
if (isset($_POST['d_id'])) {
$sql1="SELECT * FROM `students` WHERE student_degree=".$_POST['d_id'];
$result1= mysqli_query($con,$sql1);
while ($record1= mysqli_fetch_array($result1)) {
?>

<h4><?php echo $record1['student_name']?></h4>
<?php } 	
}?>
</div>