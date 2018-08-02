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
						<a href="identity_check.php"><i class="fa fa-location-arrow"></i> Identity Check </a>
					</li>
					<li >
						<a href="businness-hours.php" aria-controls="bussiness-hours" data-toggle="tab" role="presentation"><i class="fa fa-clock-o"></i> Bussines Hours</a>
					</li>
					<li>
						<a href="our-branches.php" aria-controls="our-branches" data-toggle="tab" role="presentation"><i class="fa fa-map-marker"></i>OUR BRANCHES</a>
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
  					<form action="action_profile.php" method="post" enctype="multipart/form-data">
				    <div class="modal-content">
				    	<div class="modal-header">
				    <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<span class="model-title">UPLOAD IDENTITY PROOF</span>
				    	</div>
				    	<div class="modal-body">
				    		<div class="identity-dropzone">
				    			<p>Drop files here (Valid Formats: doc,docx,pdf,xls,xlsx,rtf,txt,ppt,pptx,jpg,jpeg,png)</p>
				    			<p>or</p>
				    			<input type="file" name="identity_file[]" id="identity-file" multiple>
				    			<label for="identity-file" class="identity-file-label">Select Files</label>
				    		</div><br>
				    		<button>Upload</button>
				    	</div>
				    </div>
				    </form>
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

				<script type="text/javascript" src="./Assets/JS/script.js"></script>


		</section>