
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
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids" style="background:#9C6;">
            
				<!--single-page-->
				<div class="book-grids">
					<div class="col-md-6 book-left">
						
							<h3>New Student Admission Form</h3>
						
						<div class="book-left-form">
							<form action="insert.php" method="post" enctype="multipart/form-data">
								<p>First Name</p>
								<input type="text" name="fname" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Last Name</p>
								<input type="text" name="lname" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Phone Number</p>
								<input type="text" name="phonenumber" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Email Address</p>
								<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Password</p>
								<input type="password" name="password" id="password">
                                
                                <p>Home Address</p>
								<input type="text" name="homeaddress" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								
                                <p>Course</p>
								<input type="text" name="course" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                <p>Semester</p>
								<input type="text" name="semester" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                <p>USN</p>
								<input type="text" name="usn" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                               
								<input type="submit" id="login" value="Submit Your Request">
							</form>
						</div>
					</div>
					<div class="col-md-6 book-left book-right">
						<div class="book-left-info">
							<h3>Instructions</h3>
						</div>
						
						<ul>
							<li>1.You must fill this admission form to take admission to hostel</li>
							<li>2.Once form is filled out, after 24 hour you will be informed about room number allocated.</li>
							<li>3.Keep remember your login ID and Password. </li>
							
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--//single-page-->
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