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
	
	<div id="centerm"> <h1>Зібрані дані</h1><br/>
        <table border="1" padding="1px"> 
			<tr><td>Ім'я</td><td>ПП</td><td>ООП </td><td>Філ </td><td>ОССП </td><td>ТІМ </td><td>МВМІ </td><td>КрМВМІ </td><td>КВ </td><td>ВП </td><td>СБ </td><td>Час(год.)</td></tr>
			<?php include 'bdconnect.php'; 
                  include 'test.php';
            while ($row1 = mysqli_fetch_array($data1) and $row2 = mysqli_fetch_array($data2) and $row3 = mysqli_fetch_array($data3) and $row4 = mysqli_fetch_array($data4) and $row5 = mysqli_fetch_array($data5) and $row6 = mysqli_fetch_array($data6) and $row7 = mysqli_fetch_array($data7) and $row8 = mysqli_fetch_array($data8) and $row9 = mysqli_fetch_array($data9) and $row10 = mysqli_fetch_array($data10) and $row11 = mysqli_fetch_array($data11) and $row12 = mysqli_fetch_array($data12)){?>
			<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row3['pp']; ?></td><td><?php echo $row4['oop']; ?></td><td><?php echo $row5['fil']; ?></td><td><?php echo $row6['ossp']; ?></td><td><?php echo $row7['tim']; ?></td><td><?php echo $row8['mvmi']; ?></td><td><?php echo $row9['krmvmi']; ?></td><td><?php echo $row10['kv']; ?></td><td><?php echo $row11['vp']; ?></td><td><?php echo $row12['sz'];   ?></td><td><?php echo floor($row2['time']/60); ?></td></td></tr>
			<?php }?>
        </table><br/> 
    </div>
    <div id="result">
        <h1>Знаходження кореляційного момента для навчальної дисципліни Паралельне програмування:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>ПП</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php'; 
        	while ($row1 = mysqli_fetch_array($data1) and $row3 = mysqli_fetch_array($data3) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row3['pp']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>   
        </table><br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='pp'; korel($pol1); ?><br/><br/>
    
        
        <h1>Знаходження кореляційного момента для навчальної дисципліни Основи охорони праці:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>ООП</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row4 = mysqli_fetch_array($data4) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row4['oop']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table><br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='oop'; korel($pol1); ?><br/><br/>

        <h1>Знаходження кореляційного момента для навчальної дисципліни Філософія:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>Філ</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row5 = mysqli_fetch_array($data5) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row5['fil']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table><br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='fil'; korel($pol1); ?><br/><br/>
        <h1>Знаходження кореляційного момента для навчальної дисципліни Операційні системи та системне програмування:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>ОССП</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row6 = mysqli_fetch_array($data6) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row6['ossp']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table><br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='ossp'; korel($pol1); ?><br/><br/>
        <h1>Знаходження кореляційного момента для навчальної дисципліни Технологія інформаційного менеджменту:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>ТІМ</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row7 = mysqli_fetch_array($data7) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row7['tim']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table><br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='tim'; korel($pol1); ?><br/><br/>
        <h1>Знаходження кореляційного момента для навчальної дисципліни Методика викладання математики і інформатики:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>МВМІ</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row8 = mysqli_fetch_array($data8) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row8['mvmi']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table><br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='mvmi'; korel($pol1); ?><br/><br/>
        <h1>Знаходження кореляційного момента для Курсової роботи Методика викладання математики і інформатики:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>КрМВМІ</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row9 = mysqli_fetch_array($data9) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row9['krmvmi']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table><br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='krmvmi'; korel($pol1); ?><br/><br/>
        <h1>Знаходження кореляційного момента для навчальної дисципліни Комп'ютерна вірусологія:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>КВ</td><td>Час</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row10 = mysqli_fetch_array($data10) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row10['kv']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table><br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='kv'; korel($pol1); ?><br/><br/>
        <h1>Знаходження кореляційного момента для Виробничої практиктики:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>ВП</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row11 = mysqli_fetch_array($data11) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row11['vp']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table> <br/>
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='vp'; korel($pol1); ?><br/><br/>

        <h1>Знаходження кореляційного момента для середнього балу:</h1><br/>
        <table border="1" padding="1px" id="style_1">
        	<tr><td>Ім'я</td><td>СБ</td><td>Час(год.)</td></tr>
        	
        	<?php include 'bdconnect.php';
        	while ($row1 = mysqli_fetch_array($data1) and $row12 = mysqli_fetch_array($data12) and $row2 = mysqli_fetch_array($data2)){?>
        	<tr><td><?php echo $row1['username']; ?></td><td><?php echo $row12['sz']; ?></td><td><?php echo floor($row2['time']/60); ?></td></tr>
        	<?php }?>
        </table> <br/> 
        <h1> Результати пошуку кореляційного моменту:</h1>  
        <?php $pol1='sz'; korel($pol1); ?><br/><br/>
	</div>
    <div id="graf"><br/><br/><br/><br/><br/>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawPPChart);
      google.charts.setOnLoadCallback(drawOOPChart);
      google.charts.setOnLoadCallback(drawFILChart);
      google.charts.setOnLoadCallback(drawOSSPChart);
      google.charts.setOnLoadCallback(drawTIMChart);
      google.charts.setOnLoadCallback(drawMVMIChart);
      google.charts.setOnLoadCallback(drawKrMVMIChart);
      google.charts.setOnLoadCallback(drawKVChart);
      google.charts.setOnLoadCallback(drawVPChart);
      google.charts.setOnLoadCallback(drawSZChart);

      function drawPPChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      70, null],
          [ 3,      85, null],
          [ 4,      90, null],
          [ 1,      65, 72],
          [ 2,      60, null],
          [ 12,     90, 92],
          [ 1,      65, null],
          [ 5,      78, null],
          [ 6,      66, null],
          [ 3,      65, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('PPchart_div'));
        chart.draw(data, options);
      }


      function drawOOPChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      90, null],
          [ 3,      90, null],
          [ 4,      90, null],
          [ 1,      60, 80],
          [ 2,      84, null],
          [ 12,     90, 95],
          [ 1,      60, null],
          [ 5,      82, null],
          [ 6,      90, null],
          [ 3,      85, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('OOPchart_div'));
        chart.draw(data, options);
      }
     
 function drawFILChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      81, null],
          [ 3,      81, null],
          [ 4,      90, null],
          [ 1,      60, 77],
          [ 2,      80, null],
          [ 12,     90, 95],
          [ 1,      60, null],
          [ 5,      82, null],
          [ 6,      90, null],
          [ 3,      82, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('FILchart_div'));
        chart.draw(data, options);
      }

 function drawOSSPChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      84, null],
          [ 3,      85, null],
          [ 4,      83, null],
          [ 1,      64, 73],
          [ 2,      65, null],
          [ 12,     90, 95],
          [ 1,      64, null],
          [ 5,      78, null],
          [ 6,      65, null],
          [ 3,      65, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('OSSPchart_div'));
        chart.draw(data, options);
      }
 function drawTIMChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      90, null],
          [ 3,      60, null],
          [ 4,      90, null],
          [ 1,      60, 70],
          [ 2,      62, null],
          [ 12,     75, 95],
          [ 1,      60, null],
          [ 5,      75, null],
          [ 6,      74, null],
          [ 3,      74, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('TIMchart_div'));
        chart.draw(data, options);
      }
 function drawMVMIChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      90, null],
          [ 3,      60, null],
          [ 4,      90, null],
          [ 1,      60, 70],
          [ 2,      74, null],
          [ 12,     90, 95],
          [ 1,      60, null],
          [ 5,      75, null],
          [ 6,      75, null],
          [ 3,      82, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('MVMIchart_div'));
        chart.draw(data, options);
      }
 function drawKrMVMIChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      90, null],
          [ 3,      75, null],
          [ 4,      90, null],
          [ 1,      70, 78],
          [ 2,      75, null],
          [ 12,     90, 95],
          [ 1,      70, null],
          [ 5,      74, null],
          [ 6,      80, null],
          [ 3,      75, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('KrMVMIchart_div'));
        chart.draw(data, options);
      }
 function drawKVChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      90, null],
          [ 3,      90, null],
          [ 4,      90, null],
          [ 1,      64, 70],
          [ 2,      74, null],
          [ 12,     90, 95],
          [ 1,      65, null],
          [ 5,      74, null],
          [ 6,      90, null],
          [ 3,      70, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('KVchart_div'));
        chart.draw(data, options);
      }
 function drawVPChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      90, null],
          [ 3,      80, null],
          [ 4,      90, null],
          [ 1,      65, 78],
          [ 2,      80, null],
          [ 12,     98, 90],
          [ 1,      60, null],
          [ 5,      85, null],
          [ 6,      60, null],
          [ 3,      75, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('VPchart_div'));
        chart.draw(data, options);
      }
 function drawSZChart() {
        var data = google.visualization.arrayToDataTable([
          ['Час', 'Бал', 'Line'],
          [ 6,      86, null],
          [ 3,      78, null],
          [ 4,      89, null],
          [ 1,      63, 75],
          [ 2,      72, null],
          [ 12,     89, 90],
          [ 1,      62, null],
          [ 5,      78, null],
          [ 6,      76, null],
          [ 3,      74, null]
        ]);

        var options = {
          title: 'Лінія регресії',
          hAxis: {title: 'Час', minValue: 0, maxValue: 15},
          vAxis: {title: 'Бал', minValue: 0, maxValue: 100},
          legend: 'none',
          interpolateNulls: true,
            series: {

            1: { lineWidth: 2, pointSize: 0 }

          }
        };
        var chart = new google.visualization.ScatterChart(document.getElementById('SZchart_div'));
        chart.draw(data, options);
      }
    </script>

    
<div id="PPchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc;"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="OOPchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="FILchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="OSSPchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="TIMchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="MVMIchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="KrMVMIchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="KVchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="VPchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="SZchart_div" style="width: 100%; height: 400px; border: 1px solid #ccc"></div>

        <div>
	
	</content>
</body>




</html>