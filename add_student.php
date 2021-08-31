<?php
require 'config.php';
/*session_start();
$id = $_SESSION['id'];*/

$name = $_POST['studentName'];
$s_degree = $_POST['studentDegree'];


$sql="INSERT INTO `students`(`id`, `student_name`, `student_degree`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES (NULL,'{$name}',{$s_degree},1,NOW(),NULL,NULL)";
echo $sql;
if (mysqli_query($con, $sql)) {
	header("Location: student_list.php?add=success");
}

?>