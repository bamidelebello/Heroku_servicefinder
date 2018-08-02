<?php ob_start();?>
 <?php

   include ("action_member.php");  ?>

  <?php 
 
  include("header/htmlheader.php");
   ?>
<body>
<?php include("header/header.php"); ?>


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
                   

                      <?php
            if (isset($_GET["update"])) {
                       //php 7
                        $id=$_GET["id"] ?? null;
                        $where =array("id"=>$id,);
              $row = $member->select_members("team_member",$where);
                 
                   ?> 	
             		<!-- Add new member modal -->
			<div class="modal add-new-member-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW MEMBER </h4>
				    	</div>
				    	<form id="form_submit" action="action_member.php" method="POST" enctype="multipart/form-data">
				    	<div class="modal-body new-branch-modal-body">
		
				    	  <div class="team-member-image">
								<img id="profile-image" src="./Assets/Images/no_img.jpg">
								<span class="delete-profile-image" href="#" data-toggle="modal" data-target=".bs-example-modal-">x</span>
								<input type="file" name="member_image" id="chooseImage">
								<label for="chooseImage">Select Image</label>
							</div>
							<!-- 	<input type="file" name="member_image" id="chooseImage"> -->
				      <tr>
                        <td><input type="hidden"  value="<?php echo $id;?>"  name="id"></td>
                      </tr>
				    		<br>
				    		<input type="text" name="full_name"  value="<?php echo $row["full_name"] ?>" placeholder="Full Name" class="member-fullname-input">
				    		<input type="text" name="email" placeholder="Member email">
				    	  
                       <input type="text" name="member_phone" placeholder="Member Phone no." class="member-phone-number-input">

				    		 <input type="text" name="description" placeholder="Member description" class="member-phone-number-input">

							<div class="contact-setting-body service-to-perform">
								<div class="radio-button">
									<input type="radio" value="admin" name="radio1" id="provider-location" checked>
									<label for="provider-location">Admin</label>
								</div>
								<div class="radio-button">
									<input type="radio" value="user" name="radio1" id="customer-location" >
									<label for="customer-location">User</label>
								</div>
								<div style="clear: both;"></div>
							</div>
						
				   
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button name="add_member">Update</button>
				    	</div>
				    	</form>
				    </div>
  				</div>
			</div>
			<!-- End of new member modal -->
			                  <?php

			                  }else{

			                 ?>

                 		<!-- Add new member modal -->
			<div class="modal add-new-member-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW MEMBER </h4>
				    	</div>
				    	<form id="form_submit" action="action_member.php" method="POST" enctype="multipart/form-data">
				    	<div class="modal-body new-branch-modal-body">
		
				    	  <div class="team-member-image">
								<img id="profile-image" src="./Assets/Images/no_img.jpg">
								<span class="delete-profile-image" href="#" data-toggle="modal" data-target=".bs-example-modal-">x</span>
								<input type="file" name="member_image" id="chooseImage">
								<label for="chooseImage">Select Image</label>
							</div>
							<!-- 	<input type="file" name="member_image" id="chooseImage"> -->
							
				    		<br>
				    		<input type="text" name="full_name" placeholder="Full Name" class="member-fullname-input">
				    		<input type="text" name="email" placeholder="Member email">
				    	  
                       <input type="text" name="member_phone" placeholder="Member Phone no." class="member-phone-number-input">

				    		 <input type="text" name="description" placeholder="Member description" class="member-phone-number-input">

							<div class="contact-setting-body service-to-perform">
								<div class="radio-button">
									<input type="radio" value="admin" name="radio1" id="provider-location" checked>
									<label for="provider-location">Admin</label>
								</div>
								<div class="radio-button">
									<input type="radio" value="user" name="radio1" id="customer-location" >
									<label for="customer-location">User</label>
								</div>
								<div style="clear: both;"></div>
							</div>
						
				   
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button name="add_member">Create</button>
				    	</div>
				    	</form>
				    </div>
  				</div>
			</div>
			<!-- End of new member modal -->
	
    <?php
     }
    ?>
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

			<section id="team-member" role="tabpanel" class="tab-pane fade in active">
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
					        <th style="width: 20%;">Actions</th>
									
								</tr>
							</thead>
							<tbody>
						   <?php  
						       
			       $mymember =$member->fetch_members("team_member");
                        foreach ($mymember  as $row) {
			                       //breaking point
			                   ?>
			            <tr>
						<td><?php echo $row["full_name"]; ?></td>
						<td><?php echo $row["member_phone"]; ?></td>
						<td><?php echo $row["email"]; ?></td>
						<td><?php echo $row["radio1"]; ?></td>
						<td>
			      <?php ?>
			       <!-- data-target=".add-new-member-modal" data-toggle="modal" -->

				 <div class="dropdown">
				<button id="dbranch" type="button" role="button" data-toggle="dropdown">Action</button>
								<ul class="dropdown-menu" aria-labelledby="dbranch">
				<li><a href="action_member.php?delete=1&id=<?php echo $row["id"]; ?>">Delete</a></li>	
	            <li><a href="editmember.php?update=1&id=<?php echo $row["id"]; ?>">Edit</a></li>
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

      $(document).ready(function(){
 		
 		$('#form_submit').submit(function(evt){

            evt.preventDefault();

               var postData = $(this).serialize();
                var url =$(this).attr('action');
                
               $.post(url,postData function(php-table-data){
                   
                   $('#car-result').html(php-table-data);
               });
 		});


      });

	</script>
</body>
</html>
