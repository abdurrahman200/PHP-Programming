<?php
// db_connect
include_once 'database/database.php';
include_once 'session/session.php';
// global value form FROm
$email = $_POST['email'];
$password = md5($_POST['password']);
/*echo $email;
echo $password;*/
// buildng checking query
$checking = "SELECT COUNT(*) AS AKAID, id, username, name,email, password FROM users WHERE email= '$email' AND password ='$password' ";
// echo $checking;
// getting info from
$result = mysqli_query($db_connect, $checking);
// print_r($result);
// convert into associative array
$after =  mysqli_fetch_assoc($result);
// print_r($after);
// final  checking with conditions with session start
if ($after ['AKAID'] == 1 ) {
	$_SESSION['UsersId'] = $after['id'];
	$_SESSION['UsersName'] = $after['username'];
	$_SESSION['UserName'] = $after['name'];
	$_SESSION['UsersEmail'] = $after['email'];
	
	$_SESSION['UsersPassword'] = $after['password'];
	// redirecting
	header('location: dashboard.php');
}
else{
	// $_SESSION['invalid'] = "Your email or password invalid";
	echo "Your email or password invalid";
	// header('location:login.php');
}
?>