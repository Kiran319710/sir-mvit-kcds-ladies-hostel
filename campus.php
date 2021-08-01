
<!DOCTYPE html>
<html>
<head>
<title>Smart Attendance System</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->	
</head>
<body>
	<!--header-->
	<?php
	include("header.php");
	?>
	<!--//header-->
	<!-- banner -->
	
	<!-- //banner -->
	
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Campus Area Intro</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href="products.php">
							<img src="images/girls-hostel-2.jpg" alt="">
							<div class="destinations-grid-info tours">
								<h5>Hostel View</h5>
								<p>its the 1st unit hostel and front of this there is hostel library.</p>
								
							</div>
						</a>
					</div>
                    <div class="customer-grid">
						<div class="banner-bottom-middle">
						<a href="products.php">
							<img src="images/leftsyd.jpg" alt="">
							<div class="destinations-grid-info tours">
								<h5>There is a small field for badminton, walking, and sitting at evening time </h5>
								
								
							</div>
						</a>
					</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href="products.php">
							<img src="images/girls-hostel-1.jpg"alt="">
							<div class="destinations-grid-info tours">
								<h5>Hostel view</h5>
								<p>All three units are showing in this picture</p>
								
							</div>
						</a>
					</div>
					<div class="customer-grid">
						<div class="banner-bottom-middle">
						<a href="products.php">
                        	<img src="images/grnd.jpg" alt="">
							
							<div class="destinations-grid-info tours">
								<h5>Hostel Ground</h5>
								<p>Hostel ground for sports, running and walking</p>
						
							</div>
						</a>
					</div>
					</div>
					
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href="products.php">
                        <img src="images/3share (3).jpg" alt="">
							
							<div class="destinations-grid-info tours">
								<h5>Gym</h5>
								<p>its open as per routnine time-table</p>
								<p class="b-period">Mornig Time: 5am-8am | Evening Time: 5pm-8pm </p>
							</div>
						</a>
					</div>
					<div class="customer-grid">
						<div class="banner-bottom-middle">
						<a href="products.php">
						<img src="images/clg gate side.jpg" alt="">
							<div class="destinations-grid-info tours">
								<h5>Hostel Road</h5>
								<p>Hostel road its connected to marckets</p>
								
							</div>
						</a>
					</div>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- footer -->
	<?php
	include("footer.php");
	?>
	<!-- //footer -->
	
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>
</html>