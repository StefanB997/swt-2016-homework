<?php
include 'functions.php';
print_r ($_POST);
// if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && strlen(trim($_POST['first_name'])) > 0 && strlen(trim($_POST['last_name'])) > 0 && strlen(trim($_POST['email'])) > 0 && strlen(trim($_POST['password'])) > 0 && strlen(trim($_POST['age'])) > 0) {

if(true) {
		$db = dbo();
		print_r ($db);
		$sql = "INSERT INTO  users (first_name, last_name, email, password, age) 
		VALUES (:first_name, :last_name, :email, :password, :age)";

		$query = $db->prepare($sql);
		$query->bindValue(':first_name', $_POST['first_name']);
		$query->bindValue(':last_name', $_POST['last_name']);
		$query->bindValue(':email', $_POST['email']);
		$query->bindValue(':password', $_POST['password']);
		$query->bindValue(':age', $_POST['age']);
		$r = $query->execute();


	}
	


?>