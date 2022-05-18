<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="formstyle.css">
</head>

<body>
<?php 
require_once('config.php');

if(isset($_POST)){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO users (email, password) VALUES(?,?)";
    $stmt=$conn->prepare($sql);
    $result=$stmt->execute([$email, $password]);
    if($result){
        $output = "You have been registered successfully!";
    }else{
        $output = "You couldn't be registered.";
    }
}else{
    $output = "No information was submitted.";
}
?>
<div align="center">
<div class="container"><?php echo $output; ?></div>
<a href="login.php">Login Here</a>
</div>
</body>
</html>