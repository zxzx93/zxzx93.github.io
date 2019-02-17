<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';


$number = $_GET['number'];
$id = $_GET['id']; //session id


$query = "SELECT * FROM board WHERE number = '{$number}'";
$result = $dbConnection->query($query);
$rows = $result->fetch_array(MYSQLI_ASSOC);


if( $id == $rows['id']){
?>
	<script type="text/javascript">
		var delmsg = confirm("정말 삭제하시겠습니까?");
		if(delmsg == true){
			<?php	
			$query = "DELETE FROM board WHERE number = '{$number}'";
			$result = $dbConnection->query($query);
			?>
			location.href="./index.php";

		}else{
			location.href="./index.php";
			
		}
	</script>
<?php	
}else{
	echo "<script>alert('권한이 없습니다.'); location.href='./index.php';</script>";
}
?>
