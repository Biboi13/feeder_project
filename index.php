<!DOCTYPE html>
<html>


<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title>Login</title>

</head>

<body>
	<div class="login">
		<h1>Login</h1>
		<form action="include/authenticate.php" method="post">
			
			<input type="text" name="username" placeholder="Username" id="username" required>
			
			<input type="password" name="password" placeholder="Password" id="password" required>
		
			<input type="submit" value="Login">
		</form>
	</div>
</body>

</html>