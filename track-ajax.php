<?php 

require('config/db.php');
require('config/config.php');
session_start();
$query = "SELECT * FROM gps1";
$result = mysqli_query($conn,$query);
if($result){
	$gps = mysqli_fetch_all($result,MYSQLI_ASSOC);

	$arr = [];
	foreach ($gps as $g ) {
	$lat = $g['lat'];
	$lng = $g['lng'];
	$tim = $g['dtime'];
	$name = $g['vehname'];

	array_push($arr, $lat, $lng, $name);
	}
	
	echo json_encode($arr);		
}else{
		echo "2";
	}
?>