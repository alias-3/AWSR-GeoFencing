<?php 
require('config/db.php');
require('config/config.php');
error_reporting(E_ALL);
//error_reporting(E_ERROR|E_PARSE);
session_start();


$query = "SELECT * FROM gps1";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
$offers = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>





<!DOCTYPE html>
<html>
<head>
	<?php require_once 'boilerplate.php' ?>
	<style>
		.fa-user{
			color: #900C3F;
			font-size: 40px;
		}

		.nav-link:hover{
			font-weight: bold;
		}

		.flex-column{
			margin-left: 20px !important;
		}


	</style>
</head>
<body>
	

	<?php foreach($offers as $offer) : ?> 
	<?php echo $offer['vehname']; ?>
<?php endforeach ?>

</body>
</html>