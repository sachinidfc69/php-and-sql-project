
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration form</title>
</head>
<body>
	<center><h1>....Input your Information to win a cat....</h1></center>
	<hr>
	<center>
		<form method="post" action="connect.php">
			
			 enter you first name : <input type="text" name="fname" required><br><br>enter you last name : <input type="text" name="lname" required><br><br>
			 enter you Email : <input type="text" name="email" required><br><br>
			 enter you pnone number : <input type="number" name="phone" required><br><br>
			  enter you password : <input type="password" name="password" required><br><br>
		     select you gender: male<input type="radio" name="gender" value="m">
		    female<input type="radio" name="gender" value="f">
		    other<input type="radio" name="gender" value="o"<br><br><br>
		    <hr>
		    (optional)Did you sub to MrBeast: YES<input type="checkbox" name="sub" value="y">
		    NO<input type="checkbox" name="sub" value="n">
		    
		    <input type="submit" name="submit" value="submit">
			
		</form>
	</center>
</body>
</html>