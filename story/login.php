<?php require('header.php'); ?>
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
							echo '<h4>You are already logged in.';
							echo '<style>.top-nav.register {
    float: left;
    background-color: #f26649;
    width: 15%;
    padding: 3em 1em 23.55em 1em;
    height: 45.5em;
}</style>';
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