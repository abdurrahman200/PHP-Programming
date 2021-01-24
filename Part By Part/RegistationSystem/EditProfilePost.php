<?php require_once 'session/session.php'; ?>
<?php include_once 'database/database.php'?>

<?php
	
	$id = $_POST['id'];
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$UpdateQuery = "UPDATE users SET username='$username' ,name= '$name',  email= '$email', password= '$password'  WHERE id =$id";

	// UPDATE `users` SET username=,name=, email = ,password= WHERE id = 

	mysqli_query($db_connect, $UpdateQuery);
	
	$_SESSION['UsersName'] = $username;
	$_SESSION['UserName'] = $name;
	$_SESSION['UsersEmail'] = $email;
	$_SESSION['UsersPassword'] = $password;


	$_SESSION['updatestatus'] = 'yes';


	header('location: EditProfile.php');
	
?>