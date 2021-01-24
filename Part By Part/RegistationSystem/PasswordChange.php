<?php require_once 'session/session.php'; ?>
<?php include_once 'database/database.php'?>
<?php require_once 'inc/header.php'; ?>
<div class="container">
	<h2>Change Password From : </h2>
	<hr>
	
	<?php
	if (isset($_SESSION['Confirm_Password_not_match'] )) {
	?>
	<div class="alert alert-danger">
		<strong>Sorry!</strong> <?=$_SESSION['Confirm_Password_not_match'];?>
	</div>
	<?php
	unset($_SESSION['Confirm_Password_not_match']);
	}
	?>
	
	<form action="PasswordChangePost.php" method="post">
		
		<div class="formdesign">

			<label>Old Password : </label>

			<input type="hidden" name="id" value="<?=$_SESSION['UsersId']?>"placeholder="id">

			<input type="text" name="oldPassword" placeholder="Old Password">

		</div>

		<div class="formdesign">

			<label >New Password : </label>

			<input type="text" name="newPassword" placeholder="New Password">

		</div>

		<div class="formdesign">

			<label >Confirm Password : </label>

			<input type="text" name="confirmPassword" placeholder="Confirm Password" style="margin-left: 10%;">

		</div>

		<br>

		<div class="btnmid">

			<button type="submit" class="btn">  Change Password </button>

		</div>

	</form>

	
</div>
<?php require_once 'inc/footer.php'; ?>