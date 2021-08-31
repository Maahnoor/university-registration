<?php
require 'config.php';
$id= $_GET['id'];

$sql="DELETE FROM `courses` WHERE `courses`.`id`=".$id;
if (mysqli_query($con, $sql)) {
	header("Location: course_list.php?d=success");
}
?>