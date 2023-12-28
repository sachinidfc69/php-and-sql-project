<?php

require('connection.php');

if(isset($_POST['submit']))
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$sql = "INSERT INTO student_info(first_name,last_name,email) VALUES($fname,$lame,$email)"
	mysqli_query($conn,$result);
	echo "
	<script> alert(my bro it's done #cool)</script>
	";
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> registration form </title>
</head>
<body>
	<form method="post">
		<label for="fname">first name :</label><br
		<input type="text" name="fname" required>
		<label for="lname">last name :</label><br>
		<input type="text" name="lname" required>
		<label for="password">Password :</label><br>
		<input type="password" name="password" required>
		<label for="email">Email :</label><br>
		<input type="email" name="email" required>
		
		<label for="submit">submit</label>
		<input type="submit" name="submit">
	</form>
</body>
</html>