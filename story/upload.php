<?php require 'header.php'; ?>
<?php error_reporting(0); ?>

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
	.top-nav.register {
    float: left;
    background-color: #f26649;
    width: 15%;
    padding: 3em 1em 23.55em 1em;
    height: 61.3em;
}
</style>
	<div class="col-md-9 main">
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
    height: 38.5em;
   
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