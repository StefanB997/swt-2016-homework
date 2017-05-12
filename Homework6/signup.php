<?php

$config='mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = '';

$db = new PDO($config,$username,$password);
$sql = "SET NAMES UTF8";
$query = $db->query($sql);

$sql = "INSERT INTO users (fist_name, last_name, email, password, age)
VALUES ('$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[password]', '$_POST[age]')";
?>d


