<?php
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
<body align="center">
<form name="form1" action="PatientDetails.php" method="post">
<select name="patientName">
<?php
$res=mysqli_query($link,"select name from patientmedicaldata");
while($row=mysqli_fetch_array($res)){
?>
<option><?php echo $row["name"]; ?></option>
<?php
}
?>
</select>
<input type="submit" name="submit" value="View"/>
</form>

</body>
</html>
