<?php
	session_start();
	if(isset($_GET["logout"]) && ($_GET["logout"] == "true")) {
		unset($_SESSION["username"]);
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Queensland Travel Agency"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>

<!-- //js -->
<!-- FlexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>




</head>
	
<body>
	<div class="parallax">
		<div class="fixed-banner">
			<div class="container">
				<div class="banner-info-grid">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="banner-info">
										<h1>Welcome To Queensland Travel Agency !</h1>
										<p>Queeensland Travel Agency is a company which provide luxury customize services for tourists. </p>
										<div class="more">
											<a href="about.html">Our Company</a>
										</div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<h1>Have a nice preview of the Tourism Gallery !</h1>
										<p>Haven't decide where to go yet? Just have a quick look of the tourism gallery.</p>
										<div class="more">
											<a href="gallery.html">Tourism Gallery</a>
										</div>

									</div>
								</li>
								<li>
									<div class="banner-info">
										<h1>Choose your favourite package now !</h1>
										<p>Check the popular package or services and planning your memorable experiences. </p>
										<div class="more">
											<a href="services.html">Our Services</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	<!-- header -->
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4">
			<a href="index.html" class="logo-image"><img class="logo-image-size" src="images/logo.jpg" alt="logo"></a>
		</div>
			<?php
			if(isset($_SESSION["username"])) {
				echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\" style=\"padding-top:20px;\"><a>".$_SESSION["username"]."</a></div>";
			}
		?>
	</div>
		<div class="clearfix"> </div>

	<div class="container-fluid header-navigation" style="margin-bottom: 10px;">
		<div class="navigationbar navigationbar-default">
			<div class="row navigation navigationbar-nav">
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="index.php">Home</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="services.html">Services</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="gallery.html">Gallery</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="about.html">About</a></div>
				<?php
				if(!isset($_SESSION["username"])) {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"login.php\">Login</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"register.php\">Register</a></div>";
				} else {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"login.html\">Profile</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"index.php?logout=true\">Logout</a></div>";
				}
				?>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
<!--<div class="banner">
	<div class="container">
		<div class="banner-info-grid">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-info">
								<h1>Welcome To Queensland Travel Agency !</h1>
								<p>Queeensland Travel Agency is a company which provide luxury customize services for tourists. </p>
								<div class="more">
									<a href="about.html">Our Company</a>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h1>Have a nice preview of the Tourism Gallery !</h1>
								<p>Haven't decide where to go yet? Just have a quick look of the tourism gallery.</p>
								<div class="more">
									<a href="gallery.html">Tourism Gallery</a>
								</div>

							</div>
						</li>
						<li>
							<div class="banner-info">
								<h1>Choose your favourite package now !</h1>
								<p>Check the popular package or services and planning your memorable experiences. </p>
								<div class="more">
									<a href="services.html">Our Services</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>-->
<!-- //banner -->

<!-- banner-bottom -->
<div class="banner-bottom container" id="destination">
		<h3>Choose your favour destination Today !</h3>
	      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 portfolio-item col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
          <div class="card h-100">
            <a href="brisbane.html"><img class="card-img-top" src="images/brisbane.jpg" alt="Brisbane"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Brisbane</a>
              </h4>
              <p class="card-text">Combine art and outdoor adventure in Brisbane, where creative spaces, music and hip new restaurants meet pretty riverside gardens and man-made beaches.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 portfolio-item">
          <div class="card h-100">
            <a href="goldcoast.html"><img class="card-img-top" src="images/goldcoast.jpg" alt="Gold Coast"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="goldcoast.html">Gold Coast</a>
              </h4>
              <p class="card-text">The Gold Coast's star attraction is its beaches, including the world-renowned stretch of sand at Surfers Paradise. Beyond the beaches, discover laid-back neighbourhoods, a booming culinary scene and the Gold Coast's famous theme parks.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 portfolio-item col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
          <div class="card h-100">
            <a href="sunshinecoast.html"><img class="card-img-top" src="images/sunshinecoast.jpg" alt="Sunshine Coast"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="sunshinecoast.html">Sunshine Coast</a>
              </h4>
              <p class="card-text">Stretching from the coastal city of Caloundra, near , to the Great Sandy National Park in the north, the Sunshine Coast is home to pretty villages, renowned surf spots and spectacular rural hinterland.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 portfolio-item">
          <div class="card h-100">
            <a href="cairns.html"><img class="card-img-top" src="images/cairns.jpg" alt="Cairns"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="cairns.html">Cairns</a>
              </h4>
              <p class="card-text">Visit Cairns for the Great Barrier Reef and Wet Tropics World Heritage Rainforest, but don't miss the great things to do in and around town. You'll find brilliant cafés, bustling markets and plenty of beaches nearby. Relax by a resort pool or spend your days exploring this tropical oasis.</p>
            </div>
          </div>
        </div>
      </div>
</div>

<!-- //welcome-bottom -->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Queensland Travel Agency</h3>
					<h4>mail@qta.com.au</h4>>
					<h4>(07) 3456 7890</h4>
					<!--<ul class="social-icons">
						<li><a href="#" class="p"></a></li>
						<li><a href="#" class="in"></a></li>
						<li><a href="#" class="v"></a></li>
						<li><a href="#" class="facebook"></a></li>
					</ul>-->
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Find out more</h3>					
					<ul>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="https://blog.queensland.com/">Blog</a></li>
						<li><a href="cart.html">Cart</a></li>
						<li><a href="order.html">Purchased Order</a></li>

					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Destination</h3>
					<ul>
						<li><a href="brisbane.html">Brisbane</a></li>
						<li><a href="goldcoast.html">Gold Coast</a></li>
						<li><a href="sunshinecoast.html">Sunshine Coast</a></li>
						<li><a href="cairns.html">Cairns<a/></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">		
			<p>Copyright &copy; 2018.UQ</p>					
		</div>
	</div>
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>