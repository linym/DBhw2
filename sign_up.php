<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>flight schedule</title>
	</head>
	<body>
		<h1>Sign up</h1>
		<form action="signup.php" method="POST">
			Email:<br><input type="text" name="email"><br>
			Password:<br><input type="password" name="password"><br>
			<select name="admin">
				<Option value="1">admin</Option>
				<Option value="0">user</Option>
			</select><br><br>
			<button type="submit">sign up</button>
		</form>
		<p>
		<a href="http://people.cs.nctu.edu.tw/~linym/signin.php">Sign in</a>
		</p>
	</body>
</html>