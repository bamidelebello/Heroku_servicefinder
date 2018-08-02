<!-- 
include("config.php");

  if(isset($_POST['loginsys'])){
       $errMsg='';

       $user_name=$_POST['user_name'];
       $password=$_POST['password'];

       if($user_name == '')
       	$errMsg='user name cannot be empty';
       if($password == '')
       	$errMsg='password can not be empty';

       try{
        $stmt = $connect->prepare('SELECT id, company_name,first_name,last_name,user_name,email,password,phone_number,address,country,state,city,area,postal_code,selectpicker FROM provider WHERE user_name = :user_name');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array(
          ':user_name' => $user_name
          ));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($user_name == $data['user_name']){
             $_SESSION['id'] = $data['id'];
             $_SESSION['company_name'] = $data['company_name'];
             $_SESSION['first_name'] = $data['first_name'];
             $_SESSION['last_name'] = $data['last_name'];
             $_SESSION['user_name'] = $data['user_name'];
             $_SESSION['email']=$data['email'];
             $_SESSION['phone_number']=$data['phone_number'];
             $_SESSION['address']=$data['address'];
             $_SESSION['country']=$data['country'];
             $_SESSION['state']=$data['state'];
             $_SESSION['city']=$data['city'];
             $_SESSION['area']=$data['area'];
             $_SESSION['postal_code']=$data['postal_code'];
             $_SESSION['selectpicker']=$data['selectpicker'];
            // $_SESSION['loggedinAsProvider'] = "Yes";
             $_SESSION['ÏsProviderLoggedIn'] = "Yes";
          header('Location: company-profile-settings.php');
        }else{
        	echo "not found";
        }

       }catch(PDOException $e){
         $errMsg=$e->getMessage();
       }
  } -->

<!DOCTYPE html>
<html>
<head>
	<title>Service Finder</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/bootstrap-select.css">
	<link rel="stylesheet" type="text/css" href="./Assets/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="./Assets/SummerNote/summernote.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/zabuto_calendar.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/main.css">
</head>
<body>
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
	    					<a href="#">
	    						<i class="fa fa-power-off"></i>
	    						&nbsp;Fourth Directory
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
						<a href="#profile-setting" aria-controls="profile-setting" data-toggle="tab" role="presentation"><i class="fa fa-user"></i> Profile Settings</a>
					</li>
					<li data-toggle="modal" data-target=".identity-check-modal">
						<a href="#"><i class="fa fa-location-arrow"></i> Identity Check </a>
					</li>
					<li >
						<a href="#bussiness-hours" aria-controls="bussiness-hours" data-toggle="tab" role="presentation"><i class="fa fa-clock-o"></i> Bussines Hours</a>
					</li>
					<li>
						<a href="#our-branches" aria-controls="our-branches" data-toggle="tab" role="presentation"><i class="fa fa-map-marker"></i>OUR BRANCHES</a>
					</li>
					<li>
						<a href="#our-regions" aria-controls="our-regions" data-toggle="tab" role="presentation"><i class="fa fa-location-arrow"></i>OUR REGIONS</a>
					</li>
					<li>
						<a href="#my-services" aria-controls="my-services" data-toggle="tab" role="presentation"><i class="fa fa-server"></i>MY SERVICES</a>
					</li>
					<li>
						<a href="#my-jobs" aria-controls="my-jobs" data-toggle="tab" role="presentation"><i class="fa fa-briefcase"></i> MY JOBS</a>
					</li>
					<li>
						<a href="#team-member" aria-controls="team-member" data-toggle="tab" role="presentation"><i class="fa fa-users"></i> TEAM MEMBER</a>
					</li>
					<li>
						<a href="#booking" aria-controls="booking" data-toggle="tab" role="presentation"><i class="fa fa-hand-o-up"></i>Bookings</a>
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
			<div class="modal add-new-branch-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW BRANCH</h4>
				    	</div>
				    	<div class="modal-body new-branch-modal-body">
				    		<input type="text" name="" placeholder="Address">
							<select class="selectpicker" data-live-search="true" data-header="Select branch country" title="Country">
								<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
								<option data-tokens="mustard">Burger, Shake and a Smile</option>
								<option data-tokens="frosting">Sugar, Spice and all things nice</option>
							</select>
							<select class="selectpicker" data-live-search="true" data-header="Select branch city" title="City">
								<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
								<option data-tokens="mustard">Burger, Shake and a Smile</option>
								<option data-tokens="frosting">Sugar, Spice and all things nice</option>
							</select>
				    		<input type="text" name="" placeholder="App/Suite #" class="app-suite-input">
				    		<input type="text" name="" placeholder="State">
				    		<input type="text" name="" placeholder="Postal code">
				    		<div style="clear: both;"></div>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button>Add New Branch</button>
				    	</div>
				    </div>
  				</div>
			</div>
			<!-- End of Add new branch modal -->

			<!-- Add new Region modal -->
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

			<!-- Add service modal -->
			<div class="modal add-new-service-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW SERVICE</h4>
				    	</div>
				    	<div class="modal-body new-service-modal">
				    		<input type="text" name="" placeholder="Service nsme">
				    		<label><b>SERVICE COST</b></label><br>

				    		<input id="fixed-price" type="radio" name="cost_type" checked>
				    		<label for="fixed-price">Fixed Price</label>

				    		<input id="fixed-price" type="radio" name="cost_type">
				    		<label for="fixed-price">Fixed Price</label>

				    		<input id="fixed-price" type="radio" name="cost_type">
				    		<label for="fixed-price">Fixed Price</label>
				    		<br><br>
				    		<input type="text" name="" placeholder="Service Cost">

				    		<select class="selectpicker" data-live-search="true" title="Service Group">
				    			<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
				    			<option data-tokens="mustard">Burger, Shake and a Smile</option>
				    			<option data-tokens="frosting">Sugar, Spice and all things nice</option>
				    		</select>
				    		<br><br>
				    		<textarea id="summernote1"></textarea>
				    		<!-- <div style="clear: both;"></div> -->
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button>Add New Service</button>
				    	</div>
				    </div>
  				</div>
			</div>
			<!-- End of add service modal -->

			<!-- Add new member modal -->
			<div class="modal add-new-member-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW MEMBER</h4>
				    	</div>
				    	<div class="modal-body new-branch-modal-body">
				    		<div class="team-member-image">
				    			<span class="">X</span>
				    			<img src="./Assets/Images/no_img.jpg">
				    			<input type="file" name="" id="choose-member-image">
				    			<label for="choose-member-image">Select Image</label>
				    		</div><br>
				    		<input type="text" name="" placeholder="Full Name" class="member-fullname-input">
				    		<input type="text" name="" placeholder="Member email">
				    		<input type="text" name="" placeholder="Member Phone no." class="member-phone-number-input">
				    		<div style="clear: both;"></div>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button>Create</button>
				    	</div>
				    </div>
  				</div>
			</div>
			<!-- End of new member modal -->

			<!-- Submit Modal -->
			<div class="modal submit-response-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">SUCCESS</h4>
				    	</div>
				    	<div class="modal-body">
				    		<p>You have successfully submitted</p>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Ok</button>
				    	</div>
				    </div>
  				</div>
			</div>
			<!-- End of Submit Modal -->

			<!-- End of modal section -->

		</section>
		<section class="settings-tab-content tab-content">

			<!-- Profile settings section -->
			<section role="tabpanel" class="tab-pane fade in active" id="profile-setting">
				<h4>PROFILE SETTINGS</h4>
				<div class="company-profile-form">
					<form>
						<div class="profile-form-buttons">
							<div>
								<button id="submit-button" data-toggle="modal" data-target=".submit-response-modal">Submit Information</button>
							</div>
							<div>
								<button><i class="fa fa-user"></i>&nbsp; My Profile</button>
								<button><i class="fa fa-bell"></i>&nbsp;Job Alerts</button>
							</div>
							<div style="clear: both;"></div>
						</div>
						<div class="settings-brief-details">
							<div class="profile-image-container">
								<img id="profile-image" src="./Assets/Images/no_img.jpg">
								<span class="delete-profile-image" href="#" data-toggle="modal" data-target=".bs-example-modal-">x</span>
								<input type="file" name="" id="chooseImage">
								<label for="chooseImage">Select Image</label>
							</div>
							
							<div>
								<p class="image-warning">Update your avatar manually,If not set, the default Gravatar will be the same as your login email/user account.</p>
								<ul>
									<li><strong>MAX UPLOAD SIZE:</strong> 1MB</li>
									<li><strong>DIMENSIONS:</strong> 300*350</li>
									<li><strong>EXTENSIONS:</strong> JPEG,PNG</li>
								</ul>
							</div>
							<div style="clear: both;"></div>
						</div>
						<div class="about-company-setting">
							<div class="about-setting-header">
								<h4>ABOUT ME</h4>
							</div>
							<div class="about-setting-body">
								<div class="company-name-field big">
									<label>COMPANY NAME</label><br>
									<div>
										<i class="fa fa-user"></i>
										<input type="text" name="" placeholder="Company's name">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>FIRST NAME</label>
									<div>
										<i class="fa fa-user"></i>
										<input type="text" name="" placeholder="Company's name">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>LAST NAME</label>
									<div>
										<i class="fa fa-user"></i>
										<input type="text" name="" placeholder="Company's name">
									</div>
								</div>
								<div style="clear: both;"></div>

								<div class="company-name-field big">
									<label>TAGLINE</label><br>
									<div>
										<i class="fa fa-user"></i>
										<input type="text" name="" placeholder="Company's name">
									</div>
								</div>

								<!-- <div class="company-name-field big"> -->
									<label>Biography</label><br>
									<textarea id="summernote"></textarea>
								<!-- </div> -->

							</div>
						</div>

						<!-- ..end of about me form -->
						
						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>CONTACT DETAIL</h4>
							</div>
							<div class="contact-setting-body">
								<div class="company-name-field smll lft">
									<label>LANDLINE</label>
									<div>
										<i class="fa fa-phone"></i>
										<input type="text" name="" placeholder="+1 234 567 89">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>MOBILE</label>
									<div>
										<i class="fa fa-mobile"></i>
										<input type="text" name="" placeholder="+1 234 567 89">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>EMAIL ADDRESS</label>
									<div>
										<i class="fa fa-envelope"></i>
										<input type="text" name="" placeholder="xyz@gmail.com">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>SKYPE</label>
									<div>
										<i class="fa fa-skype"></i>
										<input type="text" name="" placeholder="">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>WEBSITE</label>
									<div>
										<i class="fa fa-globe"></i>
										<input type="text" name="" placeholder="http://localhost:4200">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>FAX</label>
									<div>
										<i class="fa fa-fax"></i>
										<input type="text" name="" placeholder="+1 234 567 89">
									</div>
								</div>
								<div style="clear: both;"></div>
							</div>
						</div>

						<!-- ..End of Contact detail-section.. -->
						<!-- Begin address section but styled with contact detail styles -->

						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>ADDRESS</h4>
							</div>

							<div class="contact-setting-body address-setting-body">
								<label>LOCATION</label>
								<div id="map"></div><br>
								<button>Find address on map</button>
								<p>Note: This will load your address on map and fillup latitude and longitude</p>
							</div>

							<div class="contact-setting-body">
								<div class="company-name-field smll lft">
									<label>ADDRESS</label>
									<div>
										<i class="fa fa-globe"></i>
										<input type="text" name="" placeholder="Samseong-dong, , South Korea">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>APT/SUITE #</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="" placeholder="Company's name">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>CITY</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="" placeholder="Gangnam-gu">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>STATE</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="" placeholder="Seoul">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>POSTAL CODE</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="" placeholder="135-090">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>COUNTRY</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="" placeholder="Country">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>LONGITUDE</label>
									<div>
										<i class="fa fa-street-view"></i>
										<input type="text" name="" placeholder="37.5139848">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>LATITUDE</label>
									<div>
										<i class="fa fa-street-view"></i>
										<input type="text" name="" placeholder="127.05652069999996">
									</div>
								</div>
								<div style="clear: both;"></div>
							</div>
						</div>

						<!-- Address & location section ended -->
						<!-- Service to perform at section begins -->

						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>SERVICE TO PERFORM AT</h4>
							</div>
							<div class="contact-setting-body service-to-perform">
								<div class="radio-button">
									<input type="radio" name="radio1" id="provider-location" checked>
									<label for="provider-location">My Location</label>
								</div>
								<div class="radio-button">
									<input type="radio" name="radio1" id="customer-location" >
									<label for="customer-location">Customer Location</label>
								</div>
								<div style="clear: both;"></div>
							</div>
						</div>

						<!-- ...end of service to perform at section -->
						<!-- begin social media section... -->

						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>SOCIAL MEDIA</h4>
							</div>
							<div class="contact-setting-body">
								<div class="company-name-field smll lft" data-toggle="tooltip" data-placement="top" title="facebook profile url">
									<label>FACEBOOK</label>
									<div>
										<i class="fa fa-facebook"></i>
										<input type="text" name="" placeholder="facebook.com">
									</div>
								</div>

								<div class="company-name-field smll" data-toggle="tooltip" data-placement="top" title="twitter profile url">
									<label>TWITTER</label>
									<div>
										<i class="fa fa-twitter"></i>
										<input type="text" name="" placeholder="twitter.com">
									</div>
								</div>

								<div class="company-name-field smll lft" data-toggle="tooltip" data-placement="top" title="linkedin profile url">
									<label>LINKEDIN</label>
									<div>
										<i class="fa fa-linkedin"></i>
										<input type="text" name="" placeholder="linkedin.com">
									</div>
								</div>

								<div class="company-name-field smll" data-toggle="tooltip" data-placement="top" title="pinterest profile url">
									<label>PINTEREST</label>
									<div>
										<i class="fa fa-pinterest"></i>
										<input type="text" name="" placeholder="">
									</div>
								</div>

								<div class="company-name-field smll lft" data-toggle="tooltip" data-placement="top" title="google+ profile url">
									<label>GOOGLE +</label>
									<div>
										<i class="fa fa-google-plus"></i>
										<input type="text" name="" placeholder="">
									</div>
								</div>

								<div class="company-name-field smll" data-toggle="tooltip" data-placement="top" title="instagram profile url">
									<label>INSTAGRAM</label>
									<div>
										<i class="fa fa-instagram"></i>
										<input type="text" name="" placeholder="instagram.com">
									</div>
								</div>
								<div style="clear: both;"></div>
							</div>
						</div>

						<!-- ..end of social media section -->
						<!-- begin password update section.. -->
						
						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>PASSWORD UPDATE</h4>
							</div>
							<div class="contact-setting-body password-update-section">
								<div class="company-name-field smll lft">
									<label>NEW PASSWORD</label>
									<div>
										<i class="fa fa-lock"></i>
										<input type="password" name="" placeholder="">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>REPEAT PASSWORD</label>
									<div>
										<i class="fa fa-lock"></i>
										<input type="text" name="" placeholder="">
									</div>
								</div>
								<div style="clear: both;"></div>
								<p>Enter same password in both fields. Use an uppercase letter and a number for stronger password.</p>
							</div>
						</div>

						<!-- ..end of password update -->
						<!-- begin booking settings -->
						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>BOOKING SETTINGS</h4>
							</div>
							<div class="contact-setting-body">
								<div class="company-name-field booking-settings-section">
									<label>SHORT DESCRIPTION FOR BOOKING</label><br>
									<div>
										<i class="fa fa-pencil"></i>
										<textarea placeholder="Enter short Booking descripiton"></textarea>
									</div>
								</div><br>
								<div class="booking-alert-warning">
									Please set available times for the booking system to work
								</div><br>
								<div class="radio-section">
									<div class="radio-inner">
										<h5>BOOKING PROCESS</h5>
										<input type="radio" name="process_radio" id="process-off" checked>
										<label for="process-off">On</label>

										<input type="radio" name="process_radio" id="process-on">
										<label for="process-on">Off</label>
									</div>
									<div class="radio-inner">
										<h5>Avalability based on</h5>
										<input type="radio" name="avalability-radio" id="avalability-off" checked>
										<label for="avalability-off">Time slots</label>

										<input type="radio" name="avalability-radio" id="avalability-on">
										<label for="avalability-on">Start time</label>
									</div>
									<div class="radio-inner">
										<h5>booking based on</h5>
										<input type="radio" name="region-radio" id="postal-on">
										<label for="postal-on">Postal code</label>

										<input type="radio" name="region-radio" id="region-on">
										<label for="region-on">Region</label>

										<input type="radio" name="region-radio" id="open-on" checked>
										<label for="open-on">Open</label>
									</div>
									<div class="radio-inner">
										<h5>booking amount charged based on services</h5>
										<input type="radio" name="charge-radio" id="charge-on" checked>
										<label for="charge-on">Yes</label>

										<input type="radio" name="charge-radio" id="charge-off">
										<label for="charge-off">No</label>
									</div>

									<div class="radio-inner">
										<h5>booking assignment</h5>
										<input type="radio" name="automatic-radio" id="automatic-on" checked>
										<label for="automatic-on">Automatically</label>

										<input type="radio" name="automatic-radio" id="manual-on">
										<label for="manual-on">Manually</label>
									</div>
									<div class="radio-inner">
										<h5>staff members available at the time of booking</h5>
										<input type="radio" name="staff-radio" id="staff-on" checked>
										<label for="staff-on">Yes</label>

										<input type="radio" name="staff-radio" id="staff-off">
										<label for="staff-off">No</label>
									</div>
									<div style="clear: both;"></div>
								</div>
							</div>
						</div>

						<!-- ...end booking section -->
						<!-- begin category section -->

						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>CATEGORY</h4>
							</div>
							<div class="contact-setting-body category-settings-section">
								<div class="company-name-field" id="select-radio-category">
									<label>CATEGORY</label><br>
									<select class="selectpicker" multiple>
										<optgroup label="Cleaning">
											<option value="Home Cleaning">Home Cleaning</option>
									  		<option value="Landscaping">Landscaping</option>
									  		<option value="Laundry">Laundry</option>
										</optgroup>
									  	<optgroup label="Food and Drinks">
											<option value="Pub and Bars">Pub and Bars</option>
									  		<option value="Resturant">Resturant</option>
									  		<option value="Cafe">Cafe</option>
									  		<option value="Fast Food">Fast Food</option>
										</optgroup>
									</select>
								</div><br>

								<div class="company-name-field">
									<label>PRIMARY CATEGORY</label><br>
									<div class="select-value-radios">
										
									</div>
								</div>
								<div style="clear: both;"></div>
							</div>
						</div>


						<!-- End of Category Section -->
						<!-- Begin Cover Image Section -->

						<div class="setting-contact-detail">
							<div class="contact-setting-header cover-image-settings">
								<h4>COVER IMAGE</h4>
								<span>Please upload 2000px x 400px size image for higher quality</span>
							</div>
							<div class="contact-setting-body">
								<div class="cover-photo-dropzone" id="cover-photo-zone">
									<span>CHOOSE FILE HERE</span><br>
									<i class="fa fa-arrow-down"></i><br>
									<input type="file" name="" id="cover-photo">
									<label class="cover-photo-label" for="cover-photo">Select Files</label>
								</div>
								<div class="cover-photo-preview">
									<img src="./Assets/Images/blog1.jpg" style="">
									<span class="remove-cover photo ">x</span>
								</div>
							</div>
						</div>

						<!-- End of Cover Image Section -->
						<!-- Begin Gallery Image section -->

						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>GALLERY IMAGES</h4>
							</div>
							<div class="contact-setting-body">
								<div class="cover-photo-dropzone">
									<span>CHOOSE FILE HERE</span><br>
									<i class="fa fa-arrow-down"></i><br>
									<input type="file" name="" id="gallery-photo" multiple="true">
									<label class="gallery-photo-label" for="gallery-photo">Select Files</label>
								</div>
							</div>
						</div>

						<!-- End of Gallery Image Section -->
						<!-- Begin Attachment Section -->

						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>ATTACHMENTS</h4>
							</div>
							<div class="contact-setting-body">
								<div class="cover-photo-dropzone">
									<span>CHOOSE FILE HERE</span><br>
									<i class="fa fa-arrow-down"></i><br>
									<input type="file" name="" id="attachment-photo" multiple="true">
									<label class="attachment-photo-label" for="attachment-photo">Select Files</label>
								</div>
							</div>
						</div>

						<!-- End of Attachments Section -->
						<!-- Begin video embed section... -->

						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>EMBED VIDEO</h4>
							</div>
							<div class="contact-setting-body video-embed-settings">
								<div class="company-name-field">
									<label>VIDEO URL</label>
									<div class="video-embed-div">
										<!-- <i class="fa fa-user"></i> -->
										<input type="text" name="" placeholder="Insert youtube video url" id="video-url-textbox">
										<button id="previewVideo">Preview</button>
										<div style="clear: both; border: none;"></div>
									</div><br>
									<div class="embedded-video-div">
										<!-- <video src="/Users/olayinka/Movies/videos/Abu's Story.mp4"></video> -->
										<iframe src="" frameborder="0" allowfullscreen></iframe>
									</div>
								</div><br>
								<button class="add-video" data-toggle="modal" data-target=".submit-response-modal">Add Video</button>
								<div style="clear: both;"></div>
							</div>
						</div>

					</form>
				</div>
			</section>

			<!-- End of profile settings section -->

			<section role="tabpanel" class="tab-pane fade" id="bussiness-hours">
				<h4>BUSSINESS HOURS</h4>
				<div class="company-business-hours">
					<div class="company-business-hours-inner">
						<p>Set Up business hours for each week day</p><br>
						<ul class="bussiness-weekdays" role="tablist">
							<li role="presentation" class="active">
								<a href="#bussiness-hours-monday" aria-controls="bussiness-hours-monday" role="tab" data-toggle="tab">Monday</a>
							</li>
							<li role="presentation" class="">
								<a href="#bussiness-hours-tuesday" aria-controls="bussiness-hours-tuesday" role="tab" data-toggle="tab">Tuesday</a>
							</li>
							<li role="presentation" class="">
								<a href="#bussiness-hours-wednesday" aria-controls="bussiness-hours-wednesday" role="tab" data-toggle="tab">Wednesday</a>
							</li>
							<li role="presentation" class="">
								<a href="#bussiness-hours-thursday" aria-controls="bussiness-hours-thursday" role="tab" data-toggle="tab">Thursday</a>
							</li>
							<li role="presentation" class="">
								<a href="#bussiness-hours-friday" aria-controls="bussiness-hours-friday" role="tab" data-toggle="tab">Friday</a>
							</li>
							<li role="presentation" class="">
								<a href="#bussiness-hours-saturday" aria-controls="bussiness-hours-saturday" role="tab" data-toggle="tab">Saturday</a>
							</li>
							<li role="presentation" class="">
								<a href="#bussiness-hours-sunday" aria-controls="bussiness-hours-sunday" role="tab" data-toggle="tab">Sunday</a>
							</li>
						</ul>
						<div class="tab-content bussiness-duration">
							<div role="tabpanel" class="tab-pane fade in active" id="bussiness-hours-monday">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-monday">
									<label for="hour-mode-monday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-tuesday">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-tuesday">
									<label for="hour-mode-tuesday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-wednesday">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-wednesday">
									<label for="hour-mode-wednesday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-thursday">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-thursday">
									<label for="hour-mode-thursday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-friday">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-friday">
									<label for="hour-mode-friday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-saturday">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-saturday">
									<label for="hour-mode-saturday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-sunday">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker">
									  	<option>Mustard</option>
									  	<option>Ketchup</option>
									  	<option>Relish</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-sunday">
									<label for="hour-mode-sunday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</div>

						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</section>

			<!-- End of Bussiness hours section -->

			<section role="tabpanel" class="tab-pane fade" id="our-branches">
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
								<tr>
									<td>92, Anaheim, Los angeles</td>
									<td>92/20</td>
									<td>Los angeles</td>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>92, Anaheim, Los angeles</td>
									<td>92/20</td>
									<td>Los angeles</td>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>92, Anaheim, Los angeles</td>
									<td>92/20</td>
									<td>Los angeles</td>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>92, Anaheim, Los angeles</td>
									<td>92/20</td>
									<td>Los angeles</td>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>

			<!-- End of our branches section -->

			<section role="tabpanel" class="tab-pane fade" id="our-regions">
				<h4>OUR REGIONS</h4>
				<div class="company-branches">
					<div class="new-branch-button-div">
						<button class="new-branch-button" data-target=".add-new-region-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD NEW REGION</button>
					</div>
					<div class="region-filter-div">
						<div class="region-filter-left">
							<select class="selectpicker" title="Choose Entries">
								<option>10</option>
								<option>20</option>
								<option>30</option>
							</select>
						</div>
						<div class="region-search-right">
							<input type="text" name="" placeholder="Search">
						</div><br>
					</div><br><br>
					<div class="branch-table-div">
						<table class="table">
							<thead>
								<tr>
									<th>Region</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>

			<!-- End of Region Section -->

			<section role="tabpanel" class="tab-pane fade" id="my-services">
				<h4>MY SERVICES</h4>
				<div class="company-branches">
					<div class="new-branch-button-div">
						<button class="new-branch-button" data-target=".add-new-service-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD A SERVICE</button>
					</div>
					<div class="branch-table-div">
						<table class="table">
							<thead>
								<tr>
									<th>Service Name</th>
									<th>Cost</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Carlifonia</td>
									<td>USA</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>

			<!-- End of My-service section -->

			<!-- my-jobs section -->
			<section id="my-jobs" role="tabpanel" class="tab-pane fade">
				<h4>MY JOBS</h4>
				<div class="company-branches">
					<!-- <div class="new-branch-button-div">
						<button class="new-branch-button" data-target=".add-new-region-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD NEW REGION</button>
					</div> -->
					<div class="region-filter-div">
						<div class="region-filter-left">
							<select class="selectpicker" title="Choose Entries">
								<option>10</option>
								<option>20</option>
								<option>30</option>
							</select>
						</div>
						<div class="region-search-right">
							<input type="text" name="" placeholder="Search Jobs">
						</div><br>
					</div><br><br>
					<div class="branch-table-div">
						<table class="table">
							<thead>
								<tr>
									<th>Title</th>
									<th>User</th>
									<th>Status</th>
									<th>Category</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Car Wash</td>
									<td>Henry</td>
									<td>Done</td>
									<td>Automobile</td>
									<td>Monday, January, 2018</td>
								</tr>
								<tr>
									<td>Car Wash</td>
									<td>Henry</td>
									<td>Done</td>
									<td>Automobile</td>
									<td>Monday, January, 2018</td>
								</tr>
								<tr>
									<td>Car Wash</td>
									<td>Henry</td>
									<td>Done</td>
									<td>Automobile</td>
									<td>Monday, January, 2018</td>
								</tr>
								<tr>
									<td>Car Wash</td>
									<td>Henry</td>
									<td>Done</td>
									<td>Automobile</td>
									<td>Monday, January, 2018</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>

			<!-- End of my-jobs sectiom -->

			<!-- Team member section -->
			<section id="team-member" role="tabpanel" class="tab-pane fade">
				<h4>TEAM MEMBERS</h4>
				<div class="company-branches">
					<div class="new-branch-button-div">
						<button class="new-branch-button" data-target=".add-new-member-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD NEW MEMBER</button>
					</div>
					<div class="branch-table-div">
						<table class="table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Phone no.</th>
									<th>Email</th>
									<th>Is Admin</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Zabaleta</td>
									<td>+91 545 437 112</td>
									<td>xyz@gmail.com</td>
									<td>Yes</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Zabaleta</td>
									<td>+91 545 437 112</td>
									<td>xyz@gmail.com</td>
									<td>Yes</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Zabaleta</td>
									<td>+91 545 437 112</td>
									<td>xyz@gmail.com</td>
									<td>Yes</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Zabaleta</td>
									<td>+91 545 437 112</td>
									<td>xyz@gmail.com</td>
									<td>Yes</td>
									<td>
										<div class="dropdown">
											<button id="dbranch" type="button" role="button" data-toggle="dropdown">Delete</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
												<li><a href="#">Edit</a></li>
												<li><a href="#">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
			<!-- End of team member section -->

			<!-- Booking section -->
			<section id="booking" role="tabpanel" class="tab-pane fade">
				<h4>BOOKINGS</h4>
				<div class="company-branches">
					<!-- <div class="new-branch-button-div">
						<button class="new-branch-button" data-target=".add-new-region-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD NEW REGION</button>
					</div> -->
					<div class="region-filter-div">
						<div class="region-filter-left">
							<select class="selectpicker" title="Choose Entries">
								<option>10</option>
								<option>20</option>
								<option>30</option>
							</select>
						</div>
						<div class="region-search-right">
							<input type="text" name="" placeholder="Search Jobs">
						</div><br>
					</div><br><br>
					<div class="branch-table-div">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Customers name</th>
									<th>Email</th>
									<th>Date</th>
									<th>Time</th>
									<th>Assigned member</th>
									<th>Upcoming or past</th>
									<th>Status</th>
									<th>Type</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Dennis Suarez</td>
									<td>xyz@yahoo.com</td>
									<td>Sunday, November, 2011</td>
									<td>23:00</td>
									<td>Security</td>
									<td>Past</td>
									<td>Done</td>
									<td>String</td>
								</tr>
								<tr>
									<td>Dennis Suarez</td>
									<td>xyz@yahoo.com</td>
									<td>Sunday, November, 2011</td>
									<td>23:00</td>
									<td>Security</td>
									<td>Past</td>
									<td>Done</td>
									<td>String</td>
								</tr>
								<tr>
									<td>Dennis Suarez</td>
									<td>xyz@yahoo.com</td>
									<td>Sunday, November, 2011</td>
									<td>23:00</td>
									<td>Security</td>
									<td>Past</td>
									<td>Done</td>
									<td>String</td>
								</tr>
								<tr>
									<td>Dennis Suarez</td>
									<td>xyz@yahoo.com</td>
									<td>Sunday, November, 2011</td>
									<td>23:00</td>
									<td>Security</td>
									<td>Past</td>
									<td>Done</td>
									<td>String</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
			<!-- Bookings section Ended -->

		</section>
		<section style="clear: both;"></section>
	</section>


	<footer>
		<div class="footer-details">
			<div class="first-footer-detail">
				<img src="./Assets/Images/logo-1.png"><br><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p><br>
				<a href="#">Read More...</a>
			</div>

			<div class="second-footer-detail">
				<h4>RECENT POST</h4>
				<div class="footer-blog">
					<div class="footer-blog-image">
						<img src="./Assets/Images/blog1.jpg">
					</div>
					<div class="footer-blog-text">
						<h5>MY FOURTH BLOG POST TITLE</h5>
						<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
						<i class="fa fa-address-book">&nbsp; 12 jan 2018</i>
						<i class="fa fa-comment">&nbsp; 0</i>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div class="footer-blog">
					<div class="footer-blog-image">
						<img src="./Assets/Images/blog1.jpg">
					</div>
					<div class="footer-blog-text">
						<h5>MY FOURTH BLOG POST TITLE</h5>
						<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
						<i class="fa fa-address-book">&nbsp; 12 jan 2018</i>
						<i class="fa fa-comment">&nbsp; 0</i>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>

			<div class="third-footer-detail">
				<h4>META</h4>
				<a href="#">Login</a><br>
				<a href="#">Entries RSS</a><br>
				<a href="#">Comments RSS</a><br>
				<a href="#">Wordpress.org</a><br>
				<h4>TAGS</h4>
				<p>Automobile Automotive and personal care Cleaning General Labour</p>
			</div>

			<div class="fourth-footer-detail">
				<h4>OUR NEWSLETTER</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua</p>
				<input type="text" name="" placeholder="Email"><br><br>
				<button>Subscribe</button>
			</div>
			<div style="clear: both;"></div>
		</div>

		<div class="bottom-footer">
			<div class="copyright">
				<span>© 2017 Webdesign broHameedCreations.un</span>
			</div>
			<div class="footer-social-media">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-linkedin"></a>
				<a href="#" class="fa fa-twitter"></a>
				<button id="scrollUp"><i class="fa fa-arrow-up"></i></button>
			</div>
			<div style="clear: both;"></div>
		</div>
	</footer>
	<div class="page-loader"><i class="fa fa-spinner fa-pulse fa-lg"></i></div> 

	<!-- Scripts -->
	<script type="text/javascript" src="./Assets/JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap-select.js"></script>
	<script type="text/javascript" src="./Assets/JS/owl.carousel.js"></script>
	<script type="text/javascript" src="./Assets/SummerNote/summernote.js"></script>
	<!-- Map Script -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl8dMQnzkz9yxw17yL_YwXGZGyXZp2Ip8&callback=initMap" type="text/javascript"></script>
	<!-- end map script -->
	<script type="text/javascript" src="./Assets/JS/zabuto_calendar.js"></script>
	<script type="text/javascript" src="./Assets/JS/script.js"></script>
</body>
</html>