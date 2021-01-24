<?php
 // session start
session_start();



require_once 'Database/Database.php';

$userEmail = $_POST['userEmail'];
$userPassword = md5($_POST['userPassword']);

$checking_query = "SELECT COUNT(*)as akaid,id, name ,email ,password FROM users WHERE email='$userEmail' AND password ='$userPassword' ";

$result = mysqli_query($db_connect, $checking_query);

// print_r($result );

$after_assoc = mysqli_fetch_assoc($result);

// print_r($after_assoc);

if ($after_assoc['akaid'] == 1) {

	$_SESSION['id'] = $after_assoc['id'];

	$_SESSION['name'] = $after_assoc['name'];

	$_SESSION['email'] = $after_assoc['email'];

	$_SESSION['password'] = $after_assoc['password'];

	header('location: dashboard.php');
}
else {
	header('location: login.php');
}


?>