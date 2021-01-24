<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Change Pawword</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<h3>Change Password Exucute Option :</h3>

		<?php

		session_start();

		if (isset($_SESSION['confirmPasswordNotMatch'])) {
		?>

		<strong style="background: #e5e5; color: #000; padding: 10px;"><?= $_SESSION['confirmPasswordNotMatch']; ?></strong>

		<?php
		unset($_SESSION['confirmPasswordNotMatch']);
		}
		?>

	<br><br>

		<form action="ChangePasswordpost.php" method="post">
			<label>
				<input type="hidden" name="id" >
				<input type="password" name="oldpassword" placeholder="Old Password">
				<input type="text" name="newpassword" placeholder="New Password">
				<input type="text" name="confirmpassword" placeholder="Confirm Password">
			</label>
			<button type="submit"> Change Password </button>
		</form>
	</body>
</html