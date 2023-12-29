<?php


if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	
 	
 	// Database connection
	$conn = new mysqli('localhost','root','','sachin_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ".$conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into you_data(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $fname, $lname, $gender, $email, $password, $number);
		// $executeq = 
		$stmt->execute();
		// echo $executeq;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

}
}
?>
