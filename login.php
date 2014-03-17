<?php
session_start();

require_once('connect.php');
$sql = "SELECT password FROM `user`" . " WHERE `account` = ?";
$sth = $db->prepare($sql);
$sth->execute(array($_POST["email"]));
$result = $sth->fetchObject();
if (crypt($_POST["password"], $result->password) == $result->password) {
   echo "Password verified!";
   $_SESSION['login']=1;
}

if($_SESSION['login'] == 1){
	header()
}


?>