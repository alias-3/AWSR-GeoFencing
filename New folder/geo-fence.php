<?php 
require('config/db.php');
require('config/config.php');
error_reporting(E_ERROR|E_PARSE);
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>AWSR-Shipment Tracking Solutions</title>
	
	<!-- dependencies imported -->
	<meta charset="utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link rel="icon" href="img/favicon.png" type="image/png"> 
	
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
	
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">

    
	

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
	
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRTq62iKEHDeIbW0E3o3hQGaspaADXc9I&libraries=drawing" ></script>
  
	<script type="text/javascript" src="gmaps.js"></script>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style>
     
      #map {
        height:600px;
        border-radius: 12px;
      }



		.jumbotronlogin {
		  width: 80%;
		  margin-top: 20%;
		  padding: 2%;
		  margin-bottom: 7vw !important;
		  margin-left: 10%;
		  color: #e9ecef !important;
		  background-color: rgba(0, 0, 0, 0.7) !important;
		  border-radius: 5px;
		}

		.fa-user-circle{
			color: white;
			font-size: 40px;
		}

    .fa-check{
      color: green;
      font-size: 30px;
    }
    .fa-times{
      color: red;
      font-size: 30px;
    }

		.form-control {
		  background-color: #474747e7 !important;
		  color: azure !important;
		}

		.cover {
		  width: 100%;
		  height: 100vh;
		  background: url(../images/loginnn.jpeg) no-repeat 50% 50%;
		  background-size: cover;
		}

		#info{
			background-color: #E4E3E3;
			height: 300px;
			border-radius: 12px;
			margin-bottom: 15px;
			padding: 30px
		}
		#info-2{
			margin-top: 15px;
			background-color: #E4E3E3;
			height: 280px;
			border-radius: 12px;
			padding: 30px;
		}
		#info:hover{
			box-shadow: 0 6px 6px 6px rgba(0,0,0,0.3), 0 0 0 2px rgba(0,0,0,0.08);
		}
		#info-2:hover{
			box-shadow: 0 6px 6px 6px rgba(0,0,0,0.3), 0 0 0 2px rgba(0,0,0,0.08);
		}
		#map:hover{
			box-shadow: 0 6px 6px 6px rgba(0,0,0,0.3), 0 0 0 2px rgba(0,0,0,0.08);
		}
		#coordinates{
			box-shadow: 0 3px 3px 3px rgba(0,0,0,0.3) inset;	
		}
		#currcoordinates{
			box-shadow: 0 3px 3px 3px rgba(0,0,0,0.3) inset;
      font-size: 1.2em;	
		}

		
    </style>
	
	
</head>

<body>
	
		<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
		 	<a class="navbar-brand" href="index.php"><img src='img/logo-small2.png'></a>
		  
		 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">		    
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Home</a>
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
                        <a id="nav-button" href="#"><button class="btn btn-outline-light text-light" type="submit">Dashboard</button></a>
                    <!-- <?php //endif; ?> -->
               		<a id="nav-button" href="logout.php"><button class="btn btn-outline-light text-light" type="submit">Logout</button></a>                        
                <!-- <?php// else: ?> -->
                    <!-- <a id="nav-button" href="login.html"><button class="btn btn-outline-light text-light" type="submit">Login</button></a>  -->                    
                <!-- <?php //endif; ?> -->
		        </li>
		        <i class="fa fa-user-circle" aria-hidden="true"></i>
		       
		    </ul>  
		      
		    
		  </div>
		</nav>


		<div class="container-fluid row" style="margin: 30px 0 0 0x;font-weight: lighter;font-size: 50px">
			<span class="col-md-6 text-left">AGF v1.0.2<h6>AWSR-GEO-FENCING</h6></span>
			<span class="col-md-6 text-right">
				<a href="geo-fence-trends.php" class="btn btn-danger">Analyze</a>
				<a id="track" href="#" class="btn btn-warning">Track Now</a>
  					<button type="button" class="btn btn-primary dropdown dropdown-toggle" data-toggle="dropdown">
    					<i class="fa fa-bars" style="font-size: 15px" aria-hidden="true"></i>
				  	</button>
					  <div class="dropdown-menu">
					    <a class="dropdown-item" href="geo-fence-trends.php">Trend</a>
					    <a class="dropdown-item" href="#">Asset Info</a>
					    <center><h6>Menu</h6></center>
					    
					  </div>
				
			</span>
			
		</div>




		<div class="row">
		 <div class="col-md-7" style="padding: 40px;padding-right: 35px ">
		 	<div id="map"></div>
		 </div>
		 <div class="col-md-5" style="padding: 40px;padding-left: 0px">
		 	<div id="info">
		 		<h3>Geo-Coordinates &nbsp; &nbsp; &nbsp;:</h3>
		 		<h6>( Latitude | Longitude )</h6>
		 		<div id="coordinates" class="overflow-auto" style="background-color: #F5F5F5;height: 70%;border-radius: 12px;line-height: 0.5px;padding-top: 10px"></div>
			</div>
			<div id="info-2">
				<h3>Current Status &nbsp; &nbsp; &nbsp;:</h3>
		 		<h6>Asset located at: </h6>
		 		<div id="currcoordinates" class="overflow-auto" style="background-color: #F5F5F5;height: 70%;border-radius: 12px;line-height: 0.5px;padding:20px"></div>				
			</div>
		 </div>
		</div>




    <script>
      var polygonArray = []
      var status;

      var p =("asd","asdsd")
      console.log(p.isArray)
    	var map = new GMaps({
        el: '#map',
        lat: 18.520059,
        lng: 73.815046,
        zoom : 13
      });


        var drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.POLYGON,
          drawingControl: true,
          drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: ['marker', 'polygon', 'polyline', 'rectangle'], //circle

          },
          markerOptions: {icon: 'img/default-marker.png',
        	animation: google.maps.Animation.DROP,
        	draggable: true
      		},

          polygonOptions: {
          	fillColor: '#5BFA0C',//#BBD8E9
            fillOpacity: 0.6,
            strokeWeight: 3,
            strokeColor: '#000000',//#BBD8E9
            clickable: true,
            editable: true,
            draggable: true,
            zIndex: 1,
            geodesic: true

          },
          rectangleOptions: {
          	fillColor: '#5BFA0C',
            fillOpacity: 0.6,
            strokeWeight: 3,
            strokeColor: '#000000',
            clickable: true,
            editable: true,
            draggable: true,
            zIndex: 1,
            geodesic: true

          },
          circleOptions: {
            fillColor: '#ffff00',
            fillOpacity: 1,
            strokeWeight: 5,
            clickable: true,
            editable: true,
            zIndex: 1
          }
        });
       console.log(drawingManager)
    drawingManager.setMap(map.map)



    google.maps.event.addListener(drawingManager, 'polygoncomplete', function(event) {

                var len = event.getPath().getLength();
           		   
                for (var i = 0; i < event.getPath().getLength(); i++) {
                	var poly = [Number(event.getPath().getAt(i).lat().toPrecision(8)),Number(event.getPath().getAt(i).lng().toPrecision(8))];
            		  document.getElementById('coordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:30px 10px 10px 50px;font-style: sans-serif;font-weight:bold\">"+event.getPath().getAt(i).toUrlValue(6) + "</div>";
            		  polygonArray.push(poly);
                 
        		    }
              //  console.log(polygonArray);

        	
                google.maps.event.addListener(event.getPath(), 'insert_at', function() {
                    var len = event.getPath().getLength();
            		    var polygonArray = []
                    document.getElementById('coordinates').innerHTML = "";
                    for (var i = 0; i < len; i++) {
                    	var poly = [event.getPath().getAt(i).lat().toPrecision(8),event.getPath().getAt(i).lng().toPrecision(8)];
                      document.getElementById('coordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:30px 10px 10px 50px;font-style: sans-serif;font-weight:bold\">"+event.getPath().getAt(i).toUrlValue(6) + "</div>";
                    }
            		    polygonArray.push(poly);
                });
              //  console.log(polygonArray);
            
                google.maps.event.addListener(event.getPath(), 'set_at', function() {
                    var len = event.getPath().getLength();
            		    var polygonArray = [];
                    document.getElementById('coordinates').innerHTML = "";
                    for (var i = 0; i < len; i++) { 
                    	var poly = [event.getPath().getAt(i).lat().toPrecision(8),event.getPath().getAt(i).lng().toPrecision(8)];
                    	document.getElementById('coordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:30px 10px 10px 50px;font-style: sans-serif;font-weight:bold\">"+event.getPath().getAt(i).toUrlValue(6) + "</div>";

                    }
            		polygonArray.push(poly);        
                    
                });


                
            });




    google.maps.event.addListener(drawingManager, 'rectanglecomplete', function (rectangle) {
        var rectArray = [];
        bounds = rectangle.getBounds();
        var NE = bounds.getNorthEast();
    	var SW = bounds.getSouthWest();
    	var NW = new google.maps.LatLng(NE.lat(), SW.lng());   
    	var SE = new google.maps.LatLng(SW.lat(), NE.lng());
    	console.log(NE);
    	document.getElementById('coordinates').innerHTML = "<div style=\"letter-spacing: 1px;margin : auto;padding:30px 10px 10px 50px;font-style: sans-serif;font-weight:bold\">"+NE.lat().toPrecision(8)+","+NE.lng().toPrecision(8) +"</div>" ;	
    	document.getElementById('coordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:30px 10px 10px 50px;font-style: sans-serif;font-weight:bold\">"+NW.lat().toPrecision(8)+","+NW.lng().toPrecision(8) +"</div>" ;	
    	document.getElementById('coordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:30px 10px 10px 50px;font-style: sans-serif;font-weight:bold\">"+SE.lat().toPrecision(8)+","+SE.lng().toPrecision(8) +"</div>" ;	
    	document.getElementById('coordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:30px 10px 10px 50px;font-style: sans-serif;font-weight:bold\">"+SW.lat().toPrecision(8)+","+SW.lng().toPrecision(8) +"</div>" ;	
    	rectArray.push(rectangle)       
    });
      
    
      $(function(){
        $('#track').on({
          click: function(){
            $.ajax({
              type : "POST",
              url : "track-ajax.php",                           
              success: function (output) {
                    var res = $.parseJSON(output);
                    document.getElementById('currcoordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:20px 10px 10px 10px;font-style: sans-serif;font-weight:bold\">Vehicle : "+res[3]+"</div>" ;  
                    document.getElementById('currcoordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:20px 10px 10px 10px;font-style: sans-serif;font-weight:bold\">Lat: "+res[0]+" | Lng: "+res[1]+"</div>" ;  
                    
                    //alert('Asset located at- lat: '+res[0]+' , lng: '+res[1]+' | at: '+res[2]);
                    
                    map.addMarker({
                      lat: res[0],
                      lng: res[1],
                      clickable: true,
                      draggable: true, 
                      animation: google.maps.Animation.DROP,                                       
                      infoWindow: {
                        content: '<p>Asset located at- lat: '+res[0]+' , lng: '+res[1]+' | at: '+res[2]+'</p>'
                      }
                    });
                    // var path = [                                
                    //     [18.547384,73.806725],
                    //     [18.546842,73.825799],
                    //     [18.52695,73.836671],
                    //     [18.520258,73.830567],
                    //     [18.525864,73.809968]
                    // ];
                    // var path = [          
                    // [18.545124,73.829173],
                    // [18.535196,73.856982],
                    // [18.557004,73.864364],
                    // [18.559608,73.839816]
                    // ]
                    // console.log(path);
                    // console.log(typeof(path));
                    polygon = map.drawPolygon({
                      paths: polygonArray,
                      strokeColor: '#BBD8E9',
                      strokeOpacity: 1,
                      strokeWeight: 3,
                      fillColor: '#BBD8E9',
                      fillOpacity: 0.6
                    });
                    
                    var isInside = map.checkGeofence(res[0],res[1], polygon);
                    status = isInside;
                    if(!isInside){
                      document.getElementById('currcoordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:10px 10px 10px;font-style: sans-serif;font-weight:bold\">Asset is OUTSIDE defined bounds <i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>" ;
                      <?php $to="rakasuraj@gmail.com";
                            $subject="Asset Out of bounds";
                            $message="Dear admin,<br>Your asset is out of the geographical boundaries fixed by your organization<br>Visit <a class='btn btn-danger btn-lg' href='http://localhost:8080/awsr/geo-fence.php'>here</a>.";
                      $headers="From: notifier@000webhost.com \r\n";
                      $headers.="MIME-Version:1.0" . "\r\n";
                      $headers.="Content-type:text/html;charset=UTF-8" . "\r\n";
                      if(mail($to,$subject,$message)){
                        echo "success";
                      }
                      else{
                        echo "failed";
                      } ?>
                    }
                    else{
                      document.getElementById('currcoordinates').innerHTML += "<div style=\"letter-spacing: 1px;margin : auto;padding:10px 10px 10px;font-style: sans-serif;font-weight:bold\">Asset is INSIDE defined bounds <i class=\"fa fa-check\" aria-hidden=\"true\"></i></div>" ;
                    }
                   
                }
                  });
                }
            });
      });
// var path = [          
// [18.545124,73.829173],
// [18.535196,73.856982],
// [18.557004,73.864364],
// [18.559608,73.839816]
// ]
      
    </script>


    <footer class="container-fluid" id="section3">
		<div class="container row">

			<div class="col-md-4">
				<center>
					<ul style="color: #DFDFDF;text-align: left;">						
						<li>About</li>
						<li>Contact Us</li>
						<li>Solutions</li>
						<li>Pricing</li>
					</ul>
				</center>
			</div>

			<div class="col-md-4"  >
				<center>
					<ul style="color: #E6E6E6;text-align: left;">
						<li>AWSR Solutions Ltd.,<br>6th Floor, Tower 3, Senapati Bapat Marg,<br>Elphinstone Road, Prabhadevi (W),<br>Mumbai - 400 013<br>License Category: General<br>CIN: U66030MH2006PLC165287
						</li>
					</ul>
				</center>
			</div>

			<div class="col-md-4">
				<center>
					<ul style="color: #E6E6E6;text-align: left;">
						<li>Follow Us:<br><br>
							<a href="#" style="padding: 5px;"><img src="img/social/facebook.png"></a>
							<a href="#" style="padding: 5px;"><img src="img/social/linkedin.png"></a>
							<a href="#" style="padding: 5px;"><img src="img/social/twitter.png"></a>
							<a href="#" style="padding: 5px;"><img src="img/social/youtube.png"></a>
							<a href="#" style="padding: 5px;"><img src="img/social/instagram.png"></a>
						</li>
					</ul>
				</center>
			</div>
		</div>
		<div style="display: block;margin-bottom: 0;margin-top: 50px;padding-bottom: 0;color: #E6E6E6"><center>&copy;Copyright 2019 | AWsiteworks</center>
		</div>
	</footer>



</body>
</html>