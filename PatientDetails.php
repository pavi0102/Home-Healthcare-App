<?php
if(isset($_POST['submit'])){
$name = $_POST['patientName'];
}
$link = mysqli_connect('localhost:3070','root','root');
mysqli_select_db($link,'sashya');
?>

<!doctype html>
<html>
<head>
<title>
Reecord
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form name="form1" action="PatientAddComments.php" method="post">
<select name="patientNameSelected">
<?php
$res=mysqli_query($link,"select name from patientmedicaldata where name = '$name'");
while($row=mysqli_fetch_array($res)){
?>
<option><?php echo $row["name"]; ?></option>
<?php
}
?>
</select>
<?php
$res=mysqli_query($link,"select * from patientmedicaldata where name = '$name'");
while($row=mysqli_fetch_array($res)){
	
        echo "<center><br>Age:      " . $row["age"]."<br>";
		echo "B.P    :          " . $row["bp"]. "<br>";
		echo "Height :       " . $row["height"]."<br>"; 
    
}
?>
<input type="text" name="comments"/>
<input type="submit" name="submit" value="AddComments"/>
</form>

</body>
</html>
