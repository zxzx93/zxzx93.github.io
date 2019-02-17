<!DOCTYPE>

<head>
	<meta charset='utf-8'/>
	<title>yeonsu's portfolio</title>
	<link rel="stylesheet" href="./css/modify.css" />
</head>

<?php   

include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';

$id = $_GET['id'];  //session id
$number = $_GET['number'];   //db number
$query = "SELECT title, content, id , date FROM board WHERE number='{$number}'";
$result = $dbConnection->query($query);
$rows = $result->fetch_array(MYSQLI_ASSOC);

$title = $rows['title'];
$content = $rows['content'];
$usrid = $rows['id'];

session_start();

if(!isset($_SESSION['Member'])) {
	            
		echo "<script>alert('권한이 없습니다. 로그인을 해주세요.'); location.href='./index.php';</script>";

}
else if($_SESSION['Member']['userid'] == $usrid) {
?>
	<form method = "post" action = "./database/modify_action.php">
		<table  style="padding-top:50px" align = "center" border="0" cellpadding="2" width="710">
			<tr class="t_head">
				<td align= "center">글수정</td>
			</tr>
			<tr>
				
					<table class = "table2">
						<tr>
							<td>작성자</td>
							<td><input type="hidden" name="id" value="<?=$_SESSION['Member']['userid']?>"><?=$_SESSION['Member']['userid']?></td>
						</tr>

						<tr>
							<td>제목</td>
							<td><input type="text" name='title' size="60"value="<?=$title?>"></td>
						</tr>

						<tr>
							<td>내용</td>
							<td><textarea name="content" cols="85" rows="30"><?=$content?></textarea></td>
						</tr>

					</table>

					<center class="submit">
						<input type="hidden" name="number" value="<?=$number?>">
						<input type = "submit" value="작성">
					</center>
				
			</tr>
		</table>
	</form>
<?php   
}
	else {
	 echo "<script>alert('권한이 없습니다.'); location.href='./index.php'</script>";
	}

?>
