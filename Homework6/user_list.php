<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta author="MaceG,StefB">
	<title></title>
</head>
<body>
<?php 
	include 'connection.php';
	$sql = 'select * from users';
		$query = $db->query($sql);
		$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="1">
		<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>E-Mail</th>
		<th>Password</th>
		<th>Age</th>
		</tr>
		<tr>
		<?php 
		foreach ($users as $key => $user) {
			echo '<tr><td>'.$user['first_name'].'</td>'.'<td>'.$user['last_name'].'<td>'.$user['email'].'<td>'.$user['password'].'</td>'.'<td>'.$user['age'].'</td></tr>';
		}
		?>
</table>
</body>
</html>