<?php
$DBlocation= "localhost";
$DBusername= "root";
$DBpassword= "";
$DBname= "universityregistration";
//mysqli_connect(DB location, DB username, DB password, DB name)
$con = mysqli_connect($DBlocation,$DBusername,$DBpassword,$DBname);

// Check connection
/*if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else {
	echo "conection successful";
}*/
?>