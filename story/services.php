<?php require 'header.php'; ?>
<?php require 'db.php'; ?>
<?php 
if (empty($_GET['id'])) {
	# code...
	header("Location: index.php");

}
$id = $_GET['id'];

$cat_name = mysqli_query($con,"SELECT category FROM story_cat WHERE story_cat_id=".$id."");
$cat_name  = mysqli_fetch_array($cat_name);
$result = mysqli_query($con,"SELECT * FROM upload_stories WHERE story_cat_id=".$id."");
	

 ?>
		<div class="col-md-9 main">
		<!--banner-section-->
		<div class="banner-section">

			   <!--//banner-->
			  <!--/top-news-->
			  <div class="top-news">
			   <h3 class="tittle"><?php echo $cat_name[0]; ?></h3>
				<div class="top-inner">
					<?php 
						if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
			<div class="col-md-4 top-text">
						 <a href="single.html"><img src="<?php echo $row["upload_path"];  ?>" class="img-responsive" alt=""></a>
				          <div class="ser">
						    <h5 class="top"><a href="single.html"><?php echo $row["story_title"]  ?></a></h5>
							<p><?php echo $row["summary"]; ?></p>
		
					    </div> 
					 </div>


       <?php
    }
}

					 ?>
				
					 <div class="clearfix"> </div>
				 </div>
	
	            </div>
					<!--//top-news-->
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
	<style>.top-nav.register {
    float: left;
    background-color: #f26649;
    width: 15%;
    padding: 3em 1em 23.55em 1em;
    height: 35.5em !important;
   
}
.footer{
	margin-top: 12.5%;
}
</style>
</style>