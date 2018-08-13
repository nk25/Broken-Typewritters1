<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all" />
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!-- header-section-starts -->
      <div class="h-top" id="home">
		   <div class="top-header">
				  <ul class="cl-effect-16 top-nag">
						<li><a href="registration.php" data-hover="Registration">Registration</a></li> 
						<!-- <li><a href="about.php" data-hover="About">About</a></li> -->
						<li><a href="upload.php" data-hover="Upload Stories">Upload Stories</a></li>

						<?php 
						session_start();
						if (isset($_SESSION["user_id"])) {
							# code...
							echo '<li><a href="logout.php" data-hover="Logout">Logout</a></li>';
						}
						else {
						echo '<li><a href="login.php" data-hover="Login">Login</a></li>';	 
						}

						 ?>
						
						<!-- <li><a href="contact.php" data-hover="CONTACT">Contact</a></li> -->
					</ul>
					<div class="search-box">
					    <div class="b-search">
								<form>
										<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
										<input type="submit" value="">
								</form>
							</div>
						</div>

					<div class="clearfix"></div>
				</div>
       </div>
	<div class="full">
			<div class="col-md-3 top-nav gallery-sec">
				     <div class="logo">
						<a href="index.php"><h1>Broken Typewritters</h1></a>
					</div>
					<div class="top-menu">
					 <span class="menu"> </span>

					<ul class="cl-effect-16">
						<li><a href="index.php" data-hover="HOME">Home</a></li> 
						<li><a href="upload.php" data-hover="Upload Stories">Upload Stories</a></li>
						<li><a href="login.php" data-hover="Login">Login</a></li>
						<li><a href="registration.php" data-hover="Register">Register</a></li>
					</ul>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 	
					<ul class="side-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
			    </div>
			</div>
	<div class="col-md-9 main">
	  <!--grids-->
	   <div class="gallery-section">
	     <h3 class="tittle">Categories <i class="glyphicon glyphicon-fullscreen"></i></h3>
         <div class="categorie-grids cs-style-1">
				 <div class="col-md-4 cate-grid grid">
					<figure>
						<img src="images/drama.jpg" alt="">
						<figcaption>
							<h3>Drama</h3>	
							<a class="example-image-link" href="services.php?id=1">VIEW</a>
						</figcaption>
					</figure>
				 </div>
				 <div class="col-md-4 cate-grid grid">
					 <figure>
						<img src="images/romantic.png" alt="">
						<figcaption>
							<h3>Romantic</h3>
							
							<a class="example-image-link" href="services.php?id=2">VIEW</a>
						</figcaption>
					</figure>
				 </div>


				 <div class="col-md-4 cate-grid grid">
					 <figure>
						<img src="images/horror.jpg" alt="">
						<figcaption>
							<h3>Horror</h3>
							<a class="example-image-link" href="services.php?id=3">VIEW</a>
						</figcaption>
					</figure>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					<figure>
						<img src="images/comedy.png" alt="">
						<figcaption>
							<h3>Comedy</h3>
							
							<a class="example-image-link" href="services.php?id=4">VIEW</a>
						</figcaption>
					</figure>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					<figure>
						<img src="images/action.jpg" alt="">
						<figcaption>
							<h3>Action</h3>
							
							<a class="example-image-link" href="services.php?id=5">VIEW</a>
						</figcaption>
					</figure>
				 </div>

				 <div class="col-md-4 cate-grid grid">
					 <figure>
						<img src="images/thriller.jpg" alt="">
						<figcaption>
							<h3>Thriller</h3>
							
							<a class="example-image-link" href="services.php?id=6">VIEW</a>
						</figcaption>
					</figure>
				 </div>
				 	 <div class="col-md-4 cate-grid grid">
					<figure>
						<img src="images/mystery.jpg" alt="">
						<figcaption>
							<h3>Mystery</h3>
							
							<a class="example-image-link" href="services.php?id=7">VIEW</a>
						</figcaption>
					</figure>
				 </div>
				 <div class="col-md-4 cate-grid grid">
					 <figure>
						<img src="images/fiction.jpg" alt="">
						<figcaption>
							<h3>Fiction</h3>
							<a class="example-image-link" href="services.php?id=8">VIEW</a>
						</figcaption>
					</figure>
				 </div>
 <script src="js/lightbox.js"></script>
			 <div class="clearfix"></div>
		 </div>
	 </div>
     <div class="clearfix"> </div>
	<!--/footer-->
	     <div class="footer">
				 <div class="footer-top">
				    <div class="col-md-4 footer-grid">
					     <h4>Lorem sadipscing </h4>
				          <ul class="bottom">
							 <li>Consetetur sadipscing elitr</li>
							 <li>Magna aliquyam eratsed diam</li>
						 </ul>
				    </div>
					  <div class="col-md-4 footer-grid">
					     <h4>Message Us Now</h4>
				            <ul class="bottom">
						     <li><i class="glyphicon glyphicon-home"></i>Available 24/7 </li>
							 <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">mail@example.com</a></li>
						   </ul>
				    </div>
					<div class="col-md-4 footer-grid">
					     <h4>Address Location</h4>
				           <ul class="bottom">
						     <li><i class="glyphicon glyphicon-map-marker"></i>2901 Glassgow Road, WA 98122-1090 </li>
							 <li><i class="glyphicon glyphicon-earphone"></i>phone: (888) 123-456-7899 </li>
						   </ul>
				    </div>
					<div class="clearfix"> </div>
				 </div>
	         </div>
		<div class="copy">
		    <p>&copy; 2018 Broken Typewritters. All Rights Reserved</p>
		</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>	
		<!--//footer-->
			<!--start-smooth-scrolling-->
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>
<style>
	
.top-nav.gallery-sec {
    float: left;
    width: 15%;
    padding: 3em 1em 28.55em 1em;
    height: 70em;
}
</style>