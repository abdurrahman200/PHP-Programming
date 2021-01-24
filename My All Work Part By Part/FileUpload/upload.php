<?php
// Database Connection
$hostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cool";
$connect = mysqli_connect($hostname, $dbusername, $dbpassword,$dbname);
// print_r($_FILES['fileUpload']);

// get The FIle
$fileUpload = $_FILES['fileUpload'];
// print_r($fileUpload['name']);

// get Photo name
$fileUploadName = $fileUpload['name'];

// Get Extention By explode Function
$AfterExplode =  explode(".", $fileUploadName);

// To get Last Value (Extention)
$fileUploadExtention  = end($AfterExplode);

// Valid Extention List
$validImageExtention  = array('jpg','jpeg','png');

// Check if valid Or Not
if (in_array($fileUploadExtention, $validImageExtention)) {

// print_r($fileUpload['size']);

// Check is Size More thene 2 MB
    if ($fileUpload['size'] <= 2000000) {
// echo "You Can Upload";
// echo $_POST['title'];

// get File Title
        $FileTitle =  $_POST['title'];

// Insert Into Database
        $FileTitleInsert = "INSERT INTO file (title) VALUES ('$FileTitle') ";
        mysqli_query($connect , $FileTitleInsert);

// Get Last Inserted Id
        $INSERT_ID  = mysqli_insert_id($connect);
// Create New name

        $NewFIleName = $INSERT_ID.".".$fileUploadExtention;
// echo $NewFIleName;

// Create New Location
        $NewFIleUploadLocation = "Uploads/".$NewFIleName;
// print_r($fileUpload['tmp_name']);

// Move the File to new Location
        move_uploaded_file($fileUpload['tmp_name'], $NewFIleUploadLocation);

// Update new Name  add Database
        $FileUpdate = "UPDATE file SET file = '$NewFIleName' WHERE id ='$INSERT_ID' ";
        mysqli_query($connect ,$FileUpdate);

// Redirection
        header('location: index.php');
    }
    else{
        echo "Sorry, your file is too large.";
    }
}
else{
    echo " Wrong Format";
}
?>