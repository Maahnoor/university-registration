<?php
/*session_start();

if (!isset($_SESSION['username'])) {
	echo '<script type="text/javascript">
	window.location.replace("login.php");
	</script>';
}*/

require 'config.php';
$id= $_GET['id'];

/*$user_id= $_SESSION['id'];*/

if (isset($_POST['courseName'])) {
	
$row= (object) $_POST;
$sql_update="UPDATE `courses` SET `course_name`='{$row->courseName}',
								`credit_hours`={$row->creditHours},
								`updated_by`=1,
								`updated_at`= NOW() WHERE id=".$id;
                                echo $sql_update;
if (mysqli_query($con, $sql_update)){
	header("Location:course_list.php");
}
}else{
$sql = "SELECT * FROM `courses` Where id =".$id;
$records = mysqli_query($con,$sql);
$data = mysqli_fetch_array($records);
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--

Copy this code in your html file.

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <style type="text/css">
        /* Copy this code in your css file. */


.container
{
    margin: 20px auto;
}

.preview
{
    padding: 10px;
    position: relative;
}

.preview i
{
    color: white;
    font-size: 35px;
    transform: translate(50px,130px);
}

.preview-img
{
    border-radius: 100%;
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
}

.browse-button
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    position: absolute; /* Tweak the position property if the element seems to be unfit */
    top: 10px;
    left: 132px;
    background: linear-gradient(180deg, transparent, black);
    opacity: 0;
    transition: 0.3s ease;
}

.browse-button:hover
{
    opacity: 1;
}

.browse-input
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    transform: translate(-1px,-26px);
    opacity: 0;
}

.form-group
{
    width:  900px;
    margin: 10px auto;
}

.form-group input
{
    transition: 0.3s linear;
}

.form-group input:focus
{
    border: 1px solid crimson;
    box-shadow: 0 0 0 0;
}

.Error
{
    color: crimson;
    font-size: 13px;
}

.Back
{
    font-size: 25px;
}
    </style>
</head>
<body>
    <div class="container">
       <div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
        </div>
        <p class="h2 text-center">Edit Course</p>
        <form action="" method="post">
            <div class="form-group">
                <label>Course Name:</label>
                <input class="form-control" type="text" name="courseName" required value="<?php echo $data['course_name']?>"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Course Credit-hours:</label>
                <input class="form-control" type="number" name="creditHours" required value="<?php echo $data['credit_hours']?>"/>
                <span class="Error"></span>
            </div>
            
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
    // Copy this code in your js file.

function Back()
{
    window.history.back();
}
</script>
