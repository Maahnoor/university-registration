<?php
require_once 'index.php';
require 'config.php';
/*require 'header.php';
session_start();

if (!isset($_SESSION['username'])) {
	echo '<script type="text/javascript">
	window.location.replace("login.php");
	</script>';
}
*/



$sql="SELECT * FROM `students`";
$result= mysqli_query($con,$sql);

/*while ($record= mysqli_fetch_array($result)) {
echo "<pre>";
print_r($record);
	# code...
}*/
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
	.custab{
		/*width: 900px;*/
		margin: 10px;
    border: 1px solid #ccc;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>

<div class="container">
	<h3><?php if(isset($_GET['d']) && $_GET['d']=="success") {echo "Record deleted successfully..";}  ?></h3>
	<h3><?php if(isset($_GET['add']) && $_GET['add']=="success") {echo "Record added successfully..";}  ?></h3>
    <table class="table table-striped custab" style="margin 0">
    <thead>
    <a href="student_form.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add Student</a>
        <tr>
            <th>S No.</th>
            <th>Student Name</th>
            <th>Student Degree</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    <?php
    $count=1;
    while ($record= mysqli_fetch_array($result)) {
	?>

            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $record['student_name']?></td>
                <td><?php $sql1="SELECT * FROM `degrees` WHERE id=".$record['student_degree'];
                    $result1= mysqli_query($con,$sql1);
                    $deg=mysqli_fetch_array($result1);
                echo $deg['degree_name']?></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="student_edit.php?id=<?php echo $record['id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                <a href="student_delete.php?id=<?php echo $record['id']?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
    <?php } ?> 
    </table>
</div>