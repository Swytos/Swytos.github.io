<?php
	include 'bdconnect.php';
	if(!isset($_COOKIE['id'])){
		if(isset($_POST['auth'])){
			$user_username = mysqli_real_escape_string($connect, trim($_POST['login']));
			$user_password = mysqli_real_escape_string($connect, trim($_POST['password']));
			if(!empty($user_username) && !empty($user_password)){
				$query = "SELECT id , login FROM Register WHERE login = '$user_username' AND password = '$user_password'";
				$data = mysqli_query($connect,$query);
					if(mysqli_num_rows($data) == 1){
						$row = mysqli_fetch_assoc($data);
						setcookie('id',$row['id'], time() + (60*60*24*30));
						setcookie('login',$row['login'], time() + (60*60*24*30));
						header('Location: http://dip/kabin.php');
					} else {
						echo 'fuck you';
						exit;
					}
			}
		}
	} else {
		header('Location: http://dip/kabin.php');
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
	<div id="center"> <h1>Авторизація користувача</h1><br/>
		<form method="POST" action="authorization.php">
			<input type="text" name="login" placeholder="Username"><br/>
			<br/>
			<input type="password"  name="password"  placeholder="Password"><br/>
			<br/>
			<input id="btm" type="submit" name="auth" value="Авторизація">
		</form>	
					
	</div>
	<div id="rightpart">
		<img src="/image/2.jpg" width="100%" style="opacity: 0.6">
	</div>
	</content>
</body>
</html>