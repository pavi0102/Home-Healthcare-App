<?php
if(isset($_POST['submit'])){
$name = $_POST['Name'];
}
// Create connection
$dbconnect=mysqli_connect('localhost:3070','root','root','sashya');
// Check connection
if(mysqli_connect_errno($dbconnect)){
	echo "Failed to connect";
}

$sql = "SELECT * FROM patientmedicaldata where name='$name'";
$result = mysqli_query($dbconnect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "<center>Name: ". $row["name"]."<br>";
        echo "Age:      " . $row["age"]."<br>";
		echo "B.P:      " . $row["bp"]. "<br>";
		echo "Height:   " . $row["height"]."<br>"; 
		echo "Comments: " . $row["doctor_comments"]."<br>";
    }
} 
else {
    echo "0 results";
}
?>

