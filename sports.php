
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
				<h3>Sports facility in our hostel</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/girls-hostel-8.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Badminton</h5>
								
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/cg1.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Cricket</h5>
								
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/carum.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Carrom</h5>
								
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/dumbles.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Dumbels</h5>
								
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
						<img src="images/w4.jpg">
							<div class="weekend-grid-info">
								<h5>Cricket</h5>
								
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/w2.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Volley-ball</h5>
								
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/w3.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Kabaddi</h5>
								
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
                        <img src="images/cri.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>match</h5>
								
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/w1.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Throw-ball</h5>
								
							</div>
						</a>
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