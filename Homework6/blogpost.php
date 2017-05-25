<?php 
include ('connection.php');

if(isset($_GET['id'])){
	echo 'EDIT MODE';
	$form_url = 'blogpost_edit.php';

	$sql_bp = 'select * from blogposts where id = :id';
	$query_bp = $db->prepare($sql_bp);
	$query_bp->bindValue(':id', $_GET['id']);
	$query_bp->execute();
	$res_bp = $query_bp->fetchAll(PDO::FETCH_ASSOC);

	$input_title = $res_bp[0]['title'];
	$input_content = $res_bp[0]['content'];
	$input_publish_date = $res_bp[0]['publish_date'];
	$input_id_category = $res_bp[0]['id_category'];
	$input_image = $res_bp[0]['image'];

} else {
	echo 'INSERT MODE';
	$form_url = 'blogposts_add.php';
	$input_title = '';
	$input_content = '';
	$input_publish_date = '';
	$input_id_category = '';
	$input_image = '';

}

$sql_categories = "select * from categories";
$query_categories = $db->prepare($sql_categories);
$query_categories->execute();
$query_categories_result = $query_categories->fetchAll(PDO::FETCH_ASSOC);

$sql_blogposts = "select * from blogposts";
$query_blogposts = $db->prepare($sql_blogposts);
$query_blogposts->execute();
$query_blogposts_result = $query_blogposts->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Blogpost Form</title>
</head>
<body>
	<form action="<?=$form_url?>" method="POST" enctype="multipart/form-data">
		<input type="text" name="title" placeholder="title" value="<?=$input_title?>">
		<br>
		<textarea name="content" placeholder="content"><?=$input_content?></textarea>
		<br>
		<input type="date" name="publish_date" value="<?=date('Y-m-d', strtotime($input_publish_date))?>">
		<br>
		<input type="file" name="image">
		<br>
		<select name="id_category">
			<?php foreach($query_categories_result as $row){ ?>
			<option value="<?=$row['id']?>">
				<?=$row['category_name']?>
			</option>
			<?php } ?>
		</select>
		<br>
		<button type="submit">Submit</button>
	</form>
	<hr/>
	<table width="100%" border="1">
		<tr>
			<th>title</th>
			<th>content</th>
			<th>publish_date</th>
			<th>image</th>
			<th>id_category</th>
			<th>edit</th>
			<th>delete</th>
		</tr>
			<?php foreach($query_blogposts_result as $row){ ?>
		<tr>
			<td><?=$row['title']?></td>
			<td><?=$row['content']?></td>
			<th><?=$row['publish_date']?></td>
			<td><?=$row['image']?></td>
			<td><?=$row['id_category']?></td>
			<td>

			<a href="blogpost.php?id=<?=$row['id']?>">EDIT</a>

			</td>
			<td>

				<a href="blogpost_delete.php?id=<?=$row['id']?>">[DELETE]</a>
				
			</td>
		</tr>
			<?php } ?>
	</table>
</body>
</html>