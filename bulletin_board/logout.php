<?php
  session_start();
  

  unset($_SESSION['Member']);


  if(!isset($_SESSION['Member'])){
    header("Location:./index.php");
  }
?>
