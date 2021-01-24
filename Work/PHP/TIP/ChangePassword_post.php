<?php 
session_start();

require_once 'Database/Database.php';

// print_r($_POST);

if ($_POST ['NewPassword'] == $_POST ['ConfirmPassword']) {

	$id = $_POST['id'];

	$OldPassword =md5($_POST['OldPassword']);

	$NewPassword =md5($_POST['NewPassword']);

	// $ConfirmPassword =$_POST ['ConfirmPassword'];

	$get_database_password = "SELECT password  FROM users WHERE id = $id ";

	$get_database_password_result = mysqli_query($db_connect, $get_database_password );

	// print_r($get_database_password_result);

	$after_assoc_database_password = mysqli_fetch_assoc($get_database_password_result);

	// print_r($after_assoc);

	// echo $after_assoc_database_password['password'];

	if ($OldPassword == $after_assoc_database_password ['password']) {


		$update_new_query = "UPDATE users SET password='$NewPassword' WHERE id = $id";

		mysqli_query($db_connect,$update_new_query);

		$_SESSION['Password_change_success'] = "Password change successfully!";

		header('location: ChangePassword.php');
	}


	else{
		echo "wrong Password";
	}

}

else{
	
	$_SESSION['Confirm_Password_not_match'] = "New Password doesn't match with confirm password";

	header('location: ChangePassword.php');
}

?>