<?php 
require('config/db.php');
require('config/config.php');
error_reporting(E_ERROR|E_PARSE);
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<?php require_once 'boilerplate.php' ?>
	<!-- 
	<script type="text/javascript">
    window._chatlio = window._chatlio||[];
    !function(){ var t=document.getElementById("chatlio-widget-embed");if(t&&window.ChatlioReact&&_chatlio.init)return void _chatlio.init(t,ChatlioReact);for(var e=function(t){return function(){_chatlio.push([t].concat(arguments)) }},i=["configure","identify","track","show","hide","isShown","isOnline", "page", "open", "showOrHide"],a=0;a<i.length;a++)_chatlio[i[a]]||(_chatlio[i[a]]=e(i[a]));var n=document.createElement("script"),c=document.getElementsByTagName("script")[0];n.id="chatlio-widget-embed",n.src="https://w.chatlio.com/w.chatlio-widget.js",n.async=!0,n.setAttribute("data-embed-version","2.3");
       n.setAttribute('data-widget-id','082ae86d-6347-44a0-624c-442016347a0a');
       c.parentNode.insertBefore(n,c);
    }();
	</script> -->
</head>

<body>
	
	<div class="jumbotron">
		<nav class="nav-transparent navbar navbar-expand-lg">
		 	<a class="navbar-brand" href="index.html"><img src='img/logo-small2.png'></a>
		  
		 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">		    
		      <li class="nav-item acitve">
		        <a class="nav-link" href="index.html">About</a>
		      </li>	
		       <li class="nav-item">
		        <a class="nav-link" href="contact.html">Contact Us</a>
		      </li>	     		    
		      <li class="nav-item">
		        <a class="nav-link" href="solutions.php">Solutions</a>
		      </li>		
		       <li class="nav-item">
		        <a class="nav-link" href="contact.html">Pricing</a>
		      </li>
		    </ul>
		    	
		    <ul class="navbar-nav ml-auto">
		    	<li class="nav-item" style="padding-right: 10px">		       		      
		        <!-- <?php// if($_SESSION['user_logged_in']): ?> -->
					<!-- <?php //if($_SESSION['user_type'] == "aid"): ?>		             -->
                        <a id="nav-button" href="dashboardAgent/home.php"><button class="btn btn-outline-light text-light" type="submit">Dashboard</button></a>
                    <!-- <?php //endif; ?> -->
               		<a id="nav-button" href="logout.php"><button class="btn btn-outline-light text-light" type="submit">Logout</button></a>                        
                <!-- <?php// else: ?> -->
                    <!-- <a id="nav-button" href="login.html"><button class="btn btn-outline-light text-light" type="submit">Login</button></a>  -->                    
                <!-- <?php //endif; ?> -->
		        </li>
		       
		    </ul>  
		      
		    
		  </div>
		</nav>

		<div id="heading">
			<img  src="img/logo2.png">
			<h5 style="letter-spacing:2px;"> Geo-Tracking & Optimization Solutions</h5>
		</div>
	</div>






	<div id="section1" style="background-color: #F3F3F3">
		<div class="row">
		<div class="col-md-6"><br><br><center>Monitor your assets, geo-fence them, keep track of their location, tag containers on map using geo-coordinates, real-time status alerts, optimized routes for efficient deliveries and much more. <br><br><a href="#" style="font-size: 20px"><u>Know More Possiblities</u></a></center></div>
		<div class="col-md-6"><center><img src="img/map1.png"></center></div>
		</div>
	</div>



	<div  class="section2">
		<div style="padding-top:160px;padding-bottom: 60px;padding-left: 80px;padding-right: 80px "><center>Handle your everyday business tasks easily and efficiently with our intelligent low-cost IOT solutions. Monitor data and visualise it for better analytics and business management to boost your profits!</center></div>
	</div>





	<center>
		<div class="container-fluid" id="section4">
	  <div class="row" style="margin: 55px">


	    <div class="col-4">
	      <img src="img/money.png">
	      <h4 style="margin-top: 20px"><b>Cost effective</b></h4>
	      <p><section>Use of readily available low-cost components</section></p>
	    </div>
	    
	    <div class="col-4">
	      <img src="img/performance.png">
	      <h4 style="margin-top: 20px"><b>Efficient</b></h4>
	      <p><section>Easy and efficient tracking and analysis of data</section></p>
	    </div>
	    
	    <div class="col-4">
	      <img src="img/tracking.png">
	      <h4 style="margin-top: 20px"><b>Real Time Tracking</b></h4>
	       <p><section>Obtain real time latitude and longitudinal coordinates for better monitoring</section></p>
	    </div>

	 </div>
	</div>
	</center>
<br>
	

	<?php require_once 'footer.php' ?>



	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				var scroll = $(window).scrollTop()
				if(scroll > 150){
					$("nav").removeClass('nav-transparent')	
					$("#nav-button>button").removeClass('btn-outline-light text-light')
					$("#nav-button>button").addClass('btn-dark text-light')
					$("nav").addClass('nav-opaque navbar-light bg-light animated faster fadeIn')
				}
				else{
					$("#nav-button>button").removeClass('btn-dark text-light')					
					$("#nav-button>button").addClass('btn-outline-light text-light')			
					$("nav").removeClass('nav-opaque navbar-light bg-light animated faster fadeIn')
					$("nav").addClass('nav-transparent')	
				}

			})
		})
	</script>
	
</body>
</html>