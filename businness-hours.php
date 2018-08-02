  <?php include("header/htmlheader.php"); ?>

      <?php include("header/header.php"); ?> 
<body>



	<section class="company-setting-section">

	 <?php include("content/tab-menu.php") ?>

		<section class="settings-tab-content tab-content">

			<section role="tabpanel" class="tab-pane fade in active" id="bussiness-hours">
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
								<form method="POST" action="action1.php" >
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="from_monday">
										<option></option>
									  	<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>To</label><br>
									<select class="selectpicker" name="to_monday">
										<option></option>
									  	<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-monday">
									<label for="hour-mode-monday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" name="add_monday" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
								</form>
							</div>
               



							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-tuesday">
								<form method="POST" action="action1.php"> 
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="bussness_tuesday1">
										<option></option>
									    <option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="bussness_tuesday2">
										<option></option>
										<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-tuesday">
									<label for="hour-mode-tuesday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" name="add_tuesday" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
								</form>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-wednesday">
							<form method="POST" action="action1.php">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="bussiness_wednessday1">
										<option></option>
										<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker"  name="bussiness_wednessday2">
										<option></option>
									  	<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-wednesday">
									<label for="hour-mode-wednesday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" name="add_wednessday" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</form>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-thursday">
								<form method="POST" action="action1.php">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="bussiness_thursday1">
										<option></option>
									    <option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="bussiness_thursday2">
										<option></option>
									 	<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-thursday">
									<label for="hour-mode-thursday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" name="add_thursday" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
							</form>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-friday">
								<form method="POST" action="action1.php">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="bussiness_friday1">
									  	<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>To</label><br>
									<select class="selectpicker" name="bussiness_friday2">
										<option></option>
										<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-friday">
									<label for="hour-mode-friday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" name="add_friday" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
								</form>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-saturday">
					      <form method="POST" action="action1.php">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="bussinese_saturday1">
										<option></option>
									   <option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>To</label><br>
									<select class="selectpicker" name="bussinese_saturday2">
										<option></option>
									  	<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-saturday">
									<label for="hour-mode-saturday"></label>
									<span>OFF</span>
								</div><br>
								<button data-toggle="modal" data-target=".submit-response-modal" name="add_saturday">Submit</button>
								<div style="clear: both;"></div>
							</form>
							</div>
                    
							<div role="tabpanel" class="tab-pane fade" id="bussiness-hours-sunday">
								   <form method="POST" action="action1.php">
								<div class="bussiness-duration-form">
									<label>FROM</label><br>
									<select class="selectpicker" name="bussiness_sunday1">
										<option></option>
										<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div class="bussiness-duration-form">
									<label>TO</label><br>
									<select class="selectpicker" name="bussiness_sunday2">
										<option></option>
									  	<option>1:00</option>
									  	<option>1:30</option>
									  	<option>2:00</option>
									  	<option>2:30</option>
									  	<option>3:00</option>
									  	<option>3:30</option>
									  	<option>4:00</option>
									    <option>4:30</option>
									  	<option>5:00</option>
									  	<option>5:30</option>
									  	<option>6:00</option>
									  	<option>6:30</option>
									  	<option>7:00</option>
									  	<option>7:30</option>
									  	<option>8:00</option>
									  	<option>8:30</option>
									  	<option>9:00</option>
									  	<option>9:30</option>
									  	<option>10:00</option>
									  	<option>10:30</option>
									  	<option>11:00</option>
									   <option>11:30</option>
									  	<option>12:00</option>
									    <option>12:30</option>
									</select>
								</div>
								<div style="clear: both;"></div><br>
								<div class="hour-mode-switch">
									<input type="checkbox" name="" id="hour-mode-sunday">
									<label for="hour-mode-sunday"></label>
									<span>OFF</span>
								</div><br>
					       <button data-toggle="modal" name="sunday_submit" data-target=".submit-response-modal">Submit</button>
								<div style="clear: both;"></div>
								  </form>
							</div>
                         
						</div>
						<div style="clear: both;"></div>
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


