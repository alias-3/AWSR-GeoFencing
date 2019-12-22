<!DOCTYPE html>
<html>
<head>
	<?php require_once 'boilerplate.php' ?>
	<style type="">
		.fa-user-circle{
			color: white;
			font-size: 40px;
		}
		.fa-map-marker,.fa-compass{
			color: white;
			font-size: 20px;
		}
		.fa-compass{
			color: white;
			font-size: 20px;
		}

		#sol-1:hover,#sol-2:hover{
			box-shadow: 0 6px 6px 6px rgba(0,0,0,0.3), 0 0 0 2px rgba(0,0,0,0.08);
		}
		#sol-1,#sol-2{
			background-color: #F5F5F5;
			/*height: 350px;*/
			border-radius: 12px;	
			margin: 30px;	
			padding: 40px;
			
		}


	</style>
</head>
<body>
	<?php require_once 'navbar.php' ?>
	<div class="row container-fluid" style="margin:80px auto 80px auto;">
		<div id="sol-1" class="col text-center">
			<div class="text-center display-4" style="margin-bottom: 40px">AGF v1.0.2<h5 style="padding-top: 10px">AWSR-Geo-Fencing</h5></div>
			<hr width="95%" style="border: solid grey 0.3px">
			<div class="container-fluid row" style="margin-bottom: 30px">
				<span class="col-md-6" style="padding: 10px; text-align: justify;">An intelligent solution to keep track of your asset, define geographical boundaries and monitor their location on demand. Check status of assets with respect to defined boundaries, geenerate alerts, etc. </span>
				<span class="col-md-6 text-right">
				<img src="img/position1.png">
				</span>
			</div>
			<a href="geo-fence.php" class="btn btn-lg btn-primary">>>> GO <i class="fa fa-map-marker" aria-hidden="true"></i>  </a>
		</div>
		<div id="sol-2" class="col text-center">
			<div class="text-center display-4" style="margin-bottom: 40px">ARO v0.0.1<h5 style="padding-top: 10px">AWSR-Route-Optimizer</h5></div>
			<hr width="95%" style="border: solid grey 0.3px">
			<div class="container-fluid row" style="margin-bottom: 30px">
				<span class="col-md-6" style="padding: 10px; text-align: justify;">Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim asksdsd onjdnsjfd asdbksd.</span>
				<span class="col-md-6 text-right">
				<img src="img/arrows1.png">
				</span>
			</div>
			<a href="sol-2.php" class="btn btn-lg btn-success">>>> GO <i class="fa fa-compass" aria-hidden="true"></i>  </a>
		</div>
	</div>



	<?php require_once 'footer.php'  ?>
</body>
</html>