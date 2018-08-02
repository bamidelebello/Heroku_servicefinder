<?php ob_start();?>
  <?php 

  include("header/htmlheader.php"); 
   include("config.php");
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
			<div class="modal add-new-service-modal fade" tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW SERVICE</h4>
				    	</div>
				    	<div class="modal-body new-service-modal">
				    <form method="post" action="">
				    	<div class="modal-body new-service-modal">

				    		<input type="text" name="service_name" placeholder="Service name">
				    		<label><b>SERVICE COST</b></label><br>

				    		<input id="fixed-price" type="radio" value="fixed" name="cost_type" checked>
				    		<label for="fixed-price">Fixed Price</label>

				    		<input id="fixed-price" type="radio" value="none" name="cost_type">
				    		<label for="fixed-price">None Fixed</label>

				    		<input id="fixed-price" type="radio" value="equal" name="cost_type">
				    		<label for="fixed-price">Equal Price</label>
				    		<br><br>
				    		<input type="text" name="service_cost" id="service_cost" placeholder="Service Cost">

				    		<select class="selectpicker" id="service_group" name="service_group" data-live-search="true" title="Service Group">
				    			<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
				    			<option data-tokens="mustard">Burger, Shake and a Smile</option>
				    			<option data-tokens="frosting">Sugar, Spice and all things nice</option>
				    		</select>
				    		<br><br>
				    		<textarea id="summernote1"  name="summer_note"></textarea>
				    		<div style="clear: both;"></div> 
				    	</div>

				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button name="add_service">Add New Service</button>
				    	</div>
				     </form>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button>Add New Service</button>
				    	</div>
				    </div>
  				</div>
			</div>

			<!-- Add service modal -->
			<div class="modal add-new-service-modal servicemodal-two fade"  tabindex="-1" role="dialog" aria-labelledby="">
  				<div class="modal-dialog" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">ADD NEW SERVICE</h4>
				    	</div>

                      <form method="post" action="my-services.php">
				    	<div class="modal-body new-service-modal">
				    		<input type="text" name="service_name" class="service_name" placeholder="Service Name">
				    		<label><b>SERVICE COST</b></label><br>

				   	<input id="fixed-price" type="radio" value="fixed_price" class="cost_type" name="cost_type" checked>
				    		<label for="fixed-price">Fixed Price</label>

				    		<input id="fixed-price" type="radio" value="none_fixed" class="cost_type" name="cost_type">
				    		<label for="fixed-price">None Fixed</label>

				    		<input id="fixed-price" type="radio" value="equal_price" class="cost_type" name="cost_type">
				    		<label for="fixed-price">Equal Price</label>
				    
				    		<br><br>

				    		<input type="text" name="service_cost" class="service_cost" placeholder="Service Cost">

				    		<select class="selectpicker" name="selectpicker"  id="selectpicker" data-live-search="true" title="Service Group">
				    			<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
				    			<option data-tokens="mustard">Burger, Shake and a Smile</option>
				    			<option data-tokens="frosting">Sugar, Spice and all things nice</option>
				    		</select>
				    		<br><br>
				    		<textarea id="summernote2" name="summer_note" class="summer_note" class="form-control"></textarea>
				    		<div style="clear: both;"></div>
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button name="service_add" id="serviceMain">Add New Service</button>
				    	</div>
				   </form>
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

			<section role="tabpanel" class="tab-pane fade in active" id="my-services">
				<h4>MY SERVICES</h4>
				<div class="company-branches">
					<div class="new-branch-button-div">
	 <button class="new-branch-button" data-target=".servicemodal-two" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD A SERVICE</button>
					</div>
					<div class="branch-table-div">
						<table class="table">
							<thead>
								<tr>
									 <th>#</th>
									<th>Service Name</th>
									<th>Cost</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								 <?php       
								    $sql="SELECT * FROM service";
								    $stmt=$connect->prepare($sql);
								   if($stmt->execute()){
                        

						 while ($row= $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
 						
 						 <tr>
									 <th><?php echo $row["id"]; ?></th>		
									<td><?php echo $row["service_name"]; ?></td>
									<td><?php echo $row["service_cost"]; ?></td>
									<td>
										<div class="dropdown">
									<button id="dbranch" type="button" role="button" data-toggle="dropdown">Action</button>
											<ul class="dropdown-menu" aria-labelledby="dbranch">
								  <li><a class="update_service" href="serverService.php?update=1&id=<?php echo $row["id"]; ?>"">Edit</a></li>
									<li><a href="serverService.php?delete=1&id=<?php echo $row["id"]; ?>"">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							  <?php  }
							
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

         $(document).on('click','#serviceMain',function(e){
            
             e.preventDefault();

		  var service_name = $('.service_name').val(); 
		  var cost_type = $('.cost_type').val(); 
		  var service_cost = $('.service_cost').val(); 
		  var selectpicker =$('#selectpicker').val(); 
		  var summer_note =$('.summer_note').val(); 


		$.ajax({
        url: 'serverService.php',
        type:'POST',
        data:{
        	'service_add':1,
        	'service_name':service_name,
        	'cost_type':cost_type,
        	'service_cost': service_cost,
        	'selectpicker':selectpicker,
        	'summer_note':summer_note
        },
        success:function(response){
        	//empty the form fields after submit
        	$('.service_name').val('');
        	$('.cost_type').val('');
        	$('.service_cost').val('');
        	$('#selectpicker').val('');
        	$('.summer_note').val('');
        }

  	 });




         });
    });

    
     var edit_id;
     var $edit_comment;
     $(document).on('click','.edit', function(){
       //set properties of comment being edited 
       edit_id=$(this).data('id');
       $edit_comment=$(this).parent();

       //get the name and text to be edit
       var name =$(this).siblings('.display_name').text();
       var comment =$(this).siblings('.comment_text').text();	

     //place the values inside the form
        $('#name').val(name);
        $('#comment').val(comment);

        $('#submit_btn').hide();
        $('#update_btn').show();
     });



 $(document).on('click','.delete', function(){

    var id = $(this).data('id');
    var $clicked_btn= $(this);

    $.ajax({
    url:'serverService.php',
    type:'GET',
     data:{
     	 'delete':1,
     	  'id':id
     },
     success :function(response){
     	//empy the form fields after submit
     	$clicked_btn.parent().remove();

     }

    });

 });

	</script>
</body>
</html>