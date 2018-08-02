
		<section class="settings-tab-content tab-content">

			<!-- Profile settings section -->
			<section role="tabpanel" class="tab-pane fade in active" id="profile-setting">
				<h4>PROFILE SETTINGS</h4>
				<div class="company-profile-form">
	 <form method="POST" action="myprofile.php" enctype="multipart/form-data">
               <button type="submit" class="btn btn-success" name="about_me"  data-target=".submit-response-modal">Submit Information</button>	
                    
						<div class="profile-form-buttons">
							<div>
	<button id="submit-button" name="about_me" data-toggle="modal" data-target=".submit-response-modal">Submit Information</button>
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
								<input type="file" name="image_profile" id="chooseImage">
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
										<input type="text" value="<?php echo $_SESSION['company_name'] ?>" name="company_name" placeholder="Company's name">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>FIRST NAME</label>
									<div>
										<i class="fa fa-user"></i>
										<input type="text" value="<?php echo $_SESSION['first_name'] ?>" name="first_name" placeholder="Company's name">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>LAST NAME</label>
									<div>
										<i class="fa fa-user"></i>
										<input type="text" value="<?php echo $_SESSION['last_name'] ?>" name="last_name" placeholder="Company's name">
									</div>
								</div>
								<div style="clear: both;"></div>

								<div class="company-name-field big">
									<label>TAGLINE</label><br>
									<div>
										<i class="fa fa-user"></i>
										<input type="text" name="tagline" placeholder="Company's name">
									</div>
								</div>

								<!-- <div class="company-name-field big"> -->
									<label>Biography</label><br>
									<textarea id="summernote" class="form-control"  name="biography"></textarea>
								<!-- </div> -->

							</div>
						</div>
                   </form>

						<!-- ..end of about me form -->
						<!-- contact_detail.php -->
					<form name="data" method="post" action="#">
						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>CONTACT DETAIL</h4>
							</div>
            
							<div class="contact-setting-body">
								<div class="company-name-field smll lft">
									<label>LANDLINE</label>
									<div>
										<i class="fa fa-phone"></i>
										<input type="text" name="land_line" id="land_line" placeholder="+1 234 567 89">
									</div>
								</div>
                             
								<div class="company-name-field smll">
									<label>MOBILE</label>
									<div>
										<i class="fa fa-mobile"></i>
										<input type="text" name="mobile" id="mobile" placeholder="+1 234 567 89">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>EMAIL ADDRESS</label>
									<div>
										<i class="fa fa-envelope"></i>
										<input type="text" name="email_address" id="email_address" placeholder="xyz@gmail.com">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>SKYPE</label>
									<div>
										<i class="fa fa-skype"></i>
										<input type="text" name="skype" id="skype" placeholder="">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>WEBSITE</label>
									<div>
										<i class="fa fa-globe"></i>
										<input type="text" name="website" id="website" placeholder="http://localhost:4200">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>FAX</label>
									<div>
										<i class="fa fa-fax"></i>
										<input type="text" name="fax" id="fax" placeholder="+1 234 567 89">
									</div>
								</div>
								<div style="clear: both;"></div>
                	<button id="submit-button" name="contact_detail" id="contact_detail" value="insert Data" class="btn btn-success" data-toggle="modal" data-target=".submit-response-modal">Submit Information</button>
							</div>
						</div>

                     </form>
						<!-- ..End of Contact detail-section.. -->
						<!-- Begin address section but styled with contact detail styles -->
              
                   <form method="POST" action="address_location.php">
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
					   	<input type="text" name="address" id="txtAddressAutocomplete" onFocus="geolocate()" placeholder="Samseong-dong, , South Korea">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>APT/SUITE #</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="area" id="street_number" placeholder="Company's name">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>CITY</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="city" id="locality" placeholder="Gangnam-gu">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>STATE</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="state" id="administrative_area_level_1" placeholder="Seoul">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>POSTAL CODE</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="postal_code" id="postal_code" placeholder="135-090">
									</div>
								</div>

								<div class="company-name-field smll">
									<label>COUNTRY</label>
									<div>
										<i class="fa fa-map-marker"></i>
										<input type="text" name="country" id="country" placeholder="Country">
									</div>
								</div>

								<div class="company-name-field smll lft">
									<label>LONGITUDE</label>
									<div>
										<i class="fa fa-street-view"></i>
										<input type="text" name="longitude" id="lng" placeholder="37.5139848" >
									</div>
								</div>

								<div class="company-name-field smll">
									<label>LATITUDE</label>
									<div>
										<i class="fa fa-street-view"></i>
										<input type="text" name="latitude" id="lat" placeholder="127.05652069999996">
									</div>
								</div>
								<div style="clear: both;"></div>
								<button id="submit-button" name="address_location" class="btn btn-success" data-toggle="modal" data-target=".submit-response-modal">Address And Location</button>
							</div>
						</div>
 					</form>
						<!-- Address & location section ended -->
						<!-- Service to perform at section begins -->
                 
                
                       <form action="" method="POST" enctype="multipart/form-data">

						<div class="setting-contact-detail">
							<div class="contact-setting-header">
								<h4>SERVICE TO PERFORM AT</h4>
							</div>
							<div class="contact-setting-body service-to-perform">
								<div class="radio-button">
									<input type="radio" value="location" name="service_perform" id="provider-location" checked>
									<label for="provider-location">My Location</label>
								</div>
								<div class="radio-button">
									<input type="radio" name="service_perform" value="customer" id="customer-location" >
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
										<input type="text" name="face_book" placeholder="facebook.com">
									</div>
								</div>

								<div class="company-name-field smll" data-toggle="tooltip" data-placement="top" title="twitter profile url">
									<label>TWITTER</label>
									<div>
										<i class="fa fa-twitter"></i>
										<input type="text" name="twitter" placeholder="twitter.com">
									</div>
								</div>

								<div class="company-name-field smll lft" data-toggle="tooltip" data-placement="top" title="linkedin profile url">
									<label>LINKEDIN</label>
									<div>
										<i class="fa fa-linkedin"></i>
										<input type="text" name="linkedin" placeholder="linkedin.com">
									</div>
								</div>

								<div class="company-name-field smll" data-toggle="tooltip" data-placement="top" title="pinterest profile url">
									<label>PINTEREST</label>
									<div>
										<i class="fa fa-pinterest"></i>
										<input type="text" name="pinterest" placeholder="">
									</div>
								</div>

								<div class="company-name-field smll lft" data-toggle="tooltip" data-placement="top" title="google+ profile url">
									<label>GOOGLE +</label>
									<div>
										<i class="fa fa-google-plus"></i>
										<input type="text" name="google" placeholder="">
									</div>
								</div>

								<div class="company-name-field smll" data-toggle="tooltip" data-placement="top" title="instagram profile url">
									<label>INSTAGRAM </label>
									<div>
										<i class="fa fa-instagram"></i>
										<input type="text" name="instagram" placeholder="instagram.com">
									</div>
								</div>
								<div style="clear: both;"></div>
							</div>
						</div>
             
						<!-- ..end of social media section -->
						<!-- begin password update section.. -->

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
								<textarea name="descripiton" placeholder="Enter short Booking descripiton"></textarea>
									</div>
								</div><br>
								<div class="booking-alert-warning">
									Please set available times for the booking system to work
								</div><br>
								<div class="radio-section">
									<div class="radio-inner">
										<h5>BOOKING PROCESS</h5>
										<input type="radio" value="Yes" name="process_radio" id="process-off" checked>
										<label for="process-off">On</label>

										<input type="radio" value="No" name="process_radio" id="process-on">
										<label for="process-on">Off</label>
									</div>
									<div class="radio-inner">
										<h5>Avalability based on</h5>
										<input type="radio" value="Yes" name="avalability_radio" id="avalability-off" checked>
										<label for="avalability-off">Time slots</label>

										<input type="radio" value="No" name="avalability_radio" id="avalability-on">
										<label for="avalability-on">Start time</label>
									</div>
									<div class="radio-inner">
										<h5>booking based on</h5>
										<input type="radio" value="post code" name="region_radio" id="postal-on">
										<label for="postal-on">Postal code</label>

										<input type="radio" value="region" name="region_radio" id="region-on">
										<label for="region-on">Region</label>

										<input type="radio" value="open" name="region_radio" id="open-on" checked>
										<label for="open-on">Open</label>
									</div>
									<div class="radio-inner">
										<h5>booking amount charged based on services</h5>
										<input type="radio" value="Yes" name="charge_radio" id="charge-on" checked>
										<label for="charge-on">Yes</label>

										<input type="radio" value="No" name="charge_radio" id="charge-off">
										<label for="charge-off">No</label>
									</div>

									<div class="radio-inner">
										<h5>booking assignment</h5>
										<input type="radio" value="automatically" name="automatic_radio" id="automatic-on" checked>
										<label for="automatic-on">Automatically</label>

										<input type="radio"  value="manually" name="automatic_radio" id="manual-on">
										<label for="manual-on">Manually</label>
									</div>
									<div class="radio-inner">
										<h5>staff members available at the time of booking</h5>
										<input type="radio" value="Yes" name="staff_radio" id="staff-on" checked>
										<label for="staff-on">Yes</label>

										<input type="radio" value="NO" name="staff_radio" id="staff-off">
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
				  <select class="selectpicker" name="category[]"  multiple="multiple">
						   <optgroup label="Cleaning">
							    <?php
								foreach ( $robots as $robot) { 	?>
								<option><?php echo $robot ?></option>
					           <?php } ?>	 		
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

						<!-- start insert this section into database -->
            
         

						<div class="setting-contact-detail">
							<div class="contact-setting-header cover-image-settings">
								<h4>COVER IMAGE</h4>
								<span>Please upload 2000px x 400px size image for higher quality</span>
							</div>
							<div class="contact-setting-body">
								<div class="cover-photo-dropzone" id="cover-photo-zone">
									<span>CHOOSE FILE HERE</span><br>
									<i class="fa fa-arrow-down"></i><br>
									<input type="file" name="cover_photo" value="cover_photo" id="cover-photo">
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
									<input type="file" name="gallery_image" value="gallery_image" id="gallery-photo" multiple="true">
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
									<input type="file" name="attachment" value="attachment" id="attachment-photo" multiple="true">
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
							<input type="text" name="video_url" placeholder="Insert youtube video url" id="video-url-textbox">
								<button id="previewVideo">Preview</button>
										<div style="clear: both; border: none;"></div>
									</div><br>
									<div class="embedded-video-div">
										<!-- <video src="/Users/olayinka/Movies/videos/Abu's Story.mp4"></video> -->
										<iframe src="" frameborder="0" allowfullscreen></iframe>
									</div>
								</div><br>
				
						
							</div>
						</div><br>
               <button type="submit" name="add_profile" class="btn btn-success"  data-target=".submit-response-modal">Add Video
					</form>
				</div>
			</section>
			<!-- End of profile settings section -->
			<!-- Bookings section Ended -->
		</section>	
<?php

 //To check for input values


      
     


  class DataContent extends Database
  {
  	


  	public function profile_insertion($table,$fileds)
  	{
  			//insert into table_name(,,) values ('m_name','qty');
          //print
       $user_name=$_SESSION['user_name'];


       $cover_photo=$_FILES['cover_photo']['name'];
       $temp_dir=$_FILES['cover_photo']['tmp_name'];
       $imageSize=$_FILES['cover_photo']['size'];


       $gallery_image=$_FILES['gallery_image']['name'];
       $temp_dir2=$_FILES['gallery_image']['tmp_name'];
       $imageSize=$_FILES['gallery_image']['size'];

       $attachment=$_FILES['attachment']['name'];
       $temp_dir3=$_FILES['attachment']['tmp_name'];
       $imageSize=$_FILES['attachment']['size'];

       $upload_dir1='uploads/';
       $imgExt=strtolower(pathinfo($cover_photo,PATHINFO_EXTENSION));
       $valid_extensions=array('jpeg','jpg','png','gif','pdf');
       $cover_photo=$user_name."cover".".".$imgExt;
       move_uploaded_file($temp_dir,$upload_dir1.$cover_photo);

       $upload_dir2='uploads/';
       $upimg=strtolower(pathinfo($gallery_image,PATHINFO_EXTENSION));
       $valid_extensions=array('jpeg','jpg','png','gif','pdf');
       $gallery_image=$user_name."gallery".".".$upimg;
       move_uploaded_file($temp_dir2,$upload_dir2.$gallery_image);

       $upload_dir3='uploads/';
       $eximg=strtolower(pathinfo($attachment,PATHINFO_EXTENSION));
       $valid_extensions=array('jpeg','jpg','png','gif','pdf');
       $attachment=$user_name."attachment".".".$eximg;
       move_uploaded_file($temp_dir3,$upload_dir3.$attachment);


			$sql = "";
			$sql .= "INSERT INTO ".$table;
			$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
			$sql .= "('".implode("','", array_values($fileds))."')";
			$query = mysqli_query($this->connection,$sql);
			if($query){
			return true;
			}

  	}
 

  }



     

    $golden = new DataContent();
    if(isset($_POST["add_profile"])){

    $categories= $_POST['category'];
	 
     $cat="";
     foreach($categories as $category) {
          $cat .= $category." ";
     }

     // echo $cat;
     // exit();

      $MyProfile = array(
       
	    "cover_photo" => $_FILES['cover_photo']['name'],//$_POST['cover_photo'],
		"gallery_image" => $_FILES['gallery_image']['name'],
		"attachment" =>$_FILES['attachment']['name'],
		"video_url" => $_POST['video_url'],
		"service_perform"=> $_POST['service_perform'],
		"face_book"=> $_POST['face_book'],
		"twitter"=> $_POST['twitter'],
		"linkedin"=> $_POST['linkedin'],
		"pinterest"=> $_POST['pinterest'],
		"google"=> $_POST['google'],
		"instagram"=> $_POST['instagram'],

		"descripiton"=> $_POST['descripiton'],
		"process_radio"=> $_POST['process_radio'],
		"avalability_radio"=> $_POST['avalability_radio'],
		"region_radio"=> $_POST['region_radio'],
		"charge_radio"=> $_POST['charge_radio'],
		"automatic_radio"=> $_POST['automatic_radio'],
		"staff_radio"=> $_POST['staff_radio'],
	    "category"=>$cat
	
      );

      if($golden->profile_insertion("provider_profile",$MyProfile)){
      	 ?>
        echo"<script>alert('New record has created successfully!');
               window.location.href=('company-profile-settings.php');
               exit();
           </script>";
        <?php
      }
      
    }
?>	