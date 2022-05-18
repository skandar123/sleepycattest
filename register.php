<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="formstyle.css">
</head>

<body>
<form action="welcome.php" method="post">
<div class="container">

<h1>Registration Form</h1>

<label for="email" class="txt">Email ID :</label>
<input type="text" name="email" required/><br /><br />

<label for="password" class="txt">Password :</label>
<input type="password" name="password" required/><br /><br />

<div align="center">
<input type="submit" name="register" value="Register" class="btn"/><br /><br />
</div>

<a href="login.php" class="txt">Have an account? Login Here</a><br /><br />

</div>

</form>

</body>
</html>