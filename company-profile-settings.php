<?php  ob_start(); ?>
<?php

   require 'config.php';
	if(empty($_SESSION['user_name']))
		header('Location: LoginPage.php');
?>
    

 <?php 
  include("header/htmlheader.php");
     include("extra.php");
 ?>
<body>

  <?php include("header/header.php"); ?>


   <section class="company-setting-section">

       <?php include("content/tab-menu.php"); ?>
      
     
       <?php include("content/tab-content.php"); ?>

		<section style="clear: both;"></section>
	</section>


	  <?php include('footer/footer.php'); ?>

	<!-- <div class="page-loader"><i class="fa fa-spinner fa-pulse fa-lg"></i></div>  -->
 
	<!-- Scripts -->
	<script type="text/javascript" src="./Assets/JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap-select.js"></script>
	<script type="text/javascript" src="./Assets/JS/owl.carousel.js"></script>
	<script type="text/javascript" src="./Assets/SummerNote/summernote.js"></script>
	<!-- Map Script -->
	<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl8dMQnzkz9yxw17yL_YwXGZGyXZp2Ip8&callback=initMap" type="text/javascript"></script> -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnk3OdPpBdTQdu62Otpu-7UEZQdudPCu8&callback=initialize&libraries=places" type="text/javascript"></script>
	<!-- end map script -->

</body>
</html>

