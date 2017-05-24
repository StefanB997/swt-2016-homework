
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'connection.php';
$sql = 'select * from users';
$query = $db->query($sql);
$users =  $query->fetchAll(PDO::FETCH_ASSOC);
?>
	<table border = "1">
			<th>Name</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Password</th>
			<th>Age</th>
			<?php
				foreach($users as $key => $user){
					echo '<tr>'.'<td>'.$user['first_name'].'</td>'.
					'<td>'.$user['last_name'].'</td>'.
					'<td>'.$user['email'].'</td>'.
					'<td>'.$user['password'].'</td>'.
					'<td>'.$user['age'].'</td>'.'</tr>';
				}
			?>

	</table>
</body>
</html>
