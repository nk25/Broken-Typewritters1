<?php require 'header.php'; ?>
<style>
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
</style>
	<div class="col-md-9 main">
	<!-- register -->
			<div class="sign-up-form">
				 <h3 class="tittle">Registration <i class="glyphicon glyphicon-file"></i></h3>
					<p>Having hands on experience in creating innovative designs,I do offer design 
						solutions which harness</p>
						<h3 style="text-align: center;" id="message"></h3>


				<div class="sign-up">
					 <h3 class="tittle reg">Personal Information <i class="glyphicon glyphicon-user"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="a"> Name* :</h4>
						</div>
						<div class="sign-up2">
							<form name="registration" id="registration" >
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
					 <h3 class="tittle reg">Login Information <i class="glyphicon glyphicon-off"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="d">Password* :</h4>
						</div>
						<div class="sign-up2">
						
								 <input type="password" required="" class="Password" id="password" name="password">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Confirm Password* :</h4>
						</div>
						<div class="sign-up2">							
					 <input type="password" class="Password" required="" name="c_pass" id="c_pass">	
						</div>
						<div class="clearfix"> </div>
					</div>
				
						<input  type="submit" value="Submit">

					</form>

				</div>
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
		$('#registration').on('submit', function(e) {
			e.preventDefault();
    e.stopPropagation(); 
    	var name = $('#name').val();
		var email = $('#email').val();
		var pass = $('#password').val();
	    var c_pass = $('#c_pass').val();
	    if (pass!=c_pass) {
	    	alert('Password and Confirm Password should be same');
	    	console.log(pass);
	    	console.log(c_pass);

	    	exit();
	    }
		var leadData = { 
		email: email,
        name: name,
		pass: pass,
     	c_pass:c_pass,
       action: 'allote_user'
			};

		$.ajax({
			type: 'POST',
			url:'ajax.php',
			data: leadData,
			dataType: 'json',

			success: function(data) {
				if (data=='Registeration is Successful') {
            	$("#message").html(data+'. <a href="login.php">Click here to login</a>');

				}
				else{
            $("#message").html(data);

				}
            },

		}); 	
	});
</script>
<style>
	.top-nav.register {
    float: left;
    background-color: #f26649;
    width: 15%;
    padding: 3em 1em 23.55em 1em;
    height: 60.5em;
}
</style>