<?php 
    include 'bdconnect.php';
    if(isset($_POST['reg'])){
    	$username = mysqli_real_escape_string($connect, trim($_POST['login']));
    	$email = mysqli_real_escape_string($connect, trim($_POST['email']));
    	$password1 = mysqli_real_escape_string($connect, trim($_POST['password']));
    	$password2 = mysqli_real_escape_string($connect, trim($_POST['rpassword']));
    	if(!empty($username) && !empty($email) && !empty($password1) && !empty($password2) && ($password1==$password2)){
    		$query = "SELECT * FROM Register WHERE login = '$username'";
    		$data = mysqli_query($connect,$query);
    		if(mysqli_num_rows($data)==0) {
    			$query = "INSERT INTO Register (login, email, password) VALUES ('$username','$email','$password1')";
    			mysqli_query($connect, $query);
    			header('Refresh: 4; URL=http://dip/index.php');
    		} else {
    			echo "fuck you";
    			exit();
    		}
    	}
    }
   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charser="utf-8">
	<title> Дипломна робота</title>
	<link href="/CSS/style.css" rel="stylesheet" type="text/css">
</head>	
<body>
	<header>
	<div id="logo">Веб-сайт для визначення часу студента в мережі</div>
	<div id="authreg">  <div><a href="index.php">Головна сторінка</a></div>  
					    <div><a href="register.php">Реєстрація</a></div>  
					    <div><a href="authorization.php">Авторизація</a></div>
	</div>
	</header> 
	<content>
	<div id="leftpart">
		<img src="/image/1.jpg" width="100%" style="opacity: 0.6">
	</div>
	<div id="center"> <h1>Реєстрація користувача</h1><br/>
		<form method="POST" action="register.php">
			<input type="login" name="login" placeholder="Username"><br/>
			<br/>
			<input type="email"  name="email" placeholder="Email"><br/>
			<br/>
			<input type="password"  name="password"  placeholder="Password"><br/>
			<br/>
			<input type="password"  name="rpassword"  placeholder="RPassword"><br/>
			<br/>
			<input id="btm" type="submit" name="reg" value="Реєстрація">
		</form>	
					
	</div>
	<div id="rightpart">
		<img src="/image/2.jpg" width="100%" style="opacity: 0.6">
	</div>
	</content>
</body>
</html>