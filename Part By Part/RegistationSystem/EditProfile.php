<?php require_once 'session/session.php'; ?>
<?php include_once 'database/database.php'?>
<?php require_once 'inc/header.php'; ?>
<div class="container">
	<h2>Edit Profile From : </h2>
	<hr>
	
	<?php
	if (isset($_SESSION['updatestatus'] )) {
		?>
		<div class="alert alert-success">
			<strong>Good!</strong> Your Profile has been Updated Successfull !!
		</div>
		<?php
		unset($_SESSION['updatestatus']);
	}
	?>
	
	<form action="EditProfilePost.php" method="post">
		<div class="formdesign">
			<label for="name">UserName : </label>
			<input type="text" name="username" value="<?=$_SESSION['UsersName']  ?>" placeholder="UserName" style="margin-left: 9%;">
			<input type="hidden" name="id" value="<?=$_SESSION['UsersId']  ?>" placeholder="id" style="margin-left: 9%;">
		</div>
		<div class="formdesign">
			<label for="name">Name : </label>
			<input type="text" name="name" value="<?=$_SESSION['UserName']  ?>"  placeholder="Name">
		</div>
		<div class="formdesign">
			<label for="email">Email : </label>
			<input type="email" name="email" value="<?=$_SESSION['UsersEmail']  ?>"  placeholder="Email">
		</div>
		<div class="formdesign">
			<label for="password">Password : </label>
			<input type="Password" name="password" value="<?=$_SESSION['UsersPassword']  ?>"  placeholder="Password" style="margin-left: 10%;">
		</div>
		<br>
		<div class="btnmid">
			<button type="submit" class="btn">  Register Me </button>
		</div>
	</form>
	
</div>
<?php require_once 'inc/footer.php'; ?>