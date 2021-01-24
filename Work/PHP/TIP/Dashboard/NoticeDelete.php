<?php
require_once '../Database/Database.php';
$id = $_GET['id'];
// echo $id;
$Notice_delete = "  DELETE FROM noticetable WHERE id =$id ";
// echo $Notice_delete;
mysqli_query($db_connect, $Notice_delete);
// echo "done";
header('location: NoticeRead.php');
?>