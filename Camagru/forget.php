<<?php
session_start();
?>
<html>
	<head>
		<link rel = "stylesheet" href = "style/style.css">
		<title>Forgot</title>
	</head>
	<body background = "https://images.pexels.com/photos/924002/pexels-photo-924002.jpeg?cs=srgb&dl=background-black-and-white-close-up-924002.jpg&fm=jpg"> 
<form method="post" style="position: relative;" action="forms/forget.php">
<div class="imgcontainer">
	  <h1 class="Cam">FORGOT</h1>
  </div>
  <div class="container">
    <label for="uname"><b>Email:</b></label>
    <input type="text" placeholder="Email" id="mail" name="email">
	<button type="submit" name="submit" value=" SEND ">Send</button>
	</form>
  </div>
  <span>
   <?php
      echo $_SESSION['error'];
      $_SESSION['error'] = null;
      if (isset($_SESSION['forgot_success'])) {
        echo "An email has been sent to your email address";
        $_SESSION['forgot_success'] = null;
      }
      ?>
	</span>
	</body>
</html>
