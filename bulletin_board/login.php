<!DOCTYPE>

<html>
<head>
	<meta charset='utf-8'>
	<title>yeonsu's portfolio</title>
	<link rel="stylesheet" href="./css/login.css" />

</head>

<body>
	<div align="center" id="login_all">
		<span>로그인</span>

		<form method="post" action="./database/login_action.php">
			<p>ID: <input name="id" type="text"></p>
			<p>PW: <input name="pw" type="password"></p>
			<input type="submit" value="로그인">
		</form>
		<br />
		<button id="join" onclick="location.href='./join.php'">회원가입</button>
	</div>


</body>
</html>
