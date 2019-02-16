<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';

$id = $_POST['id'];
$pw = $_POST['pw'];
$date = date('Y-m-d H:i:s');


$query = "INSERT INTO member(id, pw, date, permit) VALUES('$id', '$pw', '$date', 0)";


$result = $dbConnection->query($query);


if($result) {
echo "<script>alert('회원가입이 되었습니다.'); location.href='../login.php';</script>";
} 
else{
      echo "<script> error_reporting(E_ALL); 
     					 ini_set('display_errors', 1);
						</script>";
}

?>
