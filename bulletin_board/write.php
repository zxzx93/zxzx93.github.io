<!DOCTYPE>

<html>
<head>
	<meta charset = 'utf-8' />
	<title>yeonsu's portfolio</title>
	<link rel="stylesheet" href="css/cssReset.css" />
	<link rel="stylesheet" href="css/write.css" />
</head>

<body>
	<form method = "post" action = "./database/write_action.php">
		<table  style="padding:50px 0;" align = "center" width="700" border="0" cellpadding="2">
			<tr class="header">
				<td><p>글쓰기</p></td>
			</tr>
			<tr class="tablebody">
				<td>
					<table class = "table2">
						<tr>
							<td>작성자</td>
							<td><input type = "text" name = "name" size="20"> </td>
						</tr>

						<tr>
							<td>제목</td>
							<td><input type = "text" name = "title" size="70px"></td>
						</tr>

						<tr>
							<td>내용</td>
							<td><textarea name = "content" cols="85" rows="25"></textarea></td>
						</tr>

						<tr>
							<td>비밀번호</td>
							<td><input type ="password"name = "pw" size="20" maxlength="10"></td>
						</tr>
					</table>

					<div class="submit">
						<input type = "submit" value="작성">
					</div>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
