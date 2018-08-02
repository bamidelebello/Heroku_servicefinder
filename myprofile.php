<?php

 include("config.php");
if(isset($_POST['about_me'])){

   // var_dump($_POST);

	//$image_profile=$_POST['image_profile'];
	$company_name=$_POST['company_name'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $tagline=$_POST['tagline'];
    $biography=$_POST['biography'];

       $user_name=$_SESSION['user_name'];
       $image2=$_FILES['image_profile']['name'];
       $temp_dir2=$_FILES['image_profile']['tmp_name'];
       $imageSize=$_FILES['image_profile']['size'];


       $upload_dir2='imgmyprofile/';
       $upimg=strtolower(pathinfo($image2,PATHINFO_EXTENSION));
       $valid_extensions=array('jpeg','jpg','png','gif','pdf');
       $image_profile=$user_name."gallery".".".$upimg;
       move_uploaded_file($temp_dir2,$upload_dir2.$image_profile);

    try{
       $sql="INSERT INTO myprofile(image_profile,company_name,first_name,last_name,tagline,biography)VALUES(:image_profile,:company_name,:first_name,:last_name,:tagline,:biography)";
		 $stmt=$connect->prepare($sql);
		 $stmt->bindParam(":image_profile",$image_profile);
		  $stmt->bindParam(":first_name",$first_name);
		   $stmt->bindParam(":company_name",$company_name);
		    $stmt->bindParam(":last_name",$last_name);
		     $stmt->bindParam(":tagline",$tagline);
		      $stmt->bindParam(":biography",$biography);
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
        echo"<script>alert('It Not successfully ok!');
               window.location.href=('company-profile-settings.php');
               exit();
        </script>";
        <?php
         }
    }catch(Exception $e){

    	echo "Error ".$e->getMessage();
    	 exit();

    }



 }


?>