<?php 
include 'connection.php';
include 'functions.php';
$db = dbo();
$sql = "INSERT INTO categories (category_name)
VALUES (:category_name)";
print_r ($_POST);

$query = $db->prepare($sql);
$query->bindValue(':category_name', $_POST['category_name']);
$query->execute();

?>
