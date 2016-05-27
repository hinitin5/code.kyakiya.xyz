<?php
session_start();
include('../base_url.php');
$_SESSION['base_url']=$base_url;
if(isset($_SESSION['status'])) {
	if($_SESSION['status']==='active') {
    header('Location: '.$_SESSION['base_url'].'main.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

<div class="logo"></div>
<div class="login-block">

    <h1>Login</h1>
    <form name="login_form" method="post" action="">
    <input type="text" value="" placeholder="Username" name="username" />
    <input type="password" value="" placeholder="Password" name="password" />
    <input type="submit" name="submit" value="Submit" class="submit_button">
    </form>
</div>

<?php

if(isset($_POST['username']) && isset($_POST['password'])) {

    if($_POST['username']==="root" && $_POST['password']==="toor") {
        $_SESSION['status']="active";
        header('Location: '.$base_url);
    } else {
        echo '<script>alert("Invalid Username or Password");</script>';
    }
} 
?>

</body>
</html>