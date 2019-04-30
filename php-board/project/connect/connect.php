<?php 

$host = "localhost";
$user = "root";
$pw = "thddustn";
$dbName = "php_board";

$dbConnection = new mysqli($host, $user, $pw, $dbName);
$dbConnection->set_charset("utf8");

?>