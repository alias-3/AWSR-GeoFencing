<?php 
require('config/db.php');
require('config/config.php');
error_reporting(E_ALL);
//error_reporting(E_ERROR|E_PARSE);
session_start();


$query = "SELECT * FROM gps1  ORDER BY dtime DESC";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result)
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
	<?php require_once 'navbar.php'?>

	<div class="container-fluid row">
		<?php require_once 'dashboard-navbar.php'?>	

        <div class="col-offset-2 container" style="margin: 150px 40px 40px 300px">			
			<div class="display-4" style="margin-bottom: 20px">Vehicle Logs&nbsp;: </div>
			<table class="table">
				<thead class="thead-dark">
				<tr>
        			<th>Vehicle</th>
			        <th>Latitude</th>
        			<th>Longitude</th>
        			<th>Date-Time</th>
			        <th>Status</th>	      
      			</tr>					
				</thead>
				<?php while($row = mysqli_fetch_assoc($result)){  ?>
				<tbody>
				<tr>		
					<td><div id="tab-elm"><?php echo $row["vehname"];?></div></td>
					<td><div id="tab-elm"><?php echo $row["lat"];?></div></td>
					<td><div id="tab-elm"><?php echo $row["lng"];?></div></td>
					<td><div id="tab-elm"><?php echo $row["dtime"];?></div></td>
					<td><div id="tab-elm"><?php echo $row["status"];?></div></td>
				</tr>
				</tbody>
		
			<?php  }?>
				
			</table>
		</div>



	</div>	

	

</body>
</html>