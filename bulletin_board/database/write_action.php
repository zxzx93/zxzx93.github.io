<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';


$id = $_POST["name"];                  
$pw = $_POST["pw"];                     
$title = $_POST["title"];                 
$content = $_POST['content'];         
$date = date('Y-m-d H:i:s');          



$query = "INSERT INTO board (number, title, content, id, password, date, hit) VALUES(null, '$title', '$content', '$id', '$pw','$date', 0)";


$result = $dbConnection->query($query);

if($result){
echo "<script>alert('글이 등록 되었습니다.'); location.href='../index.php'; </script>";
} else{echo "글이 등록 되지 않았습니다.";}

?>

