<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
  			<div>trip<span>NOW.vn</span></div>
		</div>
		<br>
	<div class="login">
		<form action="register.php" method="POST">
		  <input class="text_input" type="text" placeholder="username" name="username"><br>
		  <input class="text_input" type="password" placeholder="password" name="password"><br>
		  <input class="text_input" type="password" placeholder="confirm password" name="confirm_password"><br>
		  <input class="login-button" type="submit" value="Register" name="OK">
	  	</form>
	</div>

	<?php
	session_start();
	 if(isset($_SESSION['username'])) header("location:index.php");
		if(isset($_POST['OK']))
		{
			$username = $password = $confirm_password = "";
			if($_POST['username'] == NULL)
				echo "Please enter your username";
			else
				$username = $_POST['username'];
			if($_POST['password'] == NULL)
				echo "Please enter your password";
			else
				$password = $_POST['password'];
			if($_POST['confirm_password'] == NULL)
				echo "Please enter your confirm password";
			else
				$confirm_password = $_POST['confirm_password'];

			if($username && $password && $confirm_password && ($password == $confirm_password)){
	    	$link = new mysqli('localhost:3306', 'root', '', 'tourist');
			if ($link->connect_error) {
	    		die("Kết nối thất bại: " . $link->connect_error);
			}
			$pass = md5($password);
			$sql = "Insert into users(username,password,role) values('".$username."','".$pass."','user')";
			$result = $link->query($sql);
			$_SESSION['username'] = $username;
			header('Location: index.php');

			mysqli_close($link);
		}
		}
    	?>
</body>
</html>