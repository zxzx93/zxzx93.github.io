<?php
  session_start();
  
  //세션 제거
  unset($_SESSION['Member']);

  //세션 제거 확인 후 메인페이지로 이동
  if(!isset($_SESSION['Member'])){
    header("Location:./index.php");
  }
?>
