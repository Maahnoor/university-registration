<?php
require 'config.php';

$id = $_POST['d_id'];

if (isset($_POST['d_id'])) {
	foreach($_POST['list'] as $selected){
	$sql = "UPDATE `courses` SET `degree_id`={$id},`updated_at`=NOW(),`updated_by`=1 WHERE id=". $selected;
	echo $sql;
	mysqli_query($con, $sql);
}
}
header("Location:degree_courses.php");


