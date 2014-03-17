<!DOCTYPE html>
<html>
<head>
<title>hahahahahahahahaha</title>
<meta charset="UTF-8"/>
</head>

<body>
<h1 style="color:orange">航空機のスケジュール</h1>

<p>
<form action="login.php" method="POST">
<h2>ログイン<br></h2>
メール<br>
<input type="text" name="email"><br>
パスワード<br>
<input type="password" name="password"> <br>
<input value="on" type="checkbox">ログインしたままにする<br>
<button type="submit">ログイン</button><br>
</p>

<?php
$_POST['email'];
	$db_host = "dbhome.cs.nctu.edu.tw";
	$db_name = "linym_cs";
	$db_user = "linym_cs";
	$db_password = "xup6u.4aup6";
	$dsn = "mysql:host=$db_host;dbname=$db_name";
	$db = new PDO($dsn, $db_user, $db_password);
	
	$sql = "INSERT INTO `user` (id, account, password, is_admin)". " VALUES(?, ?, ?, ?)"; 
	$sth = $db->prepare($sql); 
	$sth->execute(array(1, 'linym', '123456', TRUE)); 

?>


<!--
馬來肥你好
</form
<p>
<form action="login.php" method="POST">
	<input type="text" name="email">
	<input type="password" name="password"> 
</form
</p>

<table border="10">
	<tr>
		<th>
			嘿嘿
		</th>
		<th>
			嘿嘿2
		</th>
		<th>
			嘿嘿3
		</th>
	</tr>
	<tr>
		<td>
			嘿嘿4
		</td>
		<td>
			嘿嘿5
		</td>
		<td>
			嘿嘿66
		</td>
	</tr>	
</table>

AAAAAAAAAAAA





<?php
echo "Hello World!";
?>
-->
</form>
 </body>


</html>

