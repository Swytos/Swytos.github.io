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
	<div id="authreg"><?php
								if(empty($_COOKIE['login'])){
							?>
						<div><a href="index.php">Головна сторінка</a></div>  
					    <div><a href="register.php">Реєстрація</a></div>  
					    <div><a href="authorization.php">Авторизація</a></div>
						<?php
							} else {
							?>
						<div><a href="index.php">Головна сторінка</a></div>  
					    <div><a href="Kabin.php"><?php echo $_COOKIE['login']; ?></div>  
					    <div><a href="logout.php">Вийти</a></div>
						<?php
							}
							?>
	                    	</div>
	</header> 
	<content>
	<div id="leftpart">
		<img src="/image/1.jpg" width="100%" style="opacity: 0.6">
	</div>
	<div id="centerg"> <h1>Даний додаток розроблений з метою дослідження впливу соціальних мереж на успішність студентів в навчанні.</h1>
                      <h1>Розробка не передбачає фінансової вигоди.</h1>
	</div>
	<div id="rightpart">
		<img src="/image/2.jpg" width="100%" style="opacity: 0.6">
	</div>
	</content>
</body>
</html>