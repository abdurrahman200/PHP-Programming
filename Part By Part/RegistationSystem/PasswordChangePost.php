<?php require_once 'session/session.php'; ?>
<?php include_once 'database/database.php'?>

<?php 
// print_r($_POST);

if ($_POST ['newPassword'] == $_POST ['confirmPassword']) {

	$id = $_POST['id'];

	$oldPassword =md5($_POST['oldPassword']);

	$newPassword =md5($_POST['newPassword']);

	// $confirmPassword =$_POST ['confirmPassword'];


	$GetDBPassword = "SELECT password FROM users WHERE id = $id"; 

	$GetDBPasswordResult = mysqli_query($db_connect,$GetDBPassword);

	$AfterGetDBPasswordResult = mysqli_fetch_assoc($GetDBPasswordResult);

	// print_r($AfterGetDBPasswordResult);

	// echo $AfterGetDBPasswordResult['password'];/


	if ($oldPassword == $AfterGetDBPasswordResult['password']) {

		$UpdatePassword = "UPDATE users SET password = '$newPassword' WHERE id = $id";

		mysqli_query($db_connect,$UpdatePassword);

		echo "password Changed";

	}
	else{
		echo "You provided Wrong Old password";
	}


}

else{
	
	$_SESSION['Confirm_Password_not_match'] = "New Password doesn't match with confirm password";

	header('location: PasswordChange.php');
}

?>