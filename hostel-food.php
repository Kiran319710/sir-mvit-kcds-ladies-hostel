
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
<style type="text/css">
    .Table
    {
        display: table;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }
</style>
</head>
<body>
	<!--header-->
	<?php
	include("header.php");
	?>
	<!--//header-->
	<!-- banner -->
	<div class="banner holidays-banner">
		<!-- container -->
		<div class="container">
			<div class="deals-info">
				
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<div class="move-text">
	
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
				<h3>Check out our hostel Food Menu</h3>
			</div>
            <div class="c-rooms">
				<div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Daily Food</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="#"><img src="images/food.jpg" alt=""></a>
								<div class="room-basic-info">
									<a href="#">We provide Daily Food</a>
									<h6>3 Times Main meal & 1 Time Snacks including milk,tea,coffee,and some snacks </h6>
									<p>North Indian and South Indian Food Available </p>
								</div>
							</div>
						</div>
                        </div>
						<div class="clearfix">
                       
                       
                        <div>
                        


                       <div class="Table">
    <div class="Title">
        <h4><b>Menu-List</b></h4>
    </div>
    <div class="Heading">
        <div class="Cell">
            <p>Day</p>
        </div>
        <div class="Cell">
            <p>Breakfast</p>
        </div>
        <div class="Cell">
            <p>Lunch</p>
        </div>
        <div class="Cell">
            <p>Tea Time</p>
        </div>
        <div class="Cell">
            <p>Dinner</p>
        </div>
        
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Monday</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee,</br>Puri-Sabji,Poha & Chutney</p>
        </div>
        <div class="Cell">
            <p>Rice, Chapati, Dal,Sambhar, </br>Alu-Capcicum,Butter-Milk & Pickles</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee & </br>Onion-Pakoda</p>
        </div>
        <div class="Cell">
            <p>Rice,Chapati, Dal,Rasam,Kofta,</br>Curd, Chutney & Pickles</p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Tuesday</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee,</br>Rava Idaly Sambher and Chutney</p>
        </div>
        <div class="Cell">
            <p>Rice, Chapati, Dal,Sambhar, </br>Kundri,Butter-Milk & Pickles</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee & </br>Puff</p>
        </div>
        <div class="Cell">
            <p>Rice,Chapati, Dal,Rasam,Alu-Bhujiya,</br>Curd, Chutney & Pickles & Banana</p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Wednesday</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee,</br>Pav-Bhaji, Upma and Chutney</p>
        </div>
        <div class="Cell">
            <p>Rice, Chapati, Dal,Sambhar, </br>Alu-Gobhi,Butter-Milk & Pickles</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee & </br>Dal-Vada</p>
        </div>
        <div class="Cell">
            <p>Rice,Chapati, Dal, Rasam, Karela, Non-Veg</br>Curd, Chutney & Pickles</p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Thrusday</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee,</br>Masala-Dosa, Alu-Palya and Chutney</p>
        </div>
        <div class="Cell">
            <p>Rice, Chapati, Dal,Sambhar, </br>Mixed-Veg Dry,Butter-Milk & Pickles</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee & </br>Pani-Puri</p>
        </div>
        <div class="Cell">
            <p>Rice,Chapati, Dal,Rasam, Meal-Maker & Egg-Curry, </br>Curd, Chutney & Pickles</p>
        </div>
    </div>
    
    <div class="Row">
        <div class="Cell">
            <p>Friday</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee,</br>Bread-Omelete,Jam & Lemon-Rice</p>
        </div>
        <div class="Cell">
            <p>Rice, Chapati, Dal ,</br>Bisibelebath, Boondi, curd & Pickles</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee & </br>HaldiRam Snacks</p> 
        </div>
        <div class="Cell">
            <p>Rice,Chapati, Dal,Rasam, Mutter-Paneer, Non-Veg</br>Curd, Chutney & Pickles</p>
        </div>
    </div><div class="Row">
        <div class="Cell">
            <p>Saturday</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee,</br>Noodles & Sauce</p>
        </div>
        <div class="Cell">
            <p>Rice, Chapati, Dal,Sambhar, </br>Mung-Tadka & Pickles</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee & </br>Bhel-Puri</p>
        </div>
        <div class="Cell">
            <p>Rice,Chapati, Dal,Rasam,Chhole-Bhature, Sweets</br>Curd, Chutney & Pickles</p>
        </div>
    </div>
       <div class="Row">
        <div class="Cell">
            <p>Sunday</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee,</br>Akki-Roti & Chutney</p>
        </div>
        <div class="Cell">
            <p>Rice, Chapati, Dal,Sambhar, </br>Beet-Root,Butter-Milk & Pickles</p>
        </div>
        <div class="Cell">
            <p>Milk,Tea,Coffee & </br>Biscuits</p>
        </div>
        <div class="Cell">
            <p>Rice,Chapati, Dal,Rasam,Veg, Egg-Fry-Rice, Pulav, </br>Papad ,Chutney & Pickles</p>
        </div>
    </div>
</div>
                        </div>
					</div>
				</div>	
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/MESS.jpg" alt="" />
							<div class="deals-info-grid">
								<div class="deals-grids">
									
									<div class="col-md-4 deals-price">
										
										<p>Mess</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/potato-recipes-1a.jpg" alt="" />
							<div class="deals-info-grid">
								<div class="deals-grids">
									
									<div class="col-md-4 deals-price">
										
										<p>Puri-Sabji</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/dry-aloo-bhindi-recipe.jpg" alt="" />
							<div class="deals-info-grid">
								<div class="col-md-4 deals-price">
										
										<p>Rice-Dal,Chapathi & Dry sabji</p>
									</div>
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
							<img src="images/download (4).jpg" alt="" />
							<div class="deals-info-grid">
								<p>Tea & Coffee</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/idli-sambar.jpg" alt="" />
							<div class="deals-info-grid">
								<p>Idaly-Sambhar</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/masalarice.jpg"/>
							<p>Masala-Rice</p>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/Maharashtrian-Egg-Curry.jpg" alt="" />
							<p>Rice & Egg-Curry</p>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/Brdomlt.jpg" alt="" />
							<div class="deals-info-grid">
								<p>Bread-Omelete</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.php">
							<img src="images/Bisibelebat.jpg" alt="" />
							<div class="deals-info-grid">
								<p>Bisibelebath</p>
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
</body>
</html>