<?php
if(isset($_POST['submit'])){
$name = $_POST['patientNameSelected'];
$comments = $_POST['comments'];
}
$dbconnect=mysqli_connect('localhost:3070','root','root','sashya');
if(mysqli_connect_errno($dbconnect)){
	echo "Failed to connect";
}

$sql = mysqli_query($dbconnect,"update patientmedicaldata set doctor_comments =  '$comments' where name = '$name'");
if($sql){
	echo "comments added successfully";
}
else
{
	echo "error";
}

?>