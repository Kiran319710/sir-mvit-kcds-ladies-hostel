
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
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images/1.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/2.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/3.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/4.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/2.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info">
						<h2>Register maintenance with Leave Application</h2>
					</div>
					 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <center><li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Leave Application Form</span></li></center>
							  
                           
							  <div class="clearfix"></div>
						  </ul>		
						  <!---->		  	 
						 <div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
										<div class="booking-form">
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											<!---/End-date-piker---->
											<!-- Set here the key for your domain in order to hide the watermark on the web server -->
											
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti">
																		 <h5>Name</h5>
																		 <div class="book_date">
																			 <form>
				<input type="text" placeholder="" class="typeahead1 input-md form-control tt-input" required>
																			 </form>
																		 </div>					
																	 </li>
																	 <li  class="span1_of_1 left desti">
																		 <h5>Unit No</h5>
																		 <div class="book_date">
																		 <form>
																			
			<input type="text" placeholder="" class="typeahead1 input-md form-control tt-input" required>
																		 </form>
																		 </div>		
																	 </li>
                                                                     <li  class="span1_of_1 left desti">
																		 <h5>Room No</h5>
																		 <div class="book_date">
																		 <form>
																			
			<input type="text" placeholder="" class="typeahead1 input-md form-control tt-input" required>
																		 </form>
																		 </div>		
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li  class="span1_of_1">
																		 <h5>Date</h5>
																		 <div class="book_date">
																		 <form>
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																		 </form>
																		 </div>		
																	 </li>
																	 <li  class="span1_of_1 left">
																		 <h5>Time</h5>
																		 <div class="book_date">
																			 <form>
															<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
<input type="time" value="Select time" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select time';}">
																			</form>
																		 </div>					
																	 </li>
																	 <li class="span1_of_1 left adult">
																		 <h5>Going with</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">Friends</option>
																					<option value="null">alone</option>         
																					<option value="AX">parents</option>
																					<option value="AX">family</option>
																					<option value="AX">Roommates</option>
																					<option value="AX">Classmates</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 left children">
																		 <h5>Transport</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="Auto">Auto</option>
																					<option value="Cab">Cab</option>         
																					<option value="Bus">Bus</option>
																					<option value="self-vehicle">self-vehicle</option>
																					<option value="parent's-vehicle">parent's-vehicle</option>
																					<option value="cycle">cycle</option>
                                                                                    <option value="Others">Others</option>
																			  </select>
																		 </div>	
																	</li>
                                                                     <div class="clearfix"></div>
																	<li class="span1_of_1 economy">
																		 <h5>Course</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
									<select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="MCA">MCA</option>
																					<option value="MBA">MBA</option>
                                                                                    <option value="MDS">MDS</option>
																					<option value="M.Arch">M.Arch</option>
                                                                                    <option value="B.Tech">B.Tech</option>
																					<option value="B.Arch">B.Arch</option>     
																			  </select>
																		 </div>	
																	</li>
                                                                   
                                                                    <li class="span1_of_1 economy">
																		 <h5>Semester</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
								<select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="I">I</option>
																					<option value="II">II</option>
                                                                                    <option value="III">III</option>
																					<option value="IV">IV</option>
                                                                                    <option value="V">V</option>
																					<option value="VI">VI</option> 
                                                                                    <option value="VII">VII</option>
																					<option value="VIII">VIII</option>    
																			  </select>
																		 </div>	
																	</li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li class="span1_of_3">
																			<div class="date_btn">
																				<form>
																					<input type="submit" value="Submit" />
																				</form>
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>
											<!---->
										</div>	
									</div>
							</div>		
							 			        					            	      
						  </div>	
					  </div>	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<div class="move-text">
		<!--<div class="marquee">Register your hotel with us free of cost.<a href="signup.php">Here</a></div> -->
		<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
        <script>
		  $('.marquee').marquee({ pauseOnHover: true });
		  //@ sourceURL=pen.js
		</script>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Events in Hostel</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="destinations">
						 <ul>
							<li class="button"><a href="#">Ganesh Chaturthi</a>
								<li class="dropdown active">
									
										<div class="destinations-grid">

											<img src="images/a1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">celebrating ganesha puja in hostel</div>
											
											
											<div class="clearfix"> </div>
										</div>
									
								 </li>
							</li>
							<li class="button"><a href="#">Diwali</a>
								<li class="dropdown">
									
										<div class="destinations-grid">
											<img src="images/a4.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Diwali Celebration</div>
											
											
											<div class="clearfix"> </div>
										</div>
									
								 </li>
							</li>							
							<li class="button"><a href="#">New Year</a>
								 <li class="dropdown">
									
										<div class="destinations-grid">
											<img src="images/a3.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">New Year celebration with wardens and all hostel membrs.</div>
											
											
											<div class="clearfix"> </div>
										</div>
									
								 </li>
							</li>
							<li class="button"><a href="#">Holi</a>
								 <li class="dropdown">
									
										<div class="destinations-grid">
											<img src="images/a5.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Enjoying Holi.</div>
											
											
											<div class="clearfix"> </div>
										</div>
									
								 </li>
							 </li>							 
						 </ul>
					</div>
					<div class="choose">
						<div class="choose-info">
							<h4>Hostel Facility</h4>
						</div>
						<div class="choose-grids">
							<div class="choose-grids-info">
								<div class="choose-left">
									<h5>01</h5>
									<span></span>
								</div>
								<div class="choose-right">
									<a href="products.php">Its another home for students</a>
						<p>Hostel is another home for the students. The hostel provides sharing room with attached bathroom to the students with separate areas of residence.We are produce quality and variety of food products in form of their Daily Meals-Breakfast, Lunch, Dinner.The food we provide should be nutritious.</p>

								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
                                  <h5>02</h5>
									
								</div>
								<div class="choose-right">
									<a href="products.php">Other Essential Facilities</a>
                                    <p><b>Wi-Fi 24X7 available</b></p>
									<p>Regular water supply</p>
                                    <p>Proper plug points and atleast 2 plug points for each students.</p>
                                    <p>Regular cleaning services  only for washroom</p>
                              <p>Regular attendence at night</p>
                                    <p> Chargable Laundry services</p>
                                    <p>Good lighting</p>
                                   
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<h5>03</h5>
								</div>
								<div class="choose-right">
									<a href="products.php">Games</a>
									<p>Out door games & indoor games
                                   </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href="products.php">
							<img src="images/a2.jpg" alt="" />
							<div class="destinations-grid-info tours">
								<h5>Warden</h5>
								<p>Dr.V Santha</p>
								
							</div>
						</a>
					</div>
					<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>Near to Hostel</h4>
						</div>
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t1.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.php">Hansomaranhalli</a>
									<p>distance is 2 km and auto fair is per person 30 rupees.</p>
									
								</div>
								<div class="col-xs-2 td-right">
									
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t2.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.php">BMTC Bus Stop</a>
									<p>1.5 km is distance</p>
									
								</div>
								<div class="col-xs-2 td-right">
									
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t3.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.php">ATM</a>
									<p>500 m is distance, it is inside our campus.</p>
									
								</div>
								<div class="col-xs-2 td-right">
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/t4.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="products.php">Kempegowda International Airport Bengaluru</a>
									<p>7 km distance</p>
									
								</div>
								<div class="col-xs-2 td-right">
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-right">
						<a href="products.php">
							<img src="images/aw.jpg" alt="" />
							<div class="destinations-grid-info tours">
									<h5>Assistant Warden</h5>
									<p>Savithri. R</p>
									
							</div>
						</a>
					</div>
					<div class="news-grids">
						<div class="news-grids-info">
							<h4>Notice Board</h4>
						</div>
						<div class="news-grids-bottom">
							<!-- date -->
							<div id="design" class="date">
								<div id="cycler">   
									<div class="date-text">
										<a href="#">August 15,2015</a>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
									<div class="date-text">
										<a href="#">July 08,2015</a>
										<p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
									</div>
									<div class="date-text">
										<a href="#">February 15,2015</a>
										<p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
									</div>
									<div class="date-text">
										<a href="#">January 15,2015</a>
										<p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
									</div>
									<div class="date-text">
										<a href="#">September 24,2014</a>
										<p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
									</div>
								</div>
								<script>
									function cycle($item, $cycler){
										setTimeout(cycle, 2000, $item.next(), $cycler);
										
										$item.slideUp(1000,function(){
											$item.appendTo($cycler).show();        
										});
						
										}
									cycle($('#cycler div:first'),  $('#cycler'));
								</script>
							</div>
							<!-- //date -->
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Recent Pictures</h3>
			</div>
			<!-- slider -->
			<?php
			include("slider.php");
			?>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
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