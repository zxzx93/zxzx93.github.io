<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';


$title = $_POST['title'];
$content = $_POST['content'];
$number = $_POST['number'];


$query = "UPDATE board SET title ='{$title}' , content ='{$content}'  WHERE number='{$number}'";
$result = $dbConnection->query($query);


if($result){
echo "<script>alert('글이 수정되었습니다.'); location.href='../index.php';</script>";
}
?>