<?php
require 'config.php';
$id= $_GET['id'];

$sql="DELETE FROM `degrees` WHERE `degrees`.`id`=".$id;
if (mysqli_query($con, $sql)) {
	header("Location: degree_list.php?d=success");
}
?>