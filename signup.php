<?php

require_once('connect.php');

$sql = "SELECT * FROM `user`"
. " WHERE `account` = ? ";
$sth = $db->prepare($sql);
$sth->execute(array($_POST["email"]));
$result = $sth->fetchObject();
if($result->password){
	echo 'this account is used<br>';
	echo '<a href="http://people.cs.nctu.edu.tw/~yshsueh/sign_up.html">back</a>';
}

else if($_POST["email"] != "" && $_POST["password"] != ""){
	$sql = "INSERT INTO `user` (account, password,is_admin)" . " VALUES( ?,?,?)";
	$sth = $db->prepare($sql);
	$hash = crypt($_POST['password']);
	$sth->execute(array($_POST["email"],$hash,$_POST["admin"]));
	header('location:sign_in.html');
}
else{
 	echo '<a href="sign_up.html">go back to sign up</a>';
}
?> 