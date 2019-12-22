<?php 

require('config/db.php');
require('config/config.php');
session_start();
$query = "SELECT * FROM gps1 where gsm=9000000000";
$result = mysqli_query($conn,$query);
if($result){
	$gps = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$lat = $gps['lat'];
	$lng = $gps['lng'];
	$tim = $gps['dtime'];
	$name= $gps['vehname'];
	echo json_encode(array($lat, $lng, $tim, $name));		
}else{
		echo "2";
	}
?>