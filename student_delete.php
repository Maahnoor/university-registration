<?php
require 'config.php';
$id= $_GET['id'];

$sql="DELETE FROM `students` WHERE `students`.`id`=".$id;
if (mysqli_query($con, $sql)) {
	header("Location: student_list.php?d=success");
}
?>