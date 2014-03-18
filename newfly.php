<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>flight schedule</title>
	</head>
	<body>
		<h1>ADD ADD ADD ADD ADD ADD ADD ADD ADD ADD ADD ADD ADD ADD </h1>
		<form action="signup.php" method="POST">
			Code:<br><input type="text" name="code"><br>
			From:<br><input type="text" name="from"><br>
			To:<br><input type="text" name="to"><br>
				<?php
				echo '<select name="year">';
					for($x = 2014; $x<=9999; $x++)
					for($x = 2014; $x<=9999; $x++)
					echo '<Option value="">'.$x.'</Option>}';
				echo '</select>';
				?>  
			<select name="month">
				<Option value="1">Jan</Option>
				<Option value="2">Feb</Option>
				<Option value="3">Mar</Option>
				<Option value="4">Apr</Option>
				<Option value="5">May</Option>
				<Option value="6">Jun</Option>
				<Option value="7">Jul</Option>
				<Option value="8">Aug</Option>
				<Option value="9">Sep</Option>
				<Option value="10">Oct</Option>
				<Option value="11">Nov</Option>
				<Option value="12">Dec</Option>
			</select> 
			
				<?php
				echo '<select name="date">';
					for($x = 1; $x<=31; $x++)
					echo '<Option value="">'.$x.'</Option>}';
				echo '</select>';
				?>--
				<?php
				echo '<select name="hour">';
					for($x = 1; $x<=24; $x++)
					echo '<Option value="">'.$x.'</Option>}';
				echo '</select>';
				?> : 
				<?php
				echo '<select name="minute">';
					for($x = 1; $x<=60; $x++)
					echo '<Option value="">'.$x.'</Option>}';
				echo '</select>';
				?>
				Company:<br><input type="text" name="company"><br>
			
			
			

			
			<button type="submit">create plane</button>
		</form>
		<p>
		<a href="http://people.cs.nctu.edu.tw/~linym/signin.php">Sign in</a>
		</p>
	</body>
</html>