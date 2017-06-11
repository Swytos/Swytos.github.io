<?php
include 'bdconnect.php';
	  $query = "SELECT idvk, time FROM nwtime";	
		$data = mysqli_query($connect, $query);
		while($row = mysqli_fetch_array($data)){
	  $user_id = $row['idvk']; 
    $usertime = ($row['time']+2);
		$request_params = array('user_id' => $user_id, 'count' => 20, 'fields' => 'online','v' => '5.52'); 
    $get_params = http_build_query($request_params); 
    $result = json_decode(file_get_contents('https://api.vk.com/method/users.get?'. $get_params)); 
   	if(($result -> response[0] -> online)==1){
      	$query = "UPDATE nwtime SET time = '$usertime' WHERE idvk = '$user_id'";
        mysqli_query($connect, $query);		
        					
    } 
		} 						
?>