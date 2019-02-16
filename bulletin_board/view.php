<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';
session_start();
$number = $_GET['number'];
$query = "SELECT title, content, date, hit, id FROM board WHERE number = '{$number}'";
$result = $dbConnection->query($query);
$rows = $result->fetch_array(MYSQLI_ASSOC);


?>
<table class="view_table" align='center' border="1">
	<tr>
		<td colspan="4" class="view_title"><?= $rows['title']?></td>
	</tr>
	<tr>
		<td class="view_id">작성자</td>
		<td class="view_id2"><?= $rows['id']?></td>
		<td class="view_hit">조회수</td>
		<td class="view_hit2"><?= $rows['hit']?></td>
	</tr>
	<tr>
		<td colspan="4" class="view_content" valign="top">
			<?= $rows['content']?></td>
		</tr>
	</table>


	<!-- MODIFY & DELETE -->
	<div class="view_btn">
		<button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
		<button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>

		<button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
	</div>

