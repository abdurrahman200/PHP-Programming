<?php

session_start();

require_once 'database.php';

if ($_POST['newpassword'] == $_POST['confirmpassword']) {
	# go to database to Recieved password
	$oldpassword = $_POST['oldpassword'];
	$newpassword = $_POST['newpassword'];
	$confirmpassword = $_POST['confirmpassword'];


	// $GetDBPassword = "SELECT password FROM cp WHERE id = $id";
	
	// print_r($GetDBPassword);

	// $GetDBPasswordResult = mysqli_query($dbconnect,$GetDBPassword);
 
}
else {
	$_SESSION['confirmPasswordNotMatch'] = "New password Does Not Match with Confirm password";
	// echo $_SESSION['confirmPasswordNotMatch'];
	header('location: ChangePassword.php');
}
?>