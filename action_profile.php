<?php


    include("config.php");
 if(is_array($_FILES)){

    // $identity_file=$_FILES['identity_file'];

    // var_dump($identity_file);
    $user_name=$_SESSION['user_name'];
    $name_array=$_FILES['identity_file']['name'];
    $tmp_name_array=$_FILES['identity_file']['tmp_name'];
    $type_array=$_FILES['identity_file']['type'];
    $size_array=$_FILES['identity_file']['size'];
    $error_array=$_FILES['identity_file']['error'];

    for($i=0; i < count($tmp_name_array); $i++){
       move_uploaded_file($tmp_name_array[$i], "identityimg/".$name_array[$i]."<br>"."identity".".".$user_name);
    }

    try{
     $query="INSERT INTO provider_profile(identity_file)VALUES(:identity_file)";
      $stmt=$connect->prepare($query);
       $stmt->bindParam(":identity_file",$identity_file);
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

?>
