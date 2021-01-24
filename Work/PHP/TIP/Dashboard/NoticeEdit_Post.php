<?php
require_once '../Database/Database.php';

// print_r($_POST);

$Noticeid = $_POST['Noticeid'];

$NoticeDate = $_POST['NoticeDate'];

$NoticeTitle = $_POST['NoticeTitle'];

$NoticeMassage = $_POST['NoticeMassage'];

$Update_Notice = " UPDATE noticetable SET  Notice_Date = '$NoticeDate', Notice_Title = '$NoticeTitle', Notice_Massage = '$NoticeMassage' WHERE id =$Noticeid ";

// echo $Update_Notice;

mysqli_query($db_connect, $Update_Notice);

// echo "done";

header('location: NoticeRead.php');
?>