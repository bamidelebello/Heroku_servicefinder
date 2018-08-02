<?php 

  include('db.php');
try{

    $sql="SELECT * FROM  provider_profile";
    $result=$connect->query($sql);
}catch(Exception $e){
    echo "Error".$e->getMessage();
    exit();
}
if(!$result->rowCount()){
      header("Location: index.php");
      exit();
  }
  $profile=$result->fetch();

?>

<?php  include('layout/headerhtml.php') ?>
<body>

<?php include('layout/headerpage.php') ?>

	<section>
		<div class="modals-section">
			<!-- Signup modal -->
			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  				<div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">SIGN UP</h4>
				    	</div>
				    	<div class="tab-wrapper">
							<ul class="nav nav-tabs" role="tablist">
						    	<li role="presentation" class="active"><a href="#customer" aria-controls="customer" role="tab" data-toggle="tab">Customer</a></li>
						    	<li role="presentation"><a href="#provider" aria-controls="provider" role="tab" data-toggle="tab">Provider</a></li>
						  	</ul>
							<div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="customer">
							    	<div class="social-media-register">
							    		<div>
											<a href="#" style="background-color: rgb(59, 89, 152);">
							    				<i class="fa fa-facebook"></i>
							    				<span>Facebook</span>
							    			</a>							    			
							    		</div>
							    		<div>
							    			<a href="#" style="background-color: rgb(29, 161, 242);">
							    				<i class="fa fa-twitter"></i>
							    				<span>Twitter</span>
							    			</a>
							    		</div>
							    		<div>
							    			<a href="#" style="background-color: rgb(231, 71, 60);">
							    				<i class="fa fa-google"></i>
							    				<span>Google</span>
							    			</a>
							    		</div>
							    	</div><br><br>
							    	<div class="form-register">
							    		<form>
								    		<input type="text" name="" placeholder="First Name" style="margin-right: 3%;">
								    		<input type="text" name="" placeholder="Last Name">
								    		<input type="text" name="" placeholder="Username" style="margin-right: 3%;">
								    		<input type="text" name="" placeholder="Email">
								    		<input type="text" name="" placeholder="Password" style="margin-right: 3%;">
								    		<input type="text" name="" placeholder="Confirm Password">
								    		<div style="clear: both;"></div>
								    		<button type="submit">Sign up</button>
							    		</form>
							    		<a href="#">Already Registered</a>
							    	</div>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="provider">
							    	<div class="social-media-register">
							    		<div>
											<a href="#" style="background-color: rgb(59, 89, 152);">
							    				<i class="fa fa-facebook"></i>
							    				<span>Facebook</span>
							    			</a>							    			
							    		</div>
							    		<div>
							    			<a href="#" style="background-color: rgb(29, 161, 242);">
							    				<i class="fa fa-twitter"></i>
							    				<span>Twitter</span>
							    			</a>
							    		</div>
							    		<div>
							    			<a href="#" style="background-color: rgb(231, 71, 60);">
							    				<i class="fa fa-google"></i>
							    				<span>Google</span>
							    			</a>
							    		</div>
							    	</div><br><br>
							    	<div class="form-register provider">
							    		<input type="text" name="" placeholder="Company Name">
							    		<input type="text" name="" placeholder="First Name" style="margin-right: 3%;">
							    		<input type="text" name="" placeholder="Last Name">
							    		<input type="text" name="" placeholder="Username"  style="margin-right: 3%;">
							    		<input type="text" name="" placeholder="Email">
							    		<input type="text" name="" placeholder="Password" style="margin-right: 3%;">
							    		<input type="text" name="" placeholder="Confirm Password">
							    		<input type="text" name="" placeholder="Phone Number" style="margin-right: 3%;">
							    		<input type="text" name="" placeholder="Address">
							    		<input type="text" name="" placeholder="Country" style="margin-right: 3%;">
							    		<input type="text" name="" placeholder="State">
							    		<input type="text" name="" placeholder="City" style="margin-right: 3%;">
							    		<input type="text" name="" placeholder="Area">
							    		<input type="text" name="" placeholder="Postal Code" style="margin-right: 3%;">
							    		<select class="selectpicker">
							    			<optgroup label="Picnic">
										    	<option>Mustard</option>
										    	<option>Ketchup</option>
										    	<option>Relish</option>
										  	</optgroup>
										  	<optgroup label="Camping">
										    	<option>Tent</option>
										    	<option>Flashlight</option>
										    	<option>Toilet Paper</option>
										  	</optgroup>
							    		</select>
							    		<div style="clear: both;"></div>
							    		<button type="submit">Sign up</button>
							    		<a href="#">Already Registered</a>
							    	</div>
							    </div>
							</div>
						</div>
				    </div>
  				</div>
			</div>
			<!-- Login modal -->
			<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  				<div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">SIGN IN</h4>
				    	</div>
				    	<div class="tab-content">
							<div class="form-login">
				    			<div class="login-username">
				    				<i class="fa fa-user fa-lg"></i>
				    				<input type="text" name="" placeholder="Username">
				    			</div>
				    			<div class="login-username">
				    				<i class="fa fa-lock fa-lg"></i>
				    				<input type="text" name="" placeholder="Password">
				    			</div>
				    			<button type="submit">Submit</button>
				    			<a href="#">Dont have an account?</a>
				    			<a href="#">Forgot Password</a><br>
				    		</div>	
				    		<div class="social-media-register">
				    			<div>
									<a href="#" style="background-color: rgb(59, 89, 152);">
							   			<i class="fa fa-facebook"></i>
						 				<span>Facebook</span>
					    			</a>							    			
					    		</div>
							    <div>
									<a href="#" style="background-color: rgb(29, 161, 242);">
					    				<i class="fa fa-twitter"></i>
					    				<span>Twitter</span>
					    			</a>
							    </div>
								<div>
					    			<a href="#" style="background-color: rgb(231, 71, 60);">
					    				<i class="fa fa-google"></i>
					    				<span>Google</span>
							    	</a>
							   	</div>
				    		</div>			    		
				    	</div>
				    </div>
			  	</div>
			</div>

			<!-- Request a quote modal -->
			<div class="modal add-new-branch-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">REQUEST A QUOTE</h4>
				    	</div>
				    	<div class="request-quote-div">
				    		<div class="requested-user">
				    			<i class="fa fa-user"></i>
				    			<input type="text" name="" placeholder="name">
				    		</div>
				    		<div class="requested-user">
				    			<i class="fa fa-envelope"></i>
				    			<input type="text" name="" placeholder="Email">
				    		</div>
				    		<div style="clear: both;"></div><br>
				    		<div class="requested-user-no">
				    			<i class="fa fa-phone"></i>
				    			<input type="number" name="" placeholder="Phone">
				    		</div><br>
				    		<div class="requested-user-no textarea">
				    			<i class="fa fa-pencil"></i>
				    			<textarea></textarea>
				    		</div>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button>Request a quote</button>
				    	</div>
				    </div>
  				</div>
			</div>
			<!-- End of request a quote modal -->

			<!-- Image Gallery Modal -->
			<div class="modal fade" id="galley-modal" tabindex="-1" role="dialog" aria-labelledby="my-gallery-modal">
  				<div class="modal-dialog" role="document">
      				<section class="modal-closer">
      					<a href="#" data-dismiss="modal" aria-label="Close">&times;</a>
      				</section>
      				<section class="modal-images">
      					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							<ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>

							  <!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
							    <div class="item active">
							      	<img src="./Assets/Images/bg4.jpg" alt="...">
							      	<div class="carousel-caption">
							        	...
							      	</div>
							    </div>
							    <div class="item">
							      	<img src="./Assets/Images/banner_inner.jpg" alt="...">
							      	<div class="carousel-caption">
							        	...
							      	</div>
							    </div>
							    ...
							</div>

							  <!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="fa fa-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="fa fa-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							</a>
						</div>
      				</section>
  				</div>
			</div>
		</div>
	</section>

	<section class="profile-search-provider-form">
		<div class="profile-phone-cover"></div>
		<div class="search-outer-div">
			<div class="search-inner-div">
				<form>
					<input type="text" placeholder="Keyword" name="" class="search-keyword">
					<input type="text" placeholder="Adderss" name="" class="search-keyword">
					<select class="selectpicker" data-live-search="true" data-live-search-placeholder="Search" data-header="Select Category">
  						<option>Select a Category</option>
  						<optgroup label="Picnic">
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/blog1.jpg'><span>Hot Dog, Fries and a Soda</span>">
	  						</option>
							<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/pic1.jpg'><span>Burger, Shake and a Smile</span>">
	  						</option>
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/testimony-pic.jpg'><span>Sugar, Spice and all things nice</span>">
	  						</option>
						</optgroup>
						<optgroup label="Camp">
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/dreamstime.jpg'><span>Hot Dog, Fries and a Soda</span>">
	  						</option>
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/blog1.jpg'><span>Hot Dog, Fries and a Soda</span>">
	  						</option>
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/pic1.jpg'><span>Hot Dog, Fries and a Soda</span>">
	  						</option>
						</optgroup>
					</select>

					<select class="selectpicker" data-live-search="true" data-live-search-placeholder="Search" data-header="Select Category">
  						<option>Select a Category</option>
  						<optgroup label="Picnic">
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/blog1.jpg'><span>Hot Dog, Fries and a Soda</span>">
	  						</option>
							<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/pic1.jpg'><span>Burger, Shake and a Smile</span>">
	  						</option>
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/testimony-pic.jpg'><span>Sugar, Spice and all things nice</span>">
	  						</option>
						</optgroup>
						<optgroup label="Camp">
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/dreamstime.jpg'><span>Hot Dog, Fries and a Soda</span>">
	  						</option>
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/blog1.jpg'><span>Hot Dog, Fries and a Soda</span>">
	  						</option>
	  						<option data-tokens="ketchup mustard" data-content="<img src='./Assets/Images/pic1.jpg'><span>Hot Dog, Fries and a Soda</span>">
	  						</option>
						</optgroup>
					</select>

					<button type="submit">Find Providers</button>
				</form>
			</div>
		</div>
	</section>

	<section class="pages-nav-section">
		<ul>
			<li><a href="#">Home / </a></li>
			<li><a href="#">Electricial / </a></li>
			<li><?=  $profile['category']?></li>
		</ul>
	</section>

       <section class="profile-page-detail" >
     			 <?php  include('golden_nuggets.php'); ?>
     	</section>		 



			  <section class="profile-page-gallery">
				<h2>PHOTO GALLERY</h2><br><br>
					<div class="owl-carousel owl-theme">

			      <?php  include('photo_gallery.php');  ?>
				 
				     <div style="clear: both;"></div>
			        </div>
			    </section>

		<section class="profile-business-hours">
     		<?php  include('bussness_hours.php'); ?>
      </section>
	

	 
	 <section class="profile-team-members">
		<h2>Our Team</h2><br><br>
		<div class="team-member-container">

          <?php include('our_team.php'); ?>
	<div style="clear: both;"></div><br><br>
		</div>
	</section>


       <section class="services-provided profile-address-info">
 	        <?php  include('address_info.php'); ?>
	           
       </section>

   <?php include('profile_map.php'); ?>  

   <section class="profile-page-video-section">

    <?php include('our_video.php');  ?>
    	
    </section>


     <?php  include('profile_service.php'); ?>



  <?php  include('profile_booking.php'); ?>
 
 
     

	











		<section class="profile-review-section">
			<h2>REVIEW</h2><br>
			<div class="alert alert-danger">Please <a href="#">login</a> via customer account to submit review</div>
			<div class="rating-instruction">
				<div class="empty-stars-div">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<div class="filled-stars-div">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<span>5</span>
				</div>
				<div style="clear: both;"></div>
				<div class="empty-stars-div">
					<span>4 stars - 7 reviews</span>
				</div>
				<div class="filled-stars-div">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<span>4</span>
				</div>
				<div style="clear: both;"></div>
				<div class="empty-stars-div" style="text-align: ;">
					<span>75.0% Completion Rate</span>
				</div>
				<div class="filled-stars-div">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<span>3</span>
				</div>
				<div style="clear: both;"></div>
				<div class="empty-stars-div">
					<span>15 Completed Task</span>
				</div>
				<div class="filled-stars-div">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<span>2</span>
				</div>
				<div style="clear: both;"></div>
				<div class="empty-stars-div" style="visibility: hidden;">
					<span>4 stars - 7 reviews</span>
				</div>
				<div class="filled-stars-div">
					<i class="fa fa-star"></i>
					<span>1</span>
				</div>
				<div style="clear: both;"></div>
			</div>
			<div style="clear: both;"></div><br>
			<h3>7 REVIEWS ON "SPARK ELECTRICIAN PVT. LTD."</h3><br>
			<ul class="comments-list">
				<li>
					<div class="comment-avatar-div">
						<img src="./Assets/Images/pictest3.jpg">
					</div>
					<div class="comments-body">
						<b>STACY POE</b><br><br>
						<span><i class="fa fa-address-book"></i>&nbsp;October 6, 2015 at 7:15 am</span>
						<h6>EXCEPTIONAL SERVICE</h6>
						<div>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<p>Very good service ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.</p>
					</div>
					<div style="clear: both;"></div>
				</li>
				<li>
					<div class="comment-avatar-div">
						<img src="./Assets/Images/pictest3.jpg">
					</div>
					<div class="comments-body">
						<b>STACY POE</b><br><br>
						<span><i class="fa fa-address-book"></i>&nbsp;October 6, 2015 at 7:15 am</span>
						<h6>EXCEPTIONAL SERVICE</h6>
						<div>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>Very good service ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.</p>
					</div>
					<div style="clear: both;"></div>
				</li>
				<li>
					<div class="comment-avatar-div">
						<img src="./Assets/Images/pictest3.jpg">
					</div>
					<div class="comments-body">
						<b>STACY POE</b><br><br>
						<span><i class="fa fa-address-book"></i>&nbsp;October 6, 2015 at 7:15 am</span>
						<h6>EXCEPTIONAL SERVICE</h6>
						<div>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<p>Very good service ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.</p>
					</div>
					<div style="clear: both;"></div>
				</li>
				<li>
					<div class="comment-avatar-div">
						<img src="./Assets/Images/pictest3.jpg">
					</div>
					<div class="comments-body">
						<b>STACY POE</b><br><br>
						<span><i class="fa fa-address-book"></i>&nbsp;October 6, 2015 at 7:15 am</span>
						<h6>EXCEPTIONAL SERVICE</h6>
						<div>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<p>Very good service ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.</p>
					</div>
					<div style="clear: both;"></div>
				</li>
				<li>
					<div class="comment-avatar-div">
						<img src="./Assets/Images/pictest3.jpg">
					</div>
					<div class="comments-body">
						<b>STACY POE</b><br><br>
						<span><i class="fa fa-address-book"></i>&nbsp;October 6, 2015 at 7:15 am</span>
						<h6>EXCEPTIONAL SERVICE</h6>
						<div>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>Very good service ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.</p>
					</div>
					<div style="clear: both;"></div>
				</li>
			</ul>
		</section>

		<section class="profile-request-quote">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><br>
			<a href="#" data-target=".add-new-branch-modal" data-toggle="modal" >Request a Quote</a>
		</section>



<?php  include('layout/footer.php')  ?>
	<!-- <div class="page-loader"><i class="fa fa-spinner fa-pulse fa-lg"></i></div>  -->
	<script type="text/javascript" src="./Assets/JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap-select.js"></script>
	<script type="text/javascript" src="./Assets/JS/owl.carousel.js"></script>
	<script type="text/javascript" src="./Assets/SummerNote/summernote.js"></script>
	<script type="text/javascript" src="./Assets/JS/zabuto_calendar.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl8dMQnzkz9yxw17yL_YwXGZGyXZp2Ip8&callback=initMap" type="text/javascript"></script>
	<script type="text/javascript" src="./Assets/JS/script.js"></script>		
</body>
</html>