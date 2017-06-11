<?php
	if(isset($_POST['newc'])){
		header('Location: http://dip/newclient.php');
	} 
	if(isset($_POST['demo'])){
		header('Location: http://dip/demo.php');
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
					    <div><a href="Kabin.php"><?php echo $_COOKIE['login']; ?></div>  
					    <div><a href="logout.php">Вийти</a></div>
	</div>
	</header> 
	<content>
	<div id="leftpart">
		<img src="/image/1.jpg" width="100%" style="opacity: 0.6">
	</div>
	<div id="centerg"> <h1>Кабінет користувача</h1><br/>
	<form method="POST" action="kabin.php">
			<input id="btm" type="submit" name="newc" value="Додати нового користувача"><br/>
			<br/>
			<input id="btm" type="submit" name="demo" value="Демонстрація роботи">
		</form>
	</div>
	<div id="rightpart">
		<img src="/image/2.jpg" width="100%" style="opacity: 0.6">
	</div>
	</content>
</body>
</html>