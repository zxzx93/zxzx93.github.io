<!DOCTYPE>

<html>
<head>
	<meta charset='utf-8'>
	<title>yeonsu's portfolio</title>
	<link rel="stylesheet" href="css/cssReset.css" />
	<link rel="stylesheet" href="css/join.css" />
	<script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="./js/valueCheck.js"></script>


</head>
<body>

	<div align="center" id="join_all">
		<p class="join">회원가입</p>
		<form method='post' action='./database/join_action.php'>
			<p>ID: <input type="text" name="id" id="ID"></p>
			<p>PW: <input type="password" name="pw" id="PW"></p>
			<input type="submit" value="가입하기" id="joinUp">
			<div>
          <p id="valueError"> </p>
      </div>
		</form>
	</div>
</body>
</html>
