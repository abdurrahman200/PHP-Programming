<?php
require_once 'Database/Database.php';

//  getting value form form

$YourName = $_POST['YourName'];
$userEmail = $_POST['userEmail'];
$userPassword = md5($_POST['userPassword']);

$checking_email = "SELECT count(*) as check_mail  FROM users WHERE email = '$userEmail' ";

$result_db = mysqli_query($db_connect,$checking_email);

$after_assoc = mysqli_fetch_assoc($result_db );

// print_r($after_assoc);

if ($after_assoc['check_mail'] == 1) {

	echo "You can not use this mail";
}

else{
//  insert query

	$insert_query = "INSERT INTO users(name, email, password) VALUES ('$YourName', '$userEmail', '$userPassword')";

// echo $insert_query; check

// mysqli_query(database conection, query);

	mysqli_query($db_connect, $insert_query);

	header('location: login.php');
}

?>