<?php

session_start();

include_once $_SERVER['DOCUMENT_ROOT'].'/bulletin_board/connect/connect.php';

//login page user input data
$id = $_POST['id'];
$pw = $_POST['pw'];


$query = "SELECT * FROM member WHERE id ='{$id}'";
$result = $dbConnection->query($query);


if($result->num_rows == 1) {

		$row = $result->fetch_array(MYSQLI_ASSOC);
		$_SESSION['Member'] = array();
		$_SESSION['Member']['userid'] = $row['id'];

		if(isset($_SESSION['Member'])){

      header("Location:../index.php");
    }
	}
	else {
  	echo "<script> alert('아이디 혹은 비밀번호가 잘못되었습니다.'); location.href='../login.php';</script>";
  }


?>
