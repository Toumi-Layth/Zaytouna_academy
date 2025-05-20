<?php
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "zaytouna";
$cnx = new PDO("mysql:host=$db_server;dbname=$db_name" , $db_username , $db_pwd);
?>

<!-- copy this file, rename it to config.php, and fill it with your own values. -->