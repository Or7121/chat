<?php
$dsn= "mysql:host=127.0.0.1;dbname=chatdb;charset=utf8";   

try{
    
$db = new PDO($dsn,"root","");
$db->query("TRUNCATE TABLE `chat-tb`");
    
}catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
exit;