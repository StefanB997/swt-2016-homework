<?php
include 'functions.php';

if(true) {
		$db = dbo();
		print_r ($db);
		$sql = "INSERT INTO  users (first_name, last_name, email, password, age) 
		VALUES (:first_name, :last_name, :email, :password, :age)";

		$query = $db->prepare($sql);
		print_r ($query);
		$query->bindValue(':first_name', $_POST['first_name']);
		$query->bindValue(':last_name', $_POST['last_name']);
		$query->bindValue(':email', $_POST['email']);
		$query->bindValue(':password', $_POST['password']);
		$query->bindValue(':age', $_POST['age']);
		$query->execute();


	}
	


?>