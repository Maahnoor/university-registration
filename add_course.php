<?php
require 'config.php';
/*session_start();
$id = $_SESSION['id'];*/

$name = $_POST['courseName'];
$c_hours = $_POST['creditHours'];


$sql="INSERT INTO `courses`(`id`, `course_name`, `credit_hours`, `degree_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES (NULL,'{$name}',{$c_hours},0,1,NOW(),NULL,NULL)";
echo $sql;
if (mysqli_query($con, $sql)) {
	header("Location: course_list.php?add=success");
}

?>