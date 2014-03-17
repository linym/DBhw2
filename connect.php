<?php
$db_host = "dbhome.cs.nctu.edu.tw";
$db_name = "yshsueh_cs";
$db_user = "yshsueh_cs";
$db_password = "26662666";
$dsn = "mysql:host=$db_host;dbname=$db_name";
$db = new PDO($dsn, $db_user, $db_password);
?>
