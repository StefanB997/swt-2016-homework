<?php 
$config = 'mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);
$sql = "SET NAMES UTF8";
$query = $db->query($sql);



?>