<?php
if(isset($_POST['submit'])){
$name = $_POST['Name'];
$age = $_POST['Age'];
$bp = $_POST['BP'];
$height = $_POST['height'];
}
$dbconnect=mysqli_connect('localhost:3070','root','root','sashya');
if(mysqli_connect_errno($dbconnect)){
	echo "Failed to connect";
}

$sql = mysqli_query($dbconnect,"insert into patientmedicaldata(name,age,bp,height) values ('$name','$age','$bp','$height')");
if($sql){
	echo "Record added successfully";
}
else
{
	echo "error";
}

?>
