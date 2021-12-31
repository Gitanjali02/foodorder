<html>
<head>

<style>
		body{
			background-image: url('thank.jpg');
			background-position: center-top;
			background-size:100%;
			height:100%;
		}
	</style>

</head>
<body><center></b><br><br>
<?php



$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$contact = filter_input(INPUT_POST, 'contact');
$items = filter_input(INPUT_POST, 'items');
$Address = filter_input(INPUT_POST, 'Address');

if (!empty($fname)){
if (!empty($lname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "food";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO orders (fname, lname, contact, items, Address)values ('$fname','$lname', '$contact', '$items','$Address')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "contact should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
</b><br><br>
<div class="btn-group">
	<button onclick="window.location.href = 'Order Details.html';">Previous</button>
	<button onclick="window.location.href = 'Homepage.html';">Next</button>
	
</div>
</center>
</body>
</html>