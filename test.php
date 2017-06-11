<?php

function korel($pol1){
include 'bdconnect.php';
$sum = "SELECT SUM($pol1) FROM Evaluation";
$dat = mysqli_query($connect, $sum);
while ($row = mysqli_fetch_row($dat)){
    $My = round($row[0]/11, 4);
    $M2y = round($My*$My, 4);
}
$sum = "SELECT SUM(time/60) FROM nwtime";
$dat = mysqli_query($connect, $sum);
while ($row = mysqli_fetch_row($dat)){
    $Mx = round($row[0]/11, 4);
    $M2x = round($Mx*$Mx, 4);
}
$sum = "SELECT SUM($pol1*time/60) FROM nwtime, Evaluation";
$dat = mysqli_query($connect, $sum);
while ($row = mysqli_fetch_row($dat)){
    $Mxy = round($row[0]/11, 4);
}
$sum = "SELECT SUM(time/60*time/60) FROM nwtime, Evaluation";
$dat = mysqli_query($connect, $sum);
while ($row = mysqli_fetch_row($dat)){
    $Mxx = round($row[0]/11, 4);
}
$sum = "SELECT SUM($pol1*$pol1) FROM nwtime, Evaluation";
$dat = mysqli_query($connect, $sum);
while ($row = mysqli_fetch_row($dat)){
    $Myy = round($row[0]/11, 4);
}
$sigx = round(sqrt($Mxx-$M2x), 4);
$sigy = round(sqrt($Myy-$M2y), 4);

$kor = round(($Mxy-$My*$Mx)/($sigx*$sigy), 4);
?>
 <table border="1" padding="1px" id="style_1">
<tr><td>M(x)</td><td>M^2(x)</td><td>M(x^2)</td><td>M(xy)</td><td>M(y)</td></tr><tr><td><?php echo $Mx;?></td><td><?php echo $M2x;?></td><td><?php echo $Mxx;?></td><td><?php echo $Mxy;?></td><td><?php echo $My;?></td></tr>
<tr><td>M^2(y)</td><td>M(y^2)</td><td>sigx</td><td>sigy</td><td>kor</td></tr><tr><td><?php echo $M2y;?></td><td><?php echo $Myy ;?></td><td><?php echo $sigx;?></td><td><?php echo $sigy ;?></td><td><?php echo $kor;?></td></tr>
</table>
<?php
}
?>