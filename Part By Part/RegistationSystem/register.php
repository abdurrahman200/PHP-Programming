<?php require_once 'inc/header.php'; ?>
	<div class="container">
		<h2>Register From : </h2>
		<hr>

		<form action="registerpost.php" method="post">
			<div class="formdesign">
				<label for="name">UserName : </label>
				<input type="text" name="username" placeholder="UserName" style="margin-left: 9%;">
			</div>
			<div class="formdesign">
				<label for="name">Name : </label>
				<input type="text" name="name" placeholder="Name">
			</div>
			<div class="formdesign">
				<label for="email">Email : </label>
				<input type="email" name="email" placeholder="Email">
			</div>
			<div class="formdesign">
				<label for="password">Password : </label>
				<input type="Password" name="password" placeholder="Password" style="margin-left: 10.5%;">
			</div>
			<br>
			<div class="btnmid">
				<button type="submit" class="btn">  Register Me </button>
			</div>

			<a href="login.php">Login</a>
		</form>
	</div>
<?php require_once 'inc/footer.php'; ?>
