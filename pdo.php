<?php
  $pdo = new PDO('mysql:host=localhost;port=3306;dbname=web_dev;charset=utf8', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
