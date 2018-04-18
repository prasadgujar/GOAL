<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "testings");
$query = "SELECT * FROM employee ORDER BY name ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Goal</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Goal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/JiSlider.css" rel="stylesheet"> 
<!-- light-box -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //light-box -->

<!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/small-business.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/JiSlider.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- light-box -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- //light-box -->
    
    <!-- Owl-carousel-CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">

</head>
<style>
	
	.topnav {
		overflow: hidden;
		background-color: #000000;
	}

	.topnav a {
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 10px 12px;
		text-decoration: none;
		font-size: 17px;
	}

	.topnav a:hover {
		background-color: #C0C0C0;
		color: black;
	}

	.active {
		background-color: #4CAF50;
		color: white;
	}

	.topnav .icon {
		display: none;
	}

	@media screen and (max-width: 600px) {
		.topnav a:not(:first-child) {
			display: none;
		}
		.topnav a.icon {
			float: right;
			display: block;
		}
	}

	@media screen and (max-width: 600px) {
		.topnav.responsive {
			position: relative;
		}
		.topnav.responsive .icon {
			position: absolute;
			right: 0;
			top: 0;
		}
		.topnav.responsive a {
			float: none;
			display: block;
			text-align: left;
		}
	}

	* {
		box-sizing: border-box;
	}


@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .left, .main, .right {
    width:100%;
  }
}
#map_wrapper {
    height: 400px;
}

#map_canvas {
    width: 100%;
    height: 100%;
}	
</style>
<body>
<!-- banner -->
<!-- Navigation -->
<div class="topnav" id="myTopnav">
	<a href="#home" style="font-size:24px" style="word-spacing: 70px">GOAL</a>
		<a href="home.html">Home</a>
		<a href="gallery.html">Gallery</a>
		<a href="article.html">Article</a>
		<a href="fifawomen.html">Fifa For Women</a>
	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
</script>
<body style="
    padding-top: 0px;
">

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"></h1>

            <!-- Author -->
            <p class="lead">
                by Jackie Hinduja
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Posted on 18 Februaury,2018 at 12:00 PM</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="images/10.jpg" alt="">

            <hr>

            <!-- Post Content -->
            <p>
			Looking to have an upper hand amongst your friends for this FIFA World Cup.Head over to this article for a complete guide of top teams ,to have your bet on!!</p>
			 <p>
			 <h2>GERMANY</h2> :
			The World Cup holders are in good shape to defend their title after being unbeaten in all games in 2017.
			They have already collected a trophy in Russia in the build-up to the World Cup, winning the Confederations Cup in July and using the warm-up tournament to test new options like late developer Lars Stindl.
			World Cup qualifying was completed with 10 wins from 10 and a European-record 43 goals.
			<li><b>Key player</b>: Toni Kroos (Real Madrid) - Germany's new leader, Kroos keeps the side ticking from midfield, where his intelligence, precision and composition on the ball inspires teammates going forward.</li>
			<li><b>Coach</b>: Joachim Loew - Juergen Klinsmann's assistant during the 2006 World Cup, Loew took over after that tournament and has overseen steady progress culminating in the 2014 title.</p>
			</p>
			<p>
			<h2>ARGENTINA</h2> :
			A team featuring Lionel Messi can never be ignored, even though the 2014 runner-up barely made it to this World Cup.
But other key talent like Sergio Aguero and Gonzalo Iguain have been far from being in top form for Argentina. That is why little-known Boca Juniors striker Daria Benedetto has been deployed up front.
<li><b>Key player</b>: Messi (Barcelona) - Doubted by fans, yet the five-time world player of the year delivered. Argentina would not be going to Russia without his goals and leadership. Turns 31 during a tournament that could yet crown his career.
<li><b>Coach</b>: Jorge Sampaoli - The 57-year-old Argentine is his country's third coach in less than a year. His team has not impressed so far, with only one win in four official matches. His team is the biggest question mark in the World Cup.
			</p>
			<p>
			<h2>BELGIUM</h2>
			It's time to deliver for a team featuring such exceptional talent. But this is a country that is yet to break into the semifinals of a tournament.
It is widely acknowledged they have been held back by mediocre management. Now it is up to Roberto Martinez, a Spanish coach, to get the best out of this plethora of stars.
If you have Romelu Lukaku up front, Eden Hazard as a creative genius and goalkeeper Thibaut Courtois for a final lock on goal, the ingredients for success are there.
There are issues in defense. Central defender Vincent Kompany is as brittle as he can be brilliant and there are very few credible backups available for the likes of Toby Alderweireld and Jan Vertonghen.
<li><b>Key player</b>: Kevin De Bruyne (Manchester City) - Overshadowed Eden Hazard at the 2014 World Cup, he has only grown in stature, especially since his move to City and his more withdrawn position on the pitch.
<li><b>Coach</b>: Roberto Martinez was a surprise pick for Belgium when it ditched Marc Wilmots after a disappointing Euro 2016. The Spaniard easily adapted to life in international management.
			</p>
			<p>
			<h2>BRAZIL</h2>
The gloom that engulfed Brazil after the 7-1 debacle against Germany in the 2014 World Cup has lifted.
Brazil was the first team to clinch qualification for Russia and had memorable wins on the way, including a 3-0 success over Argentina in the same Mineirao stadium of the 2014 semi finalsemifinal humiliation.
It took the appointment of Tite in September 2016 to revive Brazil. Under his helm, there have been 13 wins, three draws and only one loss - in a friendly against Argentina.
<li><b>Key player</b>: Neymar (Paris Saint-Germain) - Should be at the peak of his game aged 26 in Russia, the forward will have his best chance to overthrow Lionel Messi and Cristiano Ronaldo in best player awards if Brazil wins.
<li><b>Coach</b>: Adenor Bacchi - Universally known as Tite, he turned Brazil from flop to favorites. Forget Dunga's muscular 2014 World Cup team that depended heavily on Neymar. Brazil is now about organization and flair.
			</p>
			<p>
			<h2>FRANCE</h2>
			A young and vibrant side packed with flair promises to be eye-catching. Recently, France twice took the lead away to World Cup winner Germany and caused the home defense all sorts of problems with the movement and speed of its devastating counter-attacks.
But France is also prone to lapses in concentration, and this needs to be ironed out if France wishes to win the trophy for the second time.
Les Bleus lost the 2006 World Cup final to Italy in a penalty shootout; lost to Germany in the quarterfinals of the 2014 World Cup, and could not handle the pressure of being the favorite in the Euro 2016 final at home to Portugal.
<li><b>Key player</b>: Raphael Varane (Real Madrid) - The three-time Champions League-winning center back has the difficult task of marshalling a vulnerable defense.
<li><b>Coach</b>: Didier Deschamps - Turned France into a highly competitive team but has yet to deliver a trophy. Reaching the World Cup semifinals is the minimum target for the 49-year-old Deschamps, a former midfielder who captained France to victory at the 1998 World Cup and Euro 2000.
			</p>
			<p>
			<h2> PORTUGAL </h2>
			Cristiano Ronaldo's hopes of winning the World Cup with Portugal are running out.
Portugal has proven it also has the mettle needed to win major international tournaments after it ground though the 2016 European Championship and stunned host France in the final despite an early injury to Ronaldo.
Portugal will take the large part of that experienced squad to Russia. Pepe is a physical enforcer in defense, Joao Moutinho adds passing skills to its midfield, and newcomer Andre Silva can help Ronaldo in attack.
<li><b>Key player</b>: Ronaldo (Real Madrid) - At 32, Ronaldo is no longer the goal machine he once was. Key to success in Russia could be how he is managed by Madrid, and can be rested in less significant games.
<li><b>Coach</b>: Fernando Santos - Since taking over the team in 2014, Santos has forged a solid defensive block that gives just enough help to Ronaldo.

			</p>
			

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->


            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">RANKINGS</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                               <!-- <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
								</li>-->
								<div class="container" style="width:900px;">
	
									<h5>Top 10 Players</h5>
									<br />
									<div class="row">
										<div class="col-md-4">
											<select name="employee_list" id="employee_list" class="form-control">
												<option value="">Select Player</option>
												<?php 
								      while($row = mysqli_fetch_array($result))
								      {
								       echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
								      }
								      ?>
											</select>
										</div>
										<div class="col-md-4">
											<button type="button" name="search" id="search" class="btn btn-info">Search</button>
										</div>
									</div>
									<br />
									<div class="table-responsive" id="employee_details" style="display:none">
										<table class="table table-bordered">
											<tr>
												<td width="10%" align="right">
													<b>Name</b>
												</td>
												<td width="90%">
													<span id="employee_name"></span>
												</td>
											</tr>
											<tr>
												<td width="10%" align="right">
													<b>Teams</b>
												</td>
												<td width="90%">
													<span id="employee_address"></span>
												</td>
											</tr>
											<tr>
												<td width="10%" align="right">
													<b>Position</b>
												</td>
												<td width="90%">
													<span id="employee_designation"></span>
												</td>
											</tr>
											<tr>
												<td width="10%" align="right">
													<b>Age</b>
												</td>
												<td width="90%">
													<span id="employee_age"></span>
												</td>
											</tr>
										</table>
									</div>
								
								</div>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <!--<li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">NEWS</h5>
                <div class="card-body">
<!--You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!-->
                <div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>
</div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
</div><!-- End Main Container -->


		<div class="clearfix"></div>
	</div>

<!-- /contact bottom -->
<!-- Footer Section -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 w3-footer-nav">
				<div class="links">
					<a href="home.html">Home</a>
		            <a href="gallery.html">Gallery</a>
		            <a href="article.html">Article</a>
		            <a href="fifawomen.html">Fifa For Women</a>
				</div>
			</div>
			<div class="col-md-6 w3-footer-copy">
				<div class="copyright">
					<p>&copy; 2017 Goal. All Rights Reserved</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Footer Section -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/JiSlider.js"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: false}).addClass('ff')
			})
		</script>

<!-- //footer -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
 <!-- Custom-JavaScript-File-Links -->
        <script type="text/javascript" src="js/moment.js"></script>
        <script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
        <script type="text/javascript" src="js/timer.js"></script>
    <!-- //Custom-JavaScript-File-Links -->

<!-- requried-jsfiles-for owl -->
 <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
 <script src="js/index.js"></script>
  <script src="js/scrolling-nav.js"></script>  
<script>
	$(document).ready(function () {
		$('#search').click(function () {
			var id = $('#employee_list').val();
			if (id != '') {
				$.ajax({
					url: "fetch.php",
					method: "POST",
					data: { id: id },
					dataType: "JSON",
					success: function (data) {
						$('#employee_details').css("display", "block");
						$('#employee_name').text(data.name);
						$('#employee_address').text(data.address);
						$('#employee_designation').text(data.designation);
						$('#employee_age').text(data.age);
					}
				})
			}
			else {
				alert("Please Select Employee");
				$('#employee_details').css("display", "none");
			}
		});
	});
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
    </script>
    <script>
        jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyB5SfpAVmmvp2q9PU7Zk-RBoIUDUnafX1c&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        ['russia', 62.333724,93.244438],
        ['Stadion Saint Petersburg, russia', 59.972707,30221490]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>London Eye</h3>' +
        '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Palace of Westminster</h3>' +
        '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
    
}
</script>
<!-- //here ends scrolling icon -->
</body>
</html>