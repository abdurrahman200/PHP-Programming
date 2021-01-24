<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> CRUD </title>
	<link rel="stylesheet" href="css/b4.css">
	<link rel="stylesheet" href="css/rajdhani.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
		<div class="container-fluid">
			<a class="navbar-brand" href="dashboard.php" >Abdur rahman </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">



				<?php
				if (isset($_SESSION['name'])) {
					
					?>
					<ul class="navbar-nav">

						<li class="nav-item">
							<a class="nav-link" href="index.php" target="_blank">My website</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="Dashboard/index.php" target="_blank">Dashboard</a>
						</li>



						<li class="nav-item">
							<a class="nav-link" href="edit.php">Edit Profile</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="ChangePassword.php">Change Password</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>
					<?php
				}
				?>
			</div>
		</div>
	</nav>