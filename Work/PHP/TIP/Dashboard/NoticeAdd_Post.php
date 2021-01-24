<?php
require_once '../Database/Database.php';

$NoticeDate = $_POST['NoticeDate'];
$NoticeTitle = $_POST['NoticeTitle'];
$NoticeMassage = $_POST['NoticeMassage'];

$notice_insert = "INSERT INTO noticetable (Notice_Date, Notice_Title, Notice_Massage) VALUES ('$NoticeDate', '$NoticeTitle' ,'$NoticeMassage')";

mysqli_query($db_connect, $notice_insert);

header('location: NoticeRead.php');
?>