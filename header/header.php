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
	    					<a href="company-profile-settings.php">
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

                        $user_name=$_SESSION['user_name'];
						  echo $user_name;
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
	    						&nbsp: Logout
	    					</a>
	    				</li>
	  				</ul>
				</span>
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
				<a href="#">CONTACT US</a>
			</nav>
		</div>
	</header>