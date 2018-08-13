<?php 

   include('config.php');
    include("extra.php");




     if(isset($_POST['login'])){
       $errMeg='';

       $user_name=$_POST['user_name'];
       $password=$_POST['password']; 

       if($user_name == '')
       	 $errMeg='Enter User_Name';
       if($password == '')
       	$errMeg='Enter Password';

       if($errMeg == ''){

        try{

        	$stmt=$connect->prepare('SELECT auth_id,user_name,password FROM authenticate WHERE user_name=:user_name');
        	$stmt->execute(array('user_name' =>$user_name));
        	$data=$stmt->fetch(PDO::FETCH_ASSOC);
            
        	if($data == false){
        		$errMeg ='User $user_name Not Found';
        	}else{
			if($password == $data['password']) {
				$_SESSION['username'] = $data['username'];
				//$_SESSION['password'] = $data['password'];
				 
          	?>
	    <script type="text/javascript">
		window.location.href = 'LoginPage.php';
		exit();
		</script>
				
		<?php

			}
			else
				$errMsg = 'Password not match.';
		}
        	 

        }catch(PDOException $e){

          $errMeg= $e->getMessage();

        }
        
       }
  
   }
?>


  

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
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/main.css">

	<!-- gofind@wifi_password -->
</head>
<body>
	<header>
		<div class="contact-header contact-header-mobile ">
			<ul style="float: right;">
				<li>
					<i class="fa fa-envelope"></i>
					<span><a href="company-profile-settings.php">info@service-finder.biz</a></span>
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
						 <?php 

					      $user_name='';
                         $_SESSION['user_name'] = $data['user_name'];
					      echo ($_SESSION['user_name']);
                       

                          
					    ?>
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
	    						&nbsp;loggout 
	    					</a>
	    				</li>
	  				</ul>
				</span>
				 <?php 
          

                 // $user_name= $_SESSION['user_name'];

                       //echo $user_name;
               if(isset($_SESSION['ÏsProviderLoggedIn'])){ ?>

               <a href="logout.php" class="fa fa-user"><span>&nbsp;Logout </span></a>

                        <?php

                      }else{
                      	?>

      <a href="" data-toggle="modal" data-target=".bs-example-modal-sm" class="fa fa-user"><span>&nbsp;Login </span></a>
	 <a href="" data-toggle="modal" data-target=".bs-example-modal-lg" class="fa fa-plus"><span>&nbsp;Sign up</span></a>
                      <?php }


                  ?>
				
			</nav>
			<div style="clear: both;"></div>
		</div>
		<div class="nav-header">
			<div class="logo-div">
				<a href="company-profile-settings.php">
					<img src="./Assets/Images/logo-1.png">	
				</a>
			</div>	
			<nav>
				<a href="#">HOME</a>
				<a href="#">SUBMIT JOB</a>
				
				<a href="#">CONTACT US</a>
			</nav>
			<button id="toggle-mobile-nav"><i class="fa fa-bars"></i></button>
			<div style="clear: both;"></div>
		</div>
		<div class="mobile-nav">
			<nav>
				<a href="index.php">HOME</a>
				<a href="#">SUBMIT JOB</a>				
               
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">SIGNUP</a>
				<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">LOGIN</a>
				<a href="#">CONTACT US</a>
			</nav>
		</div>
	</header>


  <!-- when the customer is already loggin should not display register form -->
              <!-- instead should display logout  -->
           
             
	<section class="home-section">
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



           <!-- i am working to this now -->
			<!-- Login modal -->
	          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  				<div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">SIGN IN</h4>
				    	</div>
				    	<div class="tab-content">
          	<?php
				if(isset($errMeg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMeg.'</div>';
				}
			?>
							<div class="form-login">
					 <form method="POST"  action="">		
				    			<div class="login-username">
				    				<i class="fa fa-user fa-lg"></i>
    <input type="text" name="user_name" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" placeholder="Username">
				    			</div>
				    			<div class="login-username">
				    				<i class="fa fa-lock fa-lg"></i>
				    				<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" placeholder="Password">
				    			</div>
				    			<button type="submit" name="login">Submit</button>
				    			<a href="#">Dont have an account?</a>
				    			<a href="#">Forgot Password</a><br>
				    	 </form>
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
		</div>
		<div class="map-section">
			<div class="map-section2">
				<div id="gmap-wrapper" class="gmap-home">
					<div id="gmap-controls-wrapper">
						<div id="gmapzoomplus">
							<i class="fa fa-plus"></i>
						</div>
						<div id="gmapzoomminus">
							<i class="fa fa-minus"></i>
						</div>
						<div id="gmap-full">
							<i class="fa fa-arrows-alt"></i>
						</div>
						<div id="gmap-prev">
							<i class="fa fa-arrow-left"></i>
						</div>
						<div id="gmap-next">
							<i class="fa fa-arrow-right"></i>
						</div>
					</div>
					<div id="map" class="map2" style="position: static;"></div>
				</div>
			</div>
			<div class="find-bar">
				<div class="search-form">
					<form method="POST" action="index.php">
						<input type="hidden" name="">

						<div class="search-col search-col0" style="margin-right: 1%;">
							<div class="type-address">
						<input type="text" placeholder="keyword" name="keyword" id="keyword" class="form-control">
							</div>
						</div>

						<div class="search-col search-col0" style="margin-right: 1%;">
							<div class="type-address">
								<input type="text" placeholder="Address" name="address" id="address" class="form-control">
							</div>

						</div>
					


						<div class="search-col search-col2" style="margin-right: 3%;">
  						<select class="selectpicker" data-live-search="true" data-live-search-placeholder="Search" data-header="Select Category">
  								<option>Select a Category</option>
  								<optgroup label="Picnic">
  							   <?php
								foreach ( $categories as $category) { 	?>
	  								<option data-tokens="ketchup mustard" 
	  								data-content="<img src='./Assets/Images/blog1.jpg'><span><?php echo $category ?></span>">
	  								</option>
	  							 <?php } ?>	 
							  </optgroup>
							</select>
						</div>
						<div class="search-col search-col2 search-col3" style="margin-right: 3%;">


  					<select class="selectpicker" data-live-search="true" data-live-search-placeholder="Search" data-header="Select Category">
  						<option>Select a category</option>
  						<optgroup label="Picnic">
  						    <?php
								foreach ( $robots as $robot) { 	?>
                      <option data-tokens="ketchup mustard" 
	  								data-content="<img src='./Assets/Images/blog1.jpg'><span><?php echo $robot ?></span>">
	  						</option>
					         <?php } ?>	 
	  					
							  </optgroup>
							</select>
						</div>
						<div class="search-col last-search-col">
  							<input type="submit" name='searchmany' value="Find Provider">
						</div>
						<div style="clear: both;"></div>
						  <H3class="big-success" id="result" style="color: red">skadk</H3>
					</form>
				</div>
			</div>
			<div class="map-loader">
				<i class="fa fa-spinner fa-pulse"></i>
			</div>
		</div>
		<div class="usage-section">
			<h3>HOW TO USE SERVICE FINDER</h3>
			<div class="below-usage-title"></div>
			<p class="below-usage-logo">Best Service Deals</p>
			<div class="service-content service-content1">
				<div class="first-service">
					<div class="divs">
						<div class="icon-box icon-box1">
							<img src="./Assets/Images/describe-1.png">
						</div>
					</div>
					<div class="icon-box-shadow">
						<img src="./Assets/Images/shadow.png">
					</div>
					<h4>SEARCH OUR LISTING</h4>
					<p>Use our filters on Location and Category to find the Provider you are looking for. Use his dashboard to get connected or make a direct booking.</p>
					<div class="step-number step-number1">1</div>
				</div>
			</div>	
			<!-- Second -->
			<div class="service-content service-content2">
				<div class="first-service">
					<div class="divs2">
						<div class="icon-box icon-box1">
							<img src="./Assets/Images/describe-1.png">
						</div>
					</div>
					<div class="icon-box-shadow">
						<img src="./Assets/Images/shadow.png">
					</div>
					<h4>SEARCH OUR LISTING</h4>
					<p>Use our filters on Location and Category to find the Provider you are looking for. Use his dashboard to get connected or make a direct booking.</p>
					<div class="step-number step-number2">2</div>
				</div>
			</div>
			<!-- Third -->
			<div class="service-content service-content3" style="margin-right: 0%;">
				<div class="first-service">
					<div class="divs3">
						<div class="icon-box icon-box1">
							<img src="./Assets/Images/describe-1.png">
						</div>
					</div>
					<div class="icon-box-shadow">
						<img src="./Assets/Images/shadow.png">
					</div>
					<h4>SEARCH OUR LISTING</h4>
					<p>Use our filters on Location and Category to find the Provider you are looking for. Use his dashboard to get connected or make a direct booking.</p>
					<div class="step-number step-number3">3</div>
				</div>
			</div>			
			<div style="clear: both;"></div>
		</div>
		
		<!-- Usage section Ended -->

		<div class="featured-providers">
			<h3>FEATURED PROVIDERS</h3>
			<div class="below-usage-title"></div>
			<p class="below-usage-logo">Best Service Deals</p>
			<div class="owl-carousel owl-theme">

				 <?php  

				 $sql="select * from provider";
		  	    $result=$connect->prepare($sql);
		         $result->execute();
				 $providers=$result->fetchAll(PDO::FETCH_ASSOC);

                         foreach ($providers as $row) {
                          ?>
                           <div class="item">
			    	<div class="provider-details">
						<div class="provider-image">
							<img src="./Assets/Images/banner_inner.jpg">
							<div class="provider-absolute">
								<i class="fa fa-map-marker"></i>
								<span>14th floor, South 1st Street, Williamsburg, Brooklyn, NY, United States</span><br><br>
								<a href="#" class="provider-link">Home Cleaning</a>
							</div>
						</div>
						<div class="provider-name">
							<h4><?php echo $row['company_name']; ?></h4><br>
							<P class="p1"><?php echo $row['biography']; ?></P><br>
							<p class="p2">DUSTLY CLEANING SERVICES</p>
							<div class="star-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
						<div class="provider-view">
							<a href="../Service-Finder/comapany_view/company-profile.php?providerName=<?php echo $row['company_name']; ?>">Full View&nbsp;<i class="fa fa-arrow-circle-o-right"></i></a>
							<a href="#">Add to Fav&nbsp;<i class="fa fa-heart"></i></a>
							<!-- <div style="clear: both;"></div> -->
						</div>
			    	</div>

						
</div>
						   <?php
			                }
					        ?> 
			   
						

			   
			</div>
		</div>
		
		<!-- Featured Provider Ended -->

		<div class="service-categories">
			<h3>SERVICE FINDER CATEGORIES</h3>
			<div class="below-usage-title"></div>
			<p class="below-usage-logo">Best Service Deals</p>
			<div class="service-category" style="background-image: url('./Assets/Images/dreamstime.jpg');">
				<a href="#">
					<div class="service-category-overlay">
						<span><i class="fa fa-user-plus"></i>&nbsp;&nbsp;(0)</span>
						<h4>AUTOMOTIVE</h4>
					</div>
				</a>
			</div>
			<div class="service-category" style="background-image: url('./Assets/Images/dreamstime.jpg');">
				<a href="#">
					<div class="service-category-overlay">
						<span><i class="fa fa-user-plus"></i>&nbsp;&nbsp;(0)</span>
						<h4>AUTOMOTIVE</h4>
					</div>
				</a>
			</div><div class="service-category" style="background-image: url('./Assets/Images/dreamstime.jpg');">
				<a href="#">
					<div class="service-category-overlay">
						<span><i class="fa fa-user-plus"></i>&nbsp;&nbsp;(0)</span>
						<h4>AUTOMOTIVE</h4>
					</div>
				</a>
			</div><div class="service-category" style="background-image: url('./Assets/Images/dreamstime.jpg');">
				<a href="#">
					<div class="service-category-overlay">
						<span><i class="fa fa-user-plus"></i>&nbsp;&nbsp;(0)</span>
						<h4>AUTOMOTIVE</h4>
					</div>
				</a>
			</div><div class="service-category" style="background-image: url('./Assets/Images/dreamstime.jpg');">
				<a href="#">
					<div class="service-category-overlay">
						<span><i class="fa fa-user-plus"></i>&nbsp;&nbsp;(0)</span>
						<h4>AUTOMOTIVE</h4>
					</div>
				</a>
			</div><div class="service-category" style="background-image: url('./Assets/Images/dreamstime.jpg');">
				<a href="#">
					<div class="service-category-overlay">
						<span><i class="fa fa-user-plus"></i>&nbsp;&nbsp;(0)</span>
						<h4>AUTOMOTIVE</h4>
					</div>
				</a>
			</div>
			<div style="clear: both;"></div><br><br>
			<a href="#" class="show-more"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Show more</a>
		</div>

		<!-- SERVICES CATEGORIES END -->

		<div class="moto-section">
			<h1>WHO'S ON SERVICE-FINDER.BIZ</h1>
			<div class="below-usage-title"></div>
			<p>We've Found Some Great Businesses. So Can You!</p><br><br>
			<p>What have you got to lose? For the customer this site is free, all you need to do is register. For suppliers the cost is minimal you’re in full control!</p><br>
			<a href="#">Sign Up</a>
		</div>

		<!-- MOTO ENDED -->

		<div class="services-provided">
			<h2>WHY USE SERVICE FINDER</h2>
			<div class="below-usage-title"></div>
			<p class="below-usage-logo">Best Service Deals</p>
			<div class="service-detail service-detail1">
				<div class="rounded-icon">
					<i class="fa fa-clock-o"></i>
				</div><br>
				<h4>SAVES YOU TIME</h4>
				<p>Service finder helps you live smarter, giving you time to focus on what’s most important.</p>
			</div>
			<div class="service-detail service-detail2">
				<div class="rounded-icon">
					<i class="fa fa-shield"></i>
				</div><br>
				<h4>SAVES YOU TIME</h4>
				<p>Service finder helps you live smarter, giving you time to focus on what’s most important.</p>
			</div>
			<div class="service-detail service-detail3">
				<div class="rounded-icon">
					<i class="fa fa-thumbs-up"></i>
				</div><br>
				<h4>SAVES YOU TIME</h4>
				<p>Service finder helps you live smarter, giving you time to focus on what’s most important.</p>
			</div>
			<div class="service-detail service-detail4">
				<div class="rounded-icon">
					<i class="fa fa-thumb-tack"></i>
				</div><br>
				<h4>SAVES YOU TIME</h4>
				<p>Service finder helps you live smarter, giving you time to focus on what’s most important.</p>
			</div>
			<div class="service-detail service-detail5">
				<div class="rounded-icon">
					<i class="fa fa-comments"></i>
				</div><br>
				<h4>SAVES YOU TIME</h4>
				<p>Service finder helps you live smarter, giving you time to focus on what’s most important.</p>
			</div>
			<div class="service-detail service-detail6">
				<div class="rounded-icon">
					<i class="fa fa-money"></i>
				</div><br>
				<h4>SAVES YOU TIME</h4>
				<p>Service finder helps you live smarter, giving you time to focus on what’s most important.</p>
			</div>
			<div style="clear: both;"></div>
		</div>


		<!-- WHY USE SERVICE END -->
		

		<div class="testimony-section">
			<h2>WHAT PEOPLE ARE SAYING</h2>
			<div class="below-usage-title"></div>
			<p>Feedback and recommendations are everything in business, we have the facility for customers to leave feedback on suppliers profiles so everyone can read of your good experiences.</p><br><br><br>
			<div class="testimony-carousel">
				<div class="owl-carousel owl-theme">
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
		            <div class="item">
		            	<div class="reviewer-image-outer">
		            		<div class="reviewer-image">
		            			<img src="./Assets/Images/testimony-pic.jpg">
		            		</div>
		            	</div>
		            	<div class="reviewers-review">
		            		<p>Being an owner of a small business myself, I understand that marketing costs and subscriptions to online directories can often mean lots of outlay for very little return, that’s why I have ensured Service Provider has lots of added value in terms of looks, accessibility and features. I believe that with that in mind and the fantastic pricing structure, Service Provider will prove to be very popular.</p>
		            		<strong>Bro Hameed</strong>
		            		<span>Designer</span>
		            	</div>
		            	<div style="clear: both;"></div>
		            </div>
          		</div>
			</div>
		</div>
	</section>



    <?php include_once('footer/footer.php'); ?>

   <script type="text/javascript" src="jqery.min.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap-select.js"></script>
	<script type="text/javascript" src="./Assets/JS/owl.carousel.js"></script>
	<script type="text/javascript" src="./Assets/SummerNote/summernote.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl8dMQnzkz9yxw17yL_YwXGZGyXZp2Ip8&callback=initMap" type="text/javascript"></script>
	<script type="text/javascript" src="./Assets/JS/script.js"></script>	

</body>
</html>