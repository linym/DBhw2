<?php

require_once('connect.php');

$sql = "SELECT * FROM `user`". " WHERE `account` = ? ";
$sth = $db->prepare($sql);
$sth->execute(array($_POST["email"]));
$result = $sth->fetchObject();
if($result->password){
	echo 'this account is used<br>';
	echo '<a href="http://people.cs.nctu.edu.tw/~linym/sign_up.php">back</a>';
}

else if($_POST["email"] != "" && $_POST["password"] != ""){

	$sql = "INSERT INTO `user` (account, password,is_admin)" . " VALUES( ?,?,?)";
	$sth = $db->prepare($sql);
	$hash = crypt($_POST['password']);
	$sth->execute(array($_POST["email"],$hash,$_POST["admin"]));

	header("Refresh: 3; url=signin.php");
	echo 'sign up successfully, wait 3 seconds to return';
}
else{
 	echo '<a href="sign_up.php">go back to sign up</a>';
}
?> 