<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		<form action="login.php" method="POST">
		  <input class="text_input" type="text" placeholder="username" name="username"><br>
		  <input class="text_input" type="password" placeholder="password" name="password"><br>
		  <input class="login-button" type="submit" value="Login" name="OK">
	  	</form>
	</div>

	<?php
	session_start();
	 if(isset($_SESSION['username'])) header("location:index.php");
		if(isset($_POST['OK']))
		{
			$username = $password = "";
			if($_POST['username'] == NULL)
				echo "Please enter your username";
			else
				$username = $_POST['username'];
			if($_POST['password'] == NULL)
				echo "Please enter your password";
			else
				$password = $_POST['password'];

			if($username && $password){
	    	$link = new mysqli('localhost:3306', 'root', '', 'tourist');
			if ($link->connect_error) {
	    		die("Kết nối thất bại: " . $link->connect_error);
			}
			$pass = md5($password);
			$sql = "Select * from users where username = '$username' and password = '$pass'";
			$result = $link->query($sql);
			$count = mysqli_num_rows($result);
	        if($count == 1){
	            $_SESSION['username'] = $username;
	            header("location: index.php");
	        }
	        else header("location: login.php");
			mysqli_close($link);
		}
		}
    	?>
</body>
</html>