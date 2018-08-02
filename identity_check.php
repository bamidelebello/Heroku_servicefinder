<?php  ob_start(); ?>

<?php include("header/htmlheader.php");
?>
<body>

<div class="company-branches">
    <div class="new-branch-button-div">
    
<!-- <button class="new-branch-button" data-target=".add-new-branch-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD NEW BRANCH</button> -->
    </div>

<section class="company-setting-section">
<!-- Add new Region modal -->
<div class="modal identity-check-modal fade open in" tabindex="-1" role="dialog" aria-labelledby="" style="display: block; background: rgba(0, 0, 0, 0.3);">
    	<div class="modal-dialog" role="document">
  					<form action="" method="post" enctype="multipart/form-data">
				    <div class="modal-content">
				    	<div class="modal-header">
				    <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    	<a href="company-profile-settings.php"><span class="model-title">UPLOAD IDENTITY PROOF</span></a>	
				    	</div>
				    	<div class="modal-body">
				    		<div class="identity-dropzone">
				    			<p>Drop files here (Valid tunde Formats: doc,docx,pdf,xls,xlsx,rtf,txt,ppt,pptx,jpg,jpeg,png)</p>
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
</div>
</section>


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

<?php

    include("config.php");
 if(isset($_FILES['identity_file'])){

    // $identity_file=$_FILES['identity_file'];

    // var_dump($identity_file);

    $user_name=$_SESSION['user_name'];
    $name_array=$_FILES['identity_file']['name'];
    $tmp_name_array=$_FILES['identity_file']['tmp_name'];
    $type_array=$_FILES['identity_file']['type'];
    $size_array=$_FILES['identity_file']['size'];
    // $error_array=$_FILES['identity_file']['error'];
     

    	$filetype ='';
    for($i=0; $i < count($tmp_name_array); $i++){
    	if ((strpos($type_array[$i], 'image') === false)) {
    		echo"<script>alert('Select valid file please!')</script>";
    		exit();
    	}
    	//test for file type and set jpg for image file else doc for text file
    	$filetype = (strpos($type_array[$i], 'image') !== false)? ".jpg" : ".doc";

  //   	if (strpos($type_array[$i], 'image') !== false) {
  //   		$filetype = ".jpg";
		// }
		// else if(strpos($type_array[$i], 'text') !== false){
		// 	$filetype = ".doc";
		// }
		// else{
		// 	echo "select valid file please.";
		// 	exit();
		// }
    	
    move_uploaded_file($tmp_name_array[$i], "identityimg/".$user_name.$i.$filetype);
    }

    try{

     $query="INSERT INTO provider_profile(identity_file)VALUES(:identity_file)";
      $stmt=$connect->prepare($query);
      $stmt->bindParam(":identity_file",$name_array);
      $stmt->execute();
       if($stmt->rowCount()){
         ?>
        echo"<script>alert('New record has created successfully!');
               window.location.href=('company-profile-settings.php');
               exit();
        </script>";
        <?php
       }else{
       	   ?>
        echo"<script>alert('New record hasnot created successfully!');
               window.location.href=('company-profile-settings.php');
               exit();
        </script>";
        <?php
       }
    
    }catch(Exception $e){

    	echo "Error ".$e->getMessage();
    }

}
    // header("Location:company-profile-settings.php");
    // exit();

?>
