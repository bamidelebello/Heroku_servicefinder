<?php

// require 'config.php';
// 	if(empty($_SESSION['user_name']))
// 		exit(header('Location: LoginPage.php'));
  	//printf("<script>location.href='LoginPage.php'</script>");
//  	echo '<script>window.location="LoginPage.php"</script>';

	if(empty($_SESSION['user_name']))
		//header('Location: LoginPage.php');


   include("operation_login.php");
   include("extra.php");
?>

<!DOCTYPE>
<html>
<head>
	<title>Service Finder</title>
	 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/bootstrap-select.css">
	<link rel="stylesheet" type="text/css" href="./Assets/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="./Assets/SummerNote/summernote.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/main.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/main.css">
</head>
<header>
		<div class="contact-header contact-header-mobile ">
			<ul style="float: right;">
				<li>
					<i class="fa fa-envelope"></i>
					<span>info@service-finder.biz</span>
				</li>
				<li>
					<i class="fa fa-phone"></i>
					<span>+00 364 573 391</span>
				</li>
			</ul>
			<div style="clear: both;"></div>
		</div>
		<div class="contact-header">
			<ul class="contact-header-list">
				<li>
					<i class="fa fa-envelope"></i>
					<span>info@service-finder.biz</span>
				</li>
				<li>
					<i class="fa fa-phone"></i>
					<span>+00 364 573 391</span>
				</li>
			</ul>
			<nav class="contact-header-nav">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-linkedin"></a>
				<a href="" class="fa fa-twitter"></a>

				<span class="dropdown notification-dropdown">
					<a class="fa" id="dLabel" data-target="" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-bell"></i>
						<span class="badge badge-xs badge-pink">3</span>
					</a>
	  				<ul class="dropdown-menu" aria-labelledby="dLabel">
	  					<li>Notification</li>
	    				<li>
	    					<a href="#">
	    						<div class="notification-image">
	    							<img src="./Assets/Images/blog1.jpg">
	    						</div>
								<div class="notification-title">
									<b>A new job has been posted</b><br>
	    							<i>I don't know what to write here</i>
								</div>
								<div style="clear: both;"></div>			
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<div class="notification-image">
	    							<img src="./Assets/Images/blog1.jpg">
	    						</div>
								<div class="notification-title">
									<b>A new job has been posted</b><br>
	    							<i>I don't know what to write here</i>
								</div>
								<div style="clear: both;"></div>			
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<div class="notification-image">
	    							<img src="./Assets/Images/blog1.jpg">
	    						</div>
								<div class="notification-title">
									<b>A new job has been posted</b><br>
	    							<i>I don't know what to write here</i>
								</div>
								<div style="clear: both;"></div>			
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<div class="notification-image">
	    							<img src="./Assets/Images/blog1.jpg">
	    						</div>
								<div class="notification-title">
									<b>A new job has been posted</b><br>
	    							<i>I don't know what to write here</i>
								</div>
								<div style="clear: both;"></div>			
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<div class="notification-image">
	    							<img src="./Assets/Images/blog1.jpg">
	    						</div>
								<div class="notification-title">
									<b>A new job has been posted</b><br>
	    							<i>I don't know what to write here</i>
								</div>
								<div style="clear: both;"></div>			
	    					</a>
	    				</li><li>
	    					<a href="#">
	    						<div class="notification-image">
	    							<img src="./Assets/Images/blog1.jpg">
	    						</div>
								<div class="notification-title">
									<b>A new job has been posted</b><br>
	    							<i>I don't know what to write here</i>
								</div>
								<div style="clear: both;"></div>			
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<!-- <i class="fa fa-spinner"></i> -->
	    						&nbsp;See all notifications
	    					</a>
	    				</li>

	  				</ul>
				</span>

				<span class="dropdown">
					<a class="fa" id="dLabel" data-target="" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user"></i>
						Hameed
						<span class="caret"></span>
					</a>
	  				<ul class="dropdown-menu" aria-labelledby="dLabel">
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-user"></i>
	    						&nbsp;Profile
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-spinner"></i>
	    						&nbsp;Settings
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-lock"></i>
	    						&nbsp;Connects
	    					</a>
	    				</li>
	    				<li>
	    					<a href="logout.php">
	    						<i class="fa fa-power-off"></i>
	    						&nbsp;logout
	    					</a>
	    				</li>
	  				</ul>
				</span>
				<a href="" data-toggle="modal" data-target=".bs-example-modal-sm" class="fa fa-user"><span>&nbsp;Login</span></a>
				<a href="" data-toggle="modal" data-target=".bs-example-modal-lg" class="fa fa-plus"><span>&nbsp;Sign up</span></a>
			</nav>
			<div style="clear: both;"></div>
		</div>
		<div class="nav-header">
			<div class="logo-div">
				<a href="index.html">
					<img src="./Assets/Images/logo-1.png">	
				</a>
			</div>	
			<nav>
				<a href="#">HOME</a>
				<a href="#">SUBMIT JOB</a>
				<span class="dropdown">
					<a class="" id="dLabel" data-target="" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						DIRECTORY
						<span class="caret"></span>
					</a>
	  				<ul class="dropdown-menu" aria-labelledby="dLabel">
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-user"></i>
	    						&nbsp;Profile
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-spinner"></i>
	    						&nbsp;Settings
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-lock"></i>
	    						&nbsp;Connects
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-power-off"></i>
	    						&nbsp;Fourth Directory
	    					</a>
	    				</li>
	  				</ul>
				</span>
				<a href="#">CONTACT US</a>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">SIGNUP</a>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">LOGIN</a>
			</nav>
			<button id="toggle-mobile-nav"><i class="fa fa-bars"></i></button>
			<div style="clear: both;"></div>
		</div>
		<div class="mobile-nav">
			<nav>
				<a href="#">HOME</a>
				<a href="#">SUBMIT JOB</a>
				<span class="dropdown">
					<a class="" id="dLabel" data-target="" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						DIRECTORY
						<span class="caret"></span>
					</a>
	  				<ul class="dropdown-menu" aria-labelledby="dLabel">
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-user"></i>
	    						&nbsp;Profile
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-spinner"></i>
	    						&nbsp;Settings
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-lock"></i>
	    						&nbsp;Connects
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						<i class="fa fa-power-off"></i>
	    						&nbsp;Fourth Directory
	    					</a>
	    				</li>
	  				</ul>
				</span>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">SIGNUP</a>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">LOGIN</a>
				<a href="#">CONTACT US</a>
			</nav>
		</div>
	</header>

<body>
	
	<section class="company-setting-section">

		<section class="settings-tab-menu">
			<div class="company-settings-box">
				<div class="company-image">
					<img src="./Assets/Images/pictest3.jpg">
				</div>
				<h6>FERRY CARPET CLEANING & RESTORATION OF BATTERY PARK INC</h6>
				<p>JOE JARAMILLO</p>
				<span class="provider-approval">
					<i class="fa fa-check"></i>
					<span>Verified Provider</span>
				</span>
			</div>
			<div class="company-settings-tab">
				<ul role="tablist">
					<li class="active">
						<a href="company-profile-settings.php" aria-controls="profile-setting" data-toggle="tab" role="presentation"><i class="fa fa-user"></i> Profile Settings</a>
					</li>
					<li data-toggle="modal" data-target=".identity-check-modal">
						<a href="#"><i class="fa fa-location-arrow"></i> Identity Check </a>
					</li>
					<li >
						<a href="./businness-hours.php" aria-controls="bussiness-hours" data-toggle="tab" role="presentation"><i class="fa fa-clock-o"></i> Bussines Hours</a>
					</li>
					<li>
						<a href="./our-branches.php" aria-controls="our-branches" data-toggle="tab" role="presentation"><i class="fa fa-map-marker"></i>OUR BRANCHES</a>
					</li>
					<li>
						<a href="our-regions.php" aria-controls="our-regions" data-toggle="tab" role="presentation"><i class="fa fa-location-arrow"></i>OUR REGIONS</a>
					</li>
					<li>
						<a href="my-services.php" aria-controls="my-services" data-toggle="tab" role="presentation"><i class="fa fa-server"></i>MY SERVICES</a>
					</li>
					<li>
						<a href="my-jobs.php" aria-controls="my-jobs" data-toggle="tab" role="presentation"><i class="fa fa-briefcase"></i> MY JOBS</a>
					</li>
					<li>
						<a href="team-member.php" aria-controls="team-member" data-toggle="tab" role="presentation"><i class="fa fa-users"></i> TEAM MEMBER</a>
					</li>
					<li>
						<a href="bookings.php" aria-controls="booking" data-toggle="tab" role="presentation"><i class="fa fa-hand-o-up"></i>Bookings</a>
					</li>
					<!-- <li>
						<a href="#"><i class="fa fa-user"></i> Profile Settings</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-user"></i> Profile Settings</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-user"></i> Profile Settings</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-user"></i> Profile Settings</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-user"></i> Profile Settings</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-user"></i> Profile Settings</a>
					</li> -->
				</ul>
			</div>
			<!-- Modal Section -->
			<!-- Delete profile image modal -->
			<div class="modal fade bs-example-modal-" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
				<div class="modal-dialog modal-" role="document">
				  	<div class="modal-content">
						<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<span class="model-title">This image will be parmanently deleted</span>
				    	</div>
				    	<div class="modal-footer">
				    		<button class="btn btn-default" data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button class="btn btn-warning parmanently-delete" data-dismiss="modal" aria-label="Close">Ok</button>
				    	</div>
				  	</div>
				</div>
			</div>
			<!-- End of delete profile image modal -->

			<!-- Identity Check modal -->
			<div class="modal identity-check-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<span class="model-title">UPLOAD IDENTITY PROOF</span>
				    	</div>
				    	<div class="modal-body">
				    		<div class="identity-dropzone">
				    			<p>Drop files here (Valid Formats: doc,docx,pdf,xls,xlsx,rtf,txt,ppt,pptx,jpg,jpeg,png)</p>
				    			<p>or</p>
				    			<input type="file" name="" id="identity-file" multiple>
				    			<label for="identity-file" class="identity-file-label">Select Files</label>
				    		</div><br>
				    		<button>Upload</button>
				    	</div>
				    </div>
  				</div>
			</div>
			<!-- Identity check modal end -->

			<!-- Add new branch modal -->

		<!-- End of Add new branch modal -->







	   <?php
            if (isset($_GET["update"])) {
                       //php 7
                        $id=$_GET["id"] ?? null;
                        $where =array("id"=>$id,);
                    $row = $obj->select_record("branch",$where);
                   ?> 	

			<div class="modal add-new-branch-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW BRANCH</h4>
				    	</div>
			
				  <form method="post" action="operation_login.php">

				    	<div class="modal-body new-branch-modal-body">

				     
			<input type="text" name="address" required="true"  value="<?php echo $row['address']; ?>" placeholder="Address">

							<select class="selectpicker" required="true"   name="country" data-live-search="true" data-header="Select branch country" title="Country">		    
				       <option data-tokens="ketchup mustard" value="<?php echo $row['country']; ?>"><?php echo $row['country']; ?></option>
							</select>

							<select class="selectpicker" required="true"   name="city" data-live-search="true" data-header="Select branch city" title="City">
						 <option data-tokens="ketchup mustard"><?php echo $row['city']; ?></option>
							</select>
				    <input type="text" required="true"   name="app"  value="<?php echo $row['app']; ?>" placeholder="App/Suite #" class="app-suite-input">

				    		<input type="text" required="true"    value="<?php echo $row['state']; ?>" name="state" placeholder="State">
				    		<input type="text" required="true"   name="postal_code"  value="<?php echo $row['postal_code']; ?>" placeholder="Postal code">

				    		<input type="hidden" value="<?php echo $id; ?>">
				    		<div style="clear: both;"></div>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button name="">Update Branch</button>
				    	</div>

       		    		 
				    </form>

				    <?php

                    }else{

                   ?>
				    </div>
  				</div>
			</div>

			<!-- Add new Region modal -->
			<div class="modal add-new-branch-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW BRANCH</h4>
				    	</div>

				     <form method="post" action="operation_login.php">

				    	<div class="modal-body new-branch-modal-body">
				    		<input type="text" required="true" name="address" placeholder="Address">

							<select class="selectpicker" required="true" name="country" data-live-search="true" data-header="Select branch country" title="Country">
								     <?php foreach ($country as $countries) { ?>
								     <option data-tokens="ketchup mustard"><?php echo $countries; ?></option>
								    <?php } ?>
							</select>
							<select class="selectpicker" required="true" name="city" data-live-search="true" data-header="Select branch city" title="City">
								  <?php foreach ($city as $cities) { ?>
								     <option data-tokens="ketchup mustard"><?php echo $cities; ?></option>
								    <?php } ?>
							</select>
				    		<input type="text" required="true" name="app" placeholder="App/Suite #" class="app-suite-input">
				    		<input type="text" required="true" name="state" placeholder="State">
				    		<input type="text" required="true" name="postal_code" placeholder="Postal code">
				    		<div style="clear: both;"></div>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button name="add_branch">Add New Branch</button>
				    	</div>
				    </form>

				      <?php
     					}
   						 ?>
				    </div>
  				</div>
			</div>


 
	

			<div class="modal add-new-region-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW REGION</h4>
				    	</div>
				    	<div class="modal-body new-branch-modal-body">
				    		<input type="text" name="" placeholder="Address">
				    		<div style="clear: both;"></div>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button>Add New Region</button>
				    	</div>
				    </div>
  				</div>
			</div>
			<!-- End of add new region modal -->



		</section>

<section class="settings-tab-content tab-content">

			<section role="tabpanel" class="tab-pane fade in active" id="our-branches">
				<h4>OUR BRANCHES</h4>
				<div class="company-branches">
					<div class="new-branch-button-div">
						<button class="new-branch-button" data-target=".add-new-branch-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD NEW BRANCH</button>
					</div>
					<div class="branch-table-div">
						<table class="table">
							<thead>
								<tr>
									<th>Address</th>
									<th>App/Suite</th>
									<th>City</th>
									<th>State</th>
									<th>Country</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
						   <?php  
						       
			                 $myrow=$obj->fetch_records("branch");
			                   foreach ($myrow as $row) {
			                       //breaking point
			                   ?>
			            <tr>
						<td><?php echo $row["address"]; ?></td>
						<td><?php echo $row["app"]; ?></td>
						<td><?php echo $row["city"]; ?></td>
						<td><?php echo $row["state"]; ?></td>
						<td><?php echo $row["country"]; ?></td>
						<td>
			      <?php ?>

				 <div class="dropdown">
				<button id="dbranch" type="button" role="button" data-toggle="dropdown">Action</button>
								<ul class="dropdown-menu" aria-labelledby="dbranch">
						<li><a href="operation_login.php?delete=1&id=<?php echo $row["id"]; ?>">Delete</a></li>		
	<li><a  href="update_branch.php?update=1&id=<?php echo $row["id"]; ?>">Edit</a></li>
								</ul>
					</div>
				</td>
			</tr>
						    <?php
			                   }
			                 ?> 			
							</tbody>
						</table>
					</div>
				</div>
			</section>


		</section>

		<section style="clear: both;"></section>
	</section>


  <?php include('footer/footer.php') ?>
	<!-- <div class="page-loader"><i class="fa fa-spinner fa-pulse fa-lg"></i></div>  -->

	<!-- Scripts -->
	<script type="text/javascript" src="./Assets/JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap-select.js"></script>
	<script type="text/javascript" src="./Assets/JS/owl.carousel.js"></script>
	<script type="text/javascript" src="./Assets/SummerNote/summernote.js"></script>
	<!-- Map Script -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl8dMQnzkz9yxw17yL_YwXGZGyXZp2Ip8&callback=initMap" type="text/javascript"></script>
	<!-- end map script -->
	<script type="text/javascript" src="./Assets/JS/script.js"></script>
	<script type="text/javascript">
		$('.company-settings-tab a').click(function() {
			location.href = $(this).attr('href');
		});
	</script>
</body>
</html>