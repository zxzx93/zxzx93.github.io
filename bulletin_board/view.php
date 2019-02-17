<!DOCTYPE>

<head>
	<meta charset='utf-8'/>
	<title>yeonsu's portfolio</title>
	<link rel="stylesheet" href="./css/cssReset.css" />
	<link rel="stylesheet" href="./css/view.css" />
</head>

<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';
session_start();
$number = $_GET['number'];
$hit = "UPDATE board SET hit = hit+1 WHERE number = '{$number}'";
$result = $dbConnection->query($hit);

$query = "SELECT title, content, date, hit, id FROM board WHERE number = '{$number}'";
$result = $dbConnection->query($query);
$rows = $result->fetch_array(MYSQLI_ASSOC);


?>
<table id="view_table" align='center' border="1">
	<colgroup>
		<col width="20%">
		<col width= "30%">
		<col width= "20%">
		<col width="30%">
	</colgroup>
	<tr>
		<td colspan="4" class="view_title"><?= $rows['title']?></td>
	</tr>
	<tr>
		<td class="view_id">작성자</td>
		<td class="view_id2"><?= $rows['id'] ?></td>
		<td class="view_hit">조회수</td>
		<td class="view_hit2"><?= $rows['hit'] ?></td>
	</tr>
	<tr>
		<td colspan="4" class="view_content" valign="top">
			<?= $rows['content']?></td>
		</tr>
	</table>



	<div class="view_btn">
		<button onclick="location.href='./index.php'">목록</button>
		<button onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['Member']['userid']?>'">수정</button>
		<button onclick="location.href='./delete.php?number=<?=$number?>&id=<?=$_SESSION['Member']['userid']?>'">삭제</button>
	</div>

