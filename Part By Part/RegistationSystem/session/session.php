<?php 

session_start();

if (!isset($_SESSION['UsersName'])) {
	header('location: login.php');
}
?>
