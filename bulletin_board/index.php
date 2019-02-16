<!DOCTYPE html>

<html>
<head>
	<meta charset='utf-8'/>
	<title>yeonsu's portfolio</title>
	<link rel="stylesheet" href="./css/cssReset.css" />
	<link rel="stylesheet" href="./css/index.css" />
</head>


<body>

<h2 align="center" class="list">게시판</h2>

<table align = "center">
	<thead align = "center">
		<tr>
			<td width = "50" align="center">번호</td>
			<td width = "500" align = "center">제목</td>
			<td width = "100" align = "center">작성자</td>
			<td width = "200" align = "center">날짜</td>
			<td width = "50" align = "center">조회수</td>
		</tr>
	</thead>

	<tbody>
<?php

	include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';

	$query = "SELECT * FROM board ORDER BY number DESC"; 
	//number를 내림차순으로 board 테이블에서 전체 필드 가져옴
	$result = $dbConnection->query($query);
	$total = $result->num_rows; //쿼리 결과로 넘어온 행의 갯수


	session_start();
 
  if(isset($_SESSION['Member'])) {
  echo $_SESSION['Member']['userid'];?>님 안녕하세요.&nbsp;
  <button onclick="location.href='./logout.php'">로그아웃</button>
<?php
 	}
  	else {
 ?>
  		<button onclick="location.href='./login.php'">로그인</button>
  		<br />
<?php   
 		}


	while($rows = $result->fetch_array(MYSQLI_ASSOC)){ //DB 저장된 데이터 한 행씩 연관배열로 패치
		if($total%2==0){ //짝수
?>                      
		<tr class = "even">  <!-- 짝수 경우만 색 변환-->
<?php   
		}
		else{
?>  
		<tr>
<?php 
		} 
?>
			<td width = "50" align = "center"><?= $total?></td>
			<td width = "500" align = "center">
				<a href = "./view.php?number=<?= $rows['number']?>"><?= $rows['title']?>
			</td>
					<td width = "100" align = "center"><?= $rows['id']?></td>
					<td width = "200" align = "center"><?= $rows['date']?></td>
					<td width = "50" align = "center"><?= $rows['hit']?></td>
		</tr>
<?php
				$total--;
	} //while end
?>
		</tbody>
	</table>

	<div class="text">
		<p class="write" onClick="location.href='./write.php'">글쓰기</p>
	</div>
</body>
</html>

