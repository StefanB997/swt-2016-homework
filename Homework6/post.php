<?php 
include 'functions.php';
include 'connection.php';
$sql = 'select * from categories';
$query = $db->query($sql);
$categories = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="addpost.php" method="post">
	<input type="text" name="title">Title
	<br>
	<textarea name="content">Content</textarea>
	<br>
	<input type="date" name="publish_date">PublishDate
	<br>
	<input type="file" name="image">
	<br>
	<select name="id_category">
		<?php foreach($categories as $key => $cat){ ?>
			<option value="<?=$cat['id']?>">
				<?=$cat['category_name'];?>
			</option>
		<?php } ?>
	</select>
	<br>
	<button type="SUBMIT">Submit</button>
</form>
</body>
</html>


