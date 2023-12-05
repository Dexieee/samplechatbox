<?php
	session_start();
	if(isset($_POST['username']) && !empty($_POST['username'])) {
		$_SESSION['username'] = $_POST['username'];
		header("Location: index.php");
		exit();
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			background-color: #335c67;
			font-family: Arial, Helvetica, sans-serif;
		}
		form {
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px #335c67;
			margin: 50px auto;
			max-width: 400px;
			padding: 20px;
		}
		h1 {
			margin-top: 0;
		}
		input[type="text"] {
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			border-radius: 5px;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}
	</style>
</head>
<body>
	<form method="post" action="">
		<h1>Login</h1>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" placeholder="Enter your username">
		<input type="submit" value="Login">
	</form>
</body>
</html>
