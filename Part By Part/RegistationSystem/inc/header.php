<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link href="css/font.css" rel="stylesheet">
</head>
<body>
	<div class="body-bg">
		<header id="header">
			<nav>
				<ul>
					<li><a href="index.php"><strong> C<span>o</span>ders <span>B</span>angladesh </strong> </a></li>

					<?php
					if (isset($_SESSION['UsersName'])) {
						?>

						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="EditProfile.php">Edit Profile</a></li>
						<li><a href="PasswordChange.php">Password Change</a></li>
						<li><a href="logout.php">Logout</a></li>


						<?php
					}
					?>

				</ul>
			</nav>
		</header>