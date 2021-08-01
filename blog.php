
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
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="index.php"><span>Sir</span>MVIT</a></h1>
				</div>
				<!--navbar-header-->
				<?php
				include("header.php");
				?>
                
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li><a href="index.php">Home</a></li>
						<li><a href="admission.php">admission</a></li>
						<li><a href="hostel-room.php">Hostel Room</a></li>
						<li><a href="hostel-facility.php">Hostel Facility</a></li>
						<li><a href="bus.php">Bus</a></li>
						<li><a href="campus.php">Campus</a></li>
						<li><a href="sports.php">Sports</a></li>
						<li><a href="hostel-food.php">Hostel Food</a></li>
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="dropdown-grids">
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							<div id="loginBox">                
								<form id="loginForm">
									<div class="login-grids">
										<div class="login-grid-left">
											<fieldset id="body">
												<fieldset>
													<label for="email">Email Address</label>
													<input type="text" name="email" id="email">
												</fieldset>
												<fieldset>
													<label for="password">Password</label>
													<input type="password" name="password" id="password">
												</fieldset>
												<input type="submit" id="login" value="Sign in">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
											</fieldset>
											<span><a href="#">Forgot your password?</a></span>
											<div class="or-grid">
												<p>OR</p>
											</div>
											<div class="social-sits">
												<div class="facebook-button">
													<a href="#">Connect with Facebook</a>
												</div>
												<div class="chrome-button">
													<a href="#">Connect with Google</a>
												</div>
												<div class="button-bottom">
													<p>New account? <a href="signup.php">Signup</a></p>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="about-info">
				<h2>Our Blog</h2>
			</div>
			<div class="faqs-top-grids">
				<div class="blog-grids">
					<div class="col-md-8 blog-left">
						<div class="blog-left-grid">
							<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
							<a href="#"><img src="images/banner1.jpg" alt=""></a>
							<div class="blog-left-right">
								<a href="#">Phasellus ultrices tellus eget ipsum ornare molestie </a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
									dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
									fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
									estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet. 
								</p>
							</div>
						</div>
						<div class="blog-left-grid">
							<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
							<a href="#"><img src="images/banner.jpg" alt=""></a>
							<div class="blog-left-right">
								<a href="#">Phasellus ultrices tellus eget ipsum ornare molestie </a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
									dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
									fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
									estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet. 
								</p>
							</div>
						</div>
						<div class="blog-left-grid">
							<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
							<a href="#"><img src="images/banner1.jpg" alt=""></a>
							<div class="blog-left-right">
								<a href="#">Phasellus ultrices tellus eget ipsum ornare molestie </a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
									dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
									fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
									estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet. 
								</p>
							</div>
						</div>
						<nav>
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">«</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">»</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-4 blog-right">
						<div class="Categories">
							<h3>Categories</h3>
							<ul>
								<li><a href="#">Phasellus sem leo, interdum quis risus</a></li>
								<li><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
								<li><a href="#"> Donec condimentum purus urna venenatis</a></li>
								<li><a href="#">Ut congue, nisl id tincidunt lobor mollis</a></li>
								<li><a href="#">Cum sociis natoque penatibus et magnis</a></li>
								<li><a href="#">Suspendisse nec magna id ex pretium</a></li>
							</ul>
						</div>
						<div class="Categories">
							<h3>Archive</h3>
							<ul class="marked-list offs1">
								<li><a href="#">May 2015 (7)</a></li>
								<li><a href="#">April 2015 (11)</a></li>
								<li><a href="#">March 2015 (12)</a></li>
								<li><a href="#">February 2015 (14)</a> </li>
								<li><a href="#">January 2015 (10)</a></li>    
								<li><a href="#">December 2014 (12)</a></li>
								<li><a href="#">November 2014 (8)</a></li>
								<li><a href="#">October 2014 (7)</a> </li>
								<li><a href="#">September 2014 (8)</a></li>
								<li><a href="#">August 2014 (6)</a></li>                          
							</ul>
						</div>
						<div class="comments">
							<h3>Recent Comments</h3>
							<div class="comments-text">
								<div class="col-md-3 comments-left">
									<img src="images/user1.jpg" alt="">
								</div>
								<div class="col-md-9 comments-right">
									<h5>Admin</h5>
									<a href="#">Phasellus sem leointerdum risus</a> 
									<p>March 16,2014 6:09:pm</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="comments-text">
								<div class="col-md-3 comments-left">
									<img src="images/user2.jpg" alt="">
								</div>
								<div class="col-md-9 comments-right">
									<h5>Admin</h5>
									<a href="#">Phasellus sem leointerdum risus</a> 
									<p>March 16,2014 6:09:pm</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="comments-text">
								<div class="col-md-3 comments-left">
									<img src="images/user3.jpg" alt="">
								</div>
								<div class="col-md-9 comments-right">
									<h5>Admin</h5>
									<a href="#">Phasellus sem leointerdum risus</a> 
									<p>March 16,2014 6:09:pm</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Our Products</h4>
						<ul>
							<li><a href="index.php">Home</a></li>
						<li><a href="admission.php">admission</a></li>
						<li><a href="hostel-room.php">Hostel Room</a></li>
						<li><a href="hostel-facility.php">Hostel Facility</a></li>
						<li><a href="bus.php">Bus</a></li>
						<li><a href="campus.php">Campus</a></li>
						<li><a href="sports.php">Sports</a></li>
						<li><a href="hostel-food.php">Hostel Food</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Company</h4>
						<ul>
							<li><a href="about.php">About Us</a></li>
							<li><a href="faqs.php">FAQs</a></li>
							<li><a href="terms.php">Terms &amp; Conditions</a></li>
							<li><a href="privacy.php">Privacy </a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="booking.php">Feedback</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Travel Resources</h4>
						<ul>
							<li><a href="hostel-room.php">hostel and room visiting</a></li>
							<li><a href="sports.php">Gameway</a></li>
							<li><a href="index.php">New Student</a></li>
							<li><a href="index.php">Online Registration</a></li>
							<li><a href="booking.php">Customer Support</a></li>
							<li><a href="booking.php">Cancel Bookings</a></li>
							<li><a href="booking.php">Print E-tickets</a></li>
							<li><a href="booking.php">Customer Forums</a></li>
							<li><a href="booking.php">Make a Payment</a></li>
							<li><a href="booking.php">Complete Booking</a></li>
							<li><a href="booking.php">Assurance Claim</a></li>
							<li><a href="booking.php">Retail Offices</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>More Links</h4>
						<ul class="chf_footer_list">
							<li><a href="#">Flights Discount Coupons</a></li>
							<li><a href="#">Domestic Airlines</a></li>
							<li><a href="#">Indigo Airlines</a></li>
							<li><a href="#">Air Asia</a></li>
							<li><a href="#">Jet Airways</a></li>
							<li><a href="#">SpiceJet</a></li>
							<li><a href="#">GoAir</a></li>
							<li><a href="#">Air India</a></li>
							<li><a href="#">Domestic Flight Routes</a></li>
							<li><a href="#">Indian City Flight</a></li>
							<li><a href="#">Flight Sitemap</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- news-letter -->
				<div class="news-letter">
					<div class="news-letter-grids">
						<div class="col-md-4 news-letter-grid">
							<p>Toll Free No : <span>1234-5678-901</span></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<p class="mail">Email : <a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //news-letter -->
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
					<div class="col-md-4 footer-bottom-left">
						<h4>Download our mobile Apps</h4>
						<div class="d-apps">
							<ul>
								<li><a href="#"><img src="images/app1.png" alt="" /></a></li>
								<li><a href="#"><img src="images/app2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="images/app3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>We Accept</h4>
						<div class="a-cards">
							<ul>
								<li><a href="#"><img src="images/c1.png" alt="" /></a></li>
								<li><a href="#"><img src="images/c2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="images/c3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © 2020 Sir MVIT . Design by <a href="http://w3layouts.com/">Kiran</a></p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>