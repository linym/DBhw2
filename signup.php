<?php

require_once('connect.php');

<<<<<<< HEAD
$sql = "SELECT * FROM `user`". " WHERE `account` = ? ";
=======
$sql = "SELECT * FROM `user`"
. " WHERE `account` = ? ";
>>>>>>> 7c14894337be1320e573adc6fc550481e8cbb4f2
$sth = $db->prepare($sql);
$sth->execute(array($_POST["email"]));
$result = $sth->fetchObject();
if($result->password){
	echo 'this account is used<br>';
<<<<<<< HEAD
	echo '<a href="http://people.cs.nctu.edu.tw/~linym/sign_up.php">back</a>';
}

else if($_POST["email"] != "" && $_POST["password"] != ""){

=======
	echo '<a href="http://people.cs.nctu.edu.tw/~yshsueh/sign_up.html">back</a>';
}

else if($_POST["email"] != "" && $_POST["password"] != ""){
>>>>>>> 7c14894337be1320e573adc6fc550481e8cbb4f2
	$sql = "INSERT INTO `user` (account, password,is_admin)" . " VALUES( ?,?,?)";
	$sth = $db->prepare($sql);
	$hash = crypt($_POST['password']);
	$sth->execute(array($_POST["email"],$hash,$_POST["admin"]));
<<<<<<< HEAD

	header("Refresh: 3; url=signin.php");
	echo 'sign up successfully, wait 3 seconds to return';
}
else{
 	echo '<a href="sign_up.php">go back to sign up</a>';
=======
	header('location:sign_in.html');
}
else{
 	echo '<a href="sign_up.html">go back to sign up</a>';
>>>>>>> 7c14894337be1320e573adc6fc550481e8cbb4f2
}
?> 