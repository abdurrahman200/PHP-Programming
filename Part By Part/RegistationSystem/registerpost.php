<?php

// db_connect
include_once 'database/database.php';

// global value form FROm
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

// Checking Email exsist  or  not
$CheckingEmail = "SELECT COUNT(*) AS EmailAmount FROM users WHERE email ='$email' ";

// getting info from
$result =  mysqli_query($db_connect, $CheckingEmail);

// convert into associative array
$after = mysqli_fetch_assoc($result);
// print_r($after);

// final  checking with conditions
if ($after['EmailAmount'] == 1 ) {
	echo "this Email address already register";
}
else{
// inser query
	$insert = "INSERT INTO users (username,name,email,password) VALUE ('$username','$name','$email','$password')";
// getting info from
	mysqli_query($db_connect, $insert);
// redirection
	header('location: login.php');
}
?>