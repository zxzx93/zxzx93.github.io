<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '111111';
 $dbName = 'bulletin_board';
 $dbConnection = new mysqli($host, $user, $pw, $dbName);
 $dbConnection->set_charset("utf8");

 if ($dbConnection->connect_error) {
    die("Connection failed: " . $dbConnection->connect_error);
  }
?>
