<?php 
require 'config.php';
require_once 'index.php';

$sql="SELECT * FROM `degrees`";
$result= mysqli_query($con,$sql);

?>

<div class="container">
<form action="#" method="post">
<label for="cars">Filter by Fee:</label>

<select name="f_id" id="cars">
	<?php while ($record1= mysqli_fetch_array($result)) { ?>
  <option value="<?php echo $record1['id']?>"><?php echo $record1['degree_fee']?></option>
  <?php }?>
</select>
<input type="submit" value="Submit">
</form>


<?php
if (isset($_POST['f_id'])) {
$sql1="SELECT * FROM `students` WHERE student_degree= ".$_POST['f_id'];
$result1= mysqli_query($con,$sql1);
while($record1= mysqli_fetch_array($result1))
{
		echo $record1['student_name'];
	 	echo "<br>";
}
}?>
</div>