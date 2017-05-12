<?php
include 'functions.php';
print_r ($_POST);
// if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && strlen(trim($_POST['first_name'])) > 0 && strlen(trim($_POST['last_name'])) > 0 && strlen(trim($_POST['email'])) > 0 && strlen(trim($_POST['password'])) > 0 && strlen(trim($_POST['age'])) > 0) {

if(true) {
		echo 'pero';

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
		$r = $query->execute();
		print_r ($r);


			if(count($res) == 1){
					$_SESSION['first_name'] = $res[0]['first_name'];
					$_SESSION['last_name'] = $res[0]['last_name'];
					$_SESSION['email'] = $res[0]['email'];
					$_SESSION['password'] = $res[0]['password'];
					$_SESSION['age'] = $res[0]['age'];
					$_SESSION['user_id'] = $res[0]['id'];
				}else{
					// header('location: index.html');	
				}
			}
	


?>