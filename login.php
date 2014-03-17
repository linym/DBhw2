<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<meta charset="UTF-8"/>
</head>

<body>


<?php

	$db_host = "dbhome.cs.nctu.edu.tw";
	$db_name = "linym_cs";
	$db_user = "linym_cs";
	$db_password = "xup6u.4aup6";
	$dsn = "mysql:host=$db_host;dbname=$db_name";
	$db = new PDO($dsn, $db_user, $db_password);
	
	$sql = "INSERT INTO `user` (id, account, password, is_admin)". " VALUES(?, ?, ?, ?)"; 
	$sth = $db->prepare($sql); 
	$hash = crypt($_POST['password']);
	$sth->execute(array(1, $_POST['account'], $hash, $_POST['is_admin'])); 

?>

</body>


</html>

