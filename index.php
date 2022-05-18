<?php
  include('session.php');
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="formstyle.css">
</head>

<body class="home">
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="login.php">Log In</a></li>
  <li><a href="logout.php">Log Out</a></li>
  <li><a href="register.php">Register</a></li>
  <li class="user"><?php echo $login_session; ?></li>
</ul>

<div align="center">
<h3>Login Successful!</h3>
<img src="sleepycat.png" align="middle"><br /><br />
</div>
</body>
</html>