<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $myusername = mysqli_real_escape_string($conn,$_POST['email']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
    
    $sql2 = "SELECT id FROM users WHERE email = '$myusername' and password = '$mypassword'";
    $result2 = mysqli_query($conn,$sql2);
    
    $count = mysqli_num_rows($result2);
    if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        if(isset($_POST['remember'])){
            $_SESSION['remember'] = true;
        }
        header("location: index.php");
    }else {
        $error = "Your Email Id or Password is invalid";
    }
}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="formstyle.css">
</head>

<body>

<form action="" method = "post">
<div class="container">

<h1>Log In</h1>

<label for="email" class="txt">Email ID :</label>
<input type="text" name="email" required/><br /><br />

<label for="password" class="txt">Password :</label>
<input type="password" name="password" required/><br /><br />

<input type="checkbox" name="remember"/><span class="txt">Remember Me</span><br /><br />

<div align="center">
<input type="submit" name="login" value="Log In" class="btn"/><br /><br />
</div>

<a href="register.php" class="txt">New User? Register Here</a><br /><br />
</div>
<br />
<div class="err"><?php echo $error; ?></div>
		
</form>

</body>
</html>