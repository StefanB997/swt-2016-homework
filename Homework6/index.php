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
	 		<input type="text" value ="" name="name" required>
	 	</label> 	

	 	<label for = "lastname">
	 		LASTNAME:
	 		<input type="text" value ="" name="lastname" required>
	 	</label> 	

	 	<label for = "email">
	 		EMAIL:
	 		<input type="emai;" value ="" name="email" required>
	 	</label> 	

	 	<label for = "password">
	 		PASSWORD:
	 		<input type="password" value ="" name="password" required>
	 	</label> 	

	 	<label for = "age">
	 		AGE:
	 		<input type="number" value ="" name="number" required>
	 	</label>

	 	<button type="submit">Sign Up</button>

	</form>


</body>
</html>
