<?php
	include 'bdconnect.php';
	if(isset($_POST['newc'])){
		$name = mysqli_real_escape_string($connect, trim($_POST['Name']));
		$S_name = mysqli_real_escape_string($connect, trim($_POST['S_name']));
		$idvk = mysqli_real_escape_string($connect, trim($_POST['idvk']));
		$PP = mysqli_real_escape_string($connect, trim($_POST['PP']));
		$OOP = mysqli_real_escape_string($connect, trim($_POST['OOP']));
		$FIL = mysqli_real_escape_string($connect, trim($_POST['FIL']));
		$OSSP = mysqli_real_escape_string($connect, trim($_POST['OSSP']));
		$TIM = mysqli_real_escape_string($connect, trim($_POST['TIM']));
		$MVMI = mysqli_real_escape_string($connect, trim($_POST['MVMI']));
		$KrMVMI = mysqli_real_escape_string($connect, trim($_POST['KrMVMI']));
		$KV = mysqli_real_escape_string($connect, trim($_POST['KV']));
		$VP = mysqli_real_escape_string($connect, trim($_POST['VP']));
		$SZ = floor(($KV+$VP+$KrMVMI+$MVMI+$TIM+$OSSP+$FIL+$OOP+$PP)/9);
			$query = "INSERT INTO Evaluation (idvk, pp, oop, fil, ossp, tim, mvmi, krmvmi, kv, vp, sz) VALUES ('$idvk', '$PP', '$OOP', '$FIL','$OSSP', '$TIM', '$MVMI', '$KrMVMI', '$KV', '$VP', '$SZ')";
    			mysqli_query($connect, $query);
    		$query = "INSERT INTO Usernw (idvk, username, susername) VALUES ('$idvk','$name','$S_name')";
    			mysqli_query($connect, $query);
    		$query = "INSERT INTO nwtime (idvk) VALUES ('$idvk')";
    			mysqli_query($connect, $query);			
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
	<div id="centern"> <h1>Форма додавання ного користувача</h1><br/>
		<form method="POST" action="newclient.php">
			<input type="text" name="Name" placeholder="Name"> <br/>
			<br/>
			<input type="text" name="S_name" placeholder="S_name"> <br/>
			<br/>
			<input type="text" name="idvk" placeholder="idvk"> <br/>
			<br/>
			<h1>Навчальні бали</h1><br/>
			ПП <input type="text" id="user" name="PP"> 
			ООП <input type="text" id="user" name="OOP"> 
			ФІЛ <input type="text" id="user" name="FIL"><br/> 
			<br/>
			ОССП <input type="text" id="user" name="OSSP"> 
			ТІМ <input type="text" id="user" name="TIM"> 
			МВМІ <input type="text" id="user" name="MVMI"><br/>
			<br/>
			КрМВМІ <input type="text" id="user" name="KrMVMI"> 
			КВ <input type="text" id="user" name="KV"> 
			ВП <input type="text" id="user" name="VP"><br/>
			<br/>
			<input id="btm" type="submit" name="newc" value="Додати користувача">
		</form>	
					
	</div>
	<div id="rightpart">
		<img src="/image/2.jpg" width="100%" style="opacity: 0.6">
	</div>
	</content>
</body>
</html>