<?php
require 'config.php';
/*session_start();
$id = $_SESSION['id'];*/

$name = $_POST['degreeName'];
$degree_f = $_POST['degreeFee'];


$sql="INSERT INTO `degrees`(`id`, `degree_name`, `degree_fee`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES (NULL,'{$name}',{$degree_f},1,NOW(),NULL,NULL)";
echo $sql;
if (mysqli_query($con, $sql)) {
	header("Location: degree_list.php?add=success");
}

?>