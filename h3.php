<?php
$username = $_POST['Username'];
$email = $_POST['E-mail'];
$emailval = filter_var($email, FILTER_VALIDATE_EMAIL);
$password = $_POST['Password'];
$cpassword = $_POST['CPassword'];
$url = $_POST['URL'];
$urlval = filter_var($url, FILTER_VALIDATE_URL);
$age = $_POST['Age'];
if($password != $cpassword){
	echo "Passwords must be the same <br/>";
}
if(!$emailval){
	echo "Invalid Email <br/>";
}
if($age < 21){
	echo 'Mal si';
}
if(!$urlval){
	echo "Invalid URL";
}
if($emailval && $password == $cpassword && $urlval && $age > 21){
	echo "Uspeshno se registriravte";
}
?>