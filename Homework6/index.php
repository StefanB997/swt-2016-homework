<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'connection.php';?>


	<form action="signup.php" method = "post">
	 	<label for = "name">
	 		NAME:
	 		<input type="text" name="first_name" required>
	 	</label> 	

	 	<label for = "lastname">
	 		LASTNAME:
	 		<input type="text" name="last_name" required>
	 	</label> 	

	 	<label for = "email">
	 		EMAIL:
	 		<input type="email;" name="email" required>
	 	</label> 	

	 	<label for = "password">
	 		PASSWORD:
	 		<input type="password" name="password" required>
	 	</label> 	

	 	<label for = "age">
	 		AGE:
	 		<input type="number" name="age" required>
	 	</label>

	 	<button type="submit">Sign Up</button>

	</form>


</body>
</html>
