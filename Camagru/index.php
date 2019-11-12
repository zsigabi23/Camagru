<?php
session_start();
?>
<html>
	<head>
		<link rel = "stylesheet" href = "style/style.css">
		<title>Login</title>
	</head><body background = "https://images.pexels.com/photos/924002/pexels-photo-924002.jpeg?cs=srgb&dl=background-black-and-white-close-up-924002.jpg&fm=jpg">
  
  <?php include('fragments/header.php') ?>
  <?php if(isset($_SESSION['id'])) { ?>
          You are connected as <?php print_r(htmlspecialchars($_SESSION['username'])) ?>
        <?php } else { ?>  
  <form method="post" style="position: relative;" action="forms/login.php">
  <div class="imgcontainer">
	  <h1 class="Cam">Login</h1>
  </div>
  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Email" id="mail" name="email">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password">

	<button type="submit" name="submit" value=" SEND ">Send</button>
  </div>
  <div class="container" style="background-color:#f1f1f1">
   <button type="submit"><a href="registration.php">Create account</a></button>
    <a href="forget.php">Forget password ?</a>
  </div>
  <span>
    <?php
if ($_SESSION['error']) {
  echo $_SESSION['error'];
}
      $_SESSION['error'] = null;
    ?>
  </span>
</form>
<?php } ?>
	</body>
</html>
