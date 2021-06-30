<?php
if(isset($_POST['submit'])){
$name = $_POST['Name'];
$password = $_POST['Password'];
}
$dbconnect=mysqli_connect('localhost:3070','root','root','sashya');
if(mysqli_connect_errno($dbconnect)){
	echo "Failed to connect";
}

$sql = mysqli_query($dbconnect,"insert into patientmedicaldata(name,password) values ('$name','$password')");
if($sql){
	echo "Registered successfully";
	header("Location:http://localhost/Sashya/SashyaPatient/AddView.html");
}
else
{
	echo "error";
}

?>
<!DOCTYPE html>
<html>
<body>
<style type="text/css">
body
 {
     background-image: url(sashya.png);
     background-repeat: no-repeat;
	
	 background-size: cover;
 }
 </style>
 </body>
 </html>