<?php
include 'connection.php';
include 'functions.php';
$db = dbo();
$sql = "INSERT INTO blogposts (title, content, publish_date, image, id_category)
VALUES (:title, :content, :publish_date, :image, :id_category)";

$query = $db->prepare($sql);
$query->bindValue(':title', $_POST['title']);
$query->bindValue(':content', $_POST['content']);
$query->bindValue(':publish_date', $_POST['publish_date']);
$query->bindValue(':image', $_POST['image']);
$query->bindValue(':id_category', $_POST['id_category']);
$query->execute();