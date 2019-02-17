<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';


$number = $_GET['number'];
$id = $_GET['id']; //session id


$query = "SELECT * FROM board WHERE number = '{$number}'";
$result = $dbConnection->query($query);
$rows = $result->fetch_array(MYSQLI_ASSOC);


if($id == $rows['id']){
		  $query = "DELETE FROM board WHERE number = '{$number}'";
			$result = $dbConnection->query($query);
		
			echo "<script>location.href='./index.php'</script>";
			
		}	else{
			echo "<script>location.href='./index.php'</script>";
			
			
		}

}else{
	echo "<script>alert('권한이 없습니다.'); location.href='./index.php';</script>";
}
?>