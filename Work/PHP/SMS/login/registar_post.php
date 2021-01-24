
<?php 
require_once 'Database/database.php';


$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$InsertQueryRegister = "INSERT INTO register(name, email, password) VALUES ('$Name','$Email','$Password')"; 

// echo $InsertQueryRegister;

$ResultQuery = mysqli_query($DatabaseConnect, $InsertQueryRegister);

$AfterAssocResultQuery = mysqli_fetch_assoc($AfterAssocResultQuery);

header('location: registar.php');

 ?>