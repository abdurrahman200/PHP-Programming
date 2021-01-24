<?php
session_start();

// database connect
require_once 'Database/Database.php';

// values
$id = $_POST['id'];
$Name = $_POST['Name'];

// update_query
$update_query = "UPDATE users SET name='$Name' WHERE id = $id";

// print_r($update_query);




// Run update_query
mysqli_query($db_connect, $update_query );



// change sesstion value
$_SESSION['name'] = $Name;
$_SESSION['update_status'] = "yes";


// Redirect back
header('location: edit.php');
?>