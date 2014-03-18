<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<meta charset="UTF-8"/>
</head>

<body>
<?php
//session_start();

require_once('connect.php');
$sql = "SELECT password FROM `user`" . " WHERE `account` = ?";
$sth = $db->prepare($sql);
$sth->execute(array($_POST["email"]));
$result = $sth->fetchObject();
if (crypt($_POST["password"], $result->password) == $result->password) {
   echo 'successflly<br>';
   echo '<a href="newfly.php">Go to add flight</a>';
   if($result->is_admin){  	echo '<a href="newfly.php">Go to add flight</a>';}
   if($result->is_admin){  	echo '<a href="list.php">Go to flight list</a>';}
   //$_SESSION['login']=1;
}
else if(!$result){echo 'you have not sign up this account';}
else if(crypt($_POST["password"], $result->password) != $result->password){
	echo 'wrong password';
}




?>

</body>


</html>

