<!DOCTYPE HTML>
<html>
<head>
<?php error_reporting(0); ?>
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
	@media only screen and (max-width: 480px) and (min-width: 320px)  {
		.main{
			margin-top: 43%;
		}
	}
	#email{
		outline: none;
    border: 1px solid #333;
    background: none;
    font-size: 15px;
    padding: 10px 10px;
    width: 100%;
    margin: 1em 0;
    color: #999;
    font-family: 'Open Sans', sans-serif;
	}
	.footer{
		margin-top: 4.5%;
	}
	@media (max-width: 1366px) and (min-width: 481px) 
	{
.col-md-3.top-nav.gallery-sec {
    padding: 3em 1em 28.5em 1em;
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
	<div  class="col-md-9 main">
	<!-- register -->
			<div class="sign-up-form">
				 <h3 class="tittle">Upload Stories <i class="glyphicon glyphicon-file"></i></h3>
					
						<h3 style="text-align: center;" id="message"></h3>
						<?php 
						session_start();
						if ($_SESSION["user_id"]) {
							# code...
							?>

								<div class="sign-up">
				
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="a"> Author Name* :</h4>
						</div>
						<div class="sign-up2">
							<form name="upload" id="upload" method="post" enctype="multipart/form-data" >
								<input type="text" class="text" name="name" id="name"  required="">

						
						</div>
						<div class="clearfix"> </div>
					</div>
	
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="c">Email Address* :</h4>
						</div>
						<div class="sign-up2">
						
								<input type="email" class="text" name="email" id="email"  required="">
								

							
						</div>
						<div class="clearfix"> </div>
					</div>
				
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="d">Title* :</h4>
						</div>
						<div class="sign-up2">
						
								 <input type="text" required="" class="Password" id="title" name="title" required="">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Category* :</h4>
						</div>
						<div class="sign-up2">							
					 <select  name="cat" id="cat" style="
				    outline: none;
				    border: 1px solid #333;
				    background: none;
				    font-size: 15px;
				    padding: 10px 10px;
				    width: 100%;
				    margin: 1em 0;
				    color: #999;
				    font-family: 'Open Sans', sans-serif;
				">
					 <option value="">Select</option>	
					 <option value="1">Drama</option>	
					 <option value="2">Romantic</option>	
					 <option value="3">Horror</option>	
					 <option value="4">Comedy</option>
					 <option value="5">Action</option>	
					 <option value="6">Thriller</option>	
					 <option value="7">Mystery</option>	
					 <option value="8">Fiction</option>
					 </select>	
						</div>
						<div class="clearfix"> </div>
					</div>
						<div class="sign-u">
						<div class="sign-up1">
							<h4 class="d">Summary* :</h4>
						</div>
						<div class="sign-up2">
						
					 <textarea name="summary" id="summary" required="" maxlength="200" style="
    outline: none;
    border: 1px solid #333;
    background: none;
    font-size: 15px;
    padding: 10px 10px;
    width: 100%;
    margin: 1em 0;
    color: #999;
    font-family: 'Open Sans', sans-serif;
"></textarea> 
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="d">Upload File* :</h4>
						</div>
						<div class="sign-up2">						
							<input id="file" type="file" name="file" style="
    outline: none;
    border: 1px solid #333;
    background: none;
    font-size: 15px;
    padding: 10px 10px;
    width: 100%;
    margin: 1em 0;
    color: #999;
    font-family: 'Open Sans', sans-serif;
" />							
						</div>
						<div class="clearfix"> </div>
					</div>
						<input  type="submit" value="Submit">

					</form>

				</div>

							<?php 
						}
						else{
						 ?>
							<p>You need to login to upload stories. Please <a href="login.php"> Click Here</a> to login.</p>
							<style>.top-nav.register {
    float: left;
    background-color: #f26649;
    width: 15%;
    padding: 3em 1em 23.55em 1em;
    /*height: 38.5em;*/
   

   
}
body{
	overflow: hidden;
}
.footer{
	margin-top: 12.5%;
}
</style>
						 <?php
						}

						?>


			
			</div>
<!-- //register -->
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
		    <p>&copy; 2018 Broken Typewritters. All Rights Reserved</p>
		</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>	
	


</body>
</html>

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>
		$('#upload').on('submit', function(e) {
	e.preventDefault();
  $.ajax({
         url: "ajax.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#message").html(data);

     $("#preview").html(data).fadeIn();
     $("#upload")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
	});
</script>
