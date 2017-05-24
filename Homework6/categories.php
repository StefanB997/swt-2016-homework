<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta keywords="categories">
	<title>Create Category</title>
</head>
<body>
<?php include 'connection.php';
	print_r ($_POST);
	$sql = "INSERT INTO categories (category_name) VALUES (:category_name)";

	$query = $db->prepare($sql);
	$query->bindvalue(':category_name', $_POST['category_name']);
	$r = $query->execute();


?>

<form action="categories.php" method="post">
	<input type="text" name="category_name">
	<button>Create Category</button>
</form>
</body>
</html>