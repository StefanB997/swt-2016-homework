<?php 
include 'connection.php';


if(isset($_GET['id']) > 0){

	$sql_select = 'select image from blogposts where id = :id';
	$query_select = $db->prepare($sql_select);
	$query_select->bindValue(':id', $_GET['id']);
	$query_select->execute();
	$res = $query_select->fetchAll(PDO::FETCH_ASSOC);

	unlink($res[0]{'image'});

	$sql_delete = 'delete from blogposts where id =:id';
	$query_delete = $db->prepare($sql_delete);
	$query_delete->bindValue(':id', $_GET['id']);
	$query_delete->execute();

}

header ('location: blogpost.php');
?>