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
<style>
	@media only screen (min-width: 481px)  {
		.top-nav.gallery-sec{
			height: 61.5em;
		}
	}

</style>
<?php error_reporting(0); ?>


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
						<li><a href="registration.php" data-hover="Register">Register</a></li>
						<li><a href="registration.php" data-hover="Register"></a></li>
						<li><a href="registration.php" data-hover="Register"></a></li>
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
<?php error_reporting(0); ?>
<style>
	.footer {
    margin-top: 6.5%;
    padding-top: 2em;
    background-color: #111;
}
.top-nav.register {
    float: left;
    background-color: #f26649;
    width: 15%;
    padding: 3em 1em 23.55em 1em;
    height: 61.5em;
}
.footer {
    margin-top: 11%;
    padding-top: 2em;
    background-color: #111;
}
	@media (max-width: 1366px) and (min-width: 481px) 
	{
.col-md-3.top-nav.gallery-sec {
    padding: 3em 1em 29em 1em;
}


}
</style>
	<div class="col-md-9 main">
	<!-- login-page -->
	<div class="login">
		<div class="login-grids">
			<div class="col-md-6 log">
					 <h3 class="tittle">Login <i class="glyphicon glyphicon-lock"></i></h3>
					 <?php 
					 session_start();
						if ($_SESSION["user_id"]) {
							echo '<h4>You are already logged in.';?>
							<style>
								@media only screen and (max-width: 1500px) and (min-width: 481px)  {...}  {
							.top-nav.gallery-sec {
    float: left;
    background-color: #f26649;
    width: 15%;
    padding: 3em 1em 23.55em 1em;
    height: 45.5em !important;
}

}
@media (max-width: 1366px) and (min-width: 481px)
{
.col-md-3.top-nav.gallery-sec {
    padding: 3em 1em 13em 1em;
}
}
</style>
<?php
						}
						else{
							?>
							 <p>Welcome, please enter the following to continue.</p>
					 <p>If you have previously Login with us, <a href="#">click here</a></p>
					 <h3 id="message"></h3>
					 <form id="login" name="login">
						 <h5>User Email:</h5>	
						 <input type="text" value="" name="email" id="email" required=""> 
						 <h5>Password:</h5>
						 <input type="password" value="" required="" name="password" id="password" required="">					
						 <input type="submit" value="Login">
						  
					 </form>
					<a href="#">Forgot Password ?</a>

							<?php
						}
					  ?>
					 	
					
					
			</div>
			<div class="col-md-6 login-right">
					 <h3 class="tittle">New Registration <i class="glyphicon glyphicon-file"></i></h3>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a href="registration.html" class="hvr-bounce-to-bottom button">Create An Account</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //login-page -->
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
		    <p>&copy; 2016 Blogger. All Rights Reserved</p>
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

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>
		$('#login').on('submit', function(e) {
			e.preventDefault();
    e.stopPropagation(); 
    	
		var email = $('#email').val();
		var pass = $('#password').val();
	   
		var leadData = { 
		email: email,
    	pass: pass,	
       	action: 'check_login'
			};

		$.ajax({
			type: 'POST',
			url:'ajax.php',
			data: leadData,
			dataType: 'json',

			success: function(data) {
				if (data=='Login is Successful.Redirecting...') {
            	$("#message").html(data);
            	  window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "index.php";

    }, 1000);
				}
				else{
            $("#message").html(data);

				}
            },

		}); 	
	});
</script>

