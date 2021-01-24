<?php require_once 'inc/header.php'; ?>
<div class="container">
	<h2>Login From : </h2>
	<hr>





	<form action="loginpost.php" method="post">

		<div class="formdesign">
			<label for="email">Email : </label>
			<input type="email" name="email" placeholder="Email">
		</div>

		<div class="formdesign">
			<label for="password">Password : </label>
			<input type="Password" name="password" placeholder="Password" style="margin-left: 10%;">
		</div>

		<br>
		<div class="btnmid">
			<button type="submit" class="btn">  Login </button>
		</div>
		<a href="register.php">Register</a>
	</form>
</div>
<?php require_once 'inc/footer.php'; ?>
