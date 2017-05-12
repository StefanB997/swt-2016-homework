<?php
include 'functions.php';

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && strlen(trim($_POST['first_name'])) > 0 && strlen(trim($_POST['last_name'])) > 0 && strlen(trim($_POST['email'])) > 0 && strlen(trim($_POST['password'])) > 0 && strlen(trim($_POST['age'])) > 0) {

		$db = dbo();
		"INSERT INTO  homework_db
		VALUES (':first_name', ':last_name', ':email', ':password', ':age')";

		$query = $db->prepare($sql);
		$query->bindValue(':first_name', $_POST['first_name'], PDO::PARAM_STR);
		$query->bindValue(':last_name', $_POST['last_name'], PDO::PARAM_STR);
		$query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
		$query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
		$query->bindValue(':age', $_POST['age'], PDO::PARAM_STR);
		$query->execute();
		$res = $query->fetchAll(PDO::FETCH_ASSOC);

			if(count($res) == 1){
					$_SESSION['first_name'] = $res[0]['first_name'];
					$_SESSION['last_name'] = $res[0]['last_name'];
					$_SESSION['email'] = $res[0]['email'];
					$_SESSION['password'] = $res[0]['password'];
					$_SESSION['age'] = $res[0]['age'];
					$_SESSION['user_id'] = $res[0]['id'];
				}else{
					header('location: index.html');	
				}
			}else{
				header('location: index.html');
			}




?>