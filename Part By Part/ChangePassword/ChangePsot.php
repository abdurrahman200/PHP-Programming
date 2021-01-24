<?php 

require_once 'database.php';
$password = $_POST['password'];
// echo $password;

$Insert = " INSERT INTO cp (password) VALUES ('$password')";
// echo $Insert ;
mysqli_query($dbconnect,$Insert);
header('location: index.php')





?>