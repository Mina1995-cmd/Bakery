<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"mark");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO reservation (Name,People,Date,Message) VALUES ('$_POST[Name]','$_POST[People]','$_POST[Date]','$_POST[Message]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("Location:http://localhost/bakery2/login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>