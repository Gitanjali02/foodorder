<html>
<head>

<style>
		body{
			background-image: url('report2.jpg');
			background-position: center-top;
			background-size:100%;
			height:100%;
		}
	</style>

</head>
<body><center></b><br><br>
<?php
$username = filter_input(INPUT_POST, 'username');
$password= filter_input(INPUT_POST, 'password');


if (!empty($username)){
if (!empty($password)){
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
$sql = "INSERT INTO user (username, password)values ('$username','$password')";
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
echo "Password should not be empty";
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
	<button onclick="window.location.href = 'Loginpage.html';">Previous</button>
	<button onclick="window.location.href = 'Homepage.html';">Next</button>
</div>
</center>
</body>
</html>