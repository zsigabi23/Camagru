<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" href = "style/stylesheet.css">
		<meta charset="UTF-8">
		<title>Registration</title>
	</head>
	<body background = "https://images.pexels.com/photos/924002/pexels-photo-924002.jpeg?cs=srgb&dl=background-black-and-white-close-up-924002.jpg&fm=jpg">
	<form method="post" style="position: relative;" action="forms/registration.php">
  <div class="imgcontainer">
	  <h1 class="Cam">Create Account</h1>
  </div>
  <div class="container">
    <label for="email"><b>Email</b></label>
	<input id = "mail" name="email" placeholder="email" type="text">
	
	<label for="uname"><b>Username</b></label>
    <input id="name" name="username" placeholder="username" type="text">

	<label for="psw"><b>Password</b></label>
    <input id="password" name="password" placeholder="password" type="password">
	<input name="submit" type="submit" value=" SEND ">
	<span>
		<?php
		echo $_SESSION['error'];
		$_SESSION['error'] = null;
		if (isset($_SESSION['signup_success'])) {
			echo "registration success please check your mail box";
			$_SESSION['signup_success'] = null;
		}
		?>
	</span>
	</div>
</form>
	</body>
</html>
