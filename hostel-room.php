
<!DOCTYPE html>
<html>
<head>
<title>Smart Attendance System</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<!--single-page-->
				<div class="single-page">
						<div class="col-md-8 single-gd-lt">
							<div class="single-pg-hdr">
								<h2>Hostel Rooms</h2>
								<p>Here we have 2 sharing rooms, 3 sharing rooms and Guest Room for visitors.</p>
								
							</div>
							<div class="flexslider">
											<ul class="slides">
												
												</li>
												<li data-thumb="images/3share (1).jpg">
													<img src="images/3share (1).jpg" alt=""/>
												</li>
												<li data-thumb="images/2share.jpg">
													<img src="images/2share.jpg" alt=""/>
												</li>
												
											</ul>
							</div>
										<!-- FlexSlider -->
									<script defer src="js/jquery.flexslider.js"></script>
										<script>
										// Can also be used with $(document).ready()
										$(window).load(function() {
										  $('.flexslider').flexslider({
											animation: "slide",
											controlNav: "thumbnails"
										  });
										});
										</script>

						</div>
                        
						
						<div class="clearfix"></div>
				</div>
				<!--//single-page-->
			</div>
			<div class="c-rooms">
				<div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="#"><img src="images/threesharing.jpg" alt=""></a>
								<div class="room-basic-info">
									<a href="#">Three sharing room with attach bathroom</a>
									<h6>one Almira</h6>
									<h6>One study table with chair</h6>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Options</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>wi-fi 24x7</li>
									<li>Lockers</li>
									<li>Common Space</li>
									<li>24x7 security guard.</li>
									<li>24x7 water and electicity supply with backup.</li>
                                    <li>24x7 water and electicity supply with backup.</li>
                                    <li>Water cooler with water purifier for safe drinking water</li>
								</ul>
							</div>
						</div>
						
						
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
                <div class="c-rooms">
				<div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="#"><img src="images/twosharing.jpg" alt=""></a>
								<div class="room-basic-info">
									<a href="#">Two sharing room and seprate bathroom</a>
									<h6>one almira</h6>
									<h6>One study table with chair</h6>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Options</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>wi-fi 24x7</li>
									<li>Lockers</li>
									<li>Common Space</li>
									<li>24x7 security guard.</li>
									<li>24x7 water and electicity supply with backup.</li>
                                    <li>Water cooler with water purifier for safe drinking water</li>
                                    
								</ul>
							</div>
						</div>
						
						</div>
						<div class="col-md-3 p-table-grid">
							
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
                <div class="c-rooms">
				<div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="#"><img src="images/guest.jpg" alt=""></a>
								<div class="room-basic-info">
									<a href="#">Guest house with all Facilities</a>
									<h6>attach bathroom</h6>
									<h6>as requirement beds are available</h6>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Options</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>wi-fi 24x7</li>
									<li>Lockers</li>
									<li>24x7 security guard.</li>
									<li>good quality of food in the mess 3 Times.</li>
                                    <li>24x7 water and electicity supply with backup.</li>
                                    <li>Water cooler with water purifier for safe drinking water</li>
									
								</ul>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Avg rate per day</h6>
							</div>
							<div class="avg-rate">
								<h5>Recommended for you</h5>
								<p>Price is now:</p>
								<span class="p-offer">Rs.350</span>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Book</h6>
							</div>
							<div class="book-button-column">
								<a href="#">Book</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
                </div>
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
</body>
</html>