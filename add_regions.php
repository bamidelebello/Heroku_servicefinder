<?php 

// var_dump($_POST);

include("config.php");

if($_POST){
   $add_region=$_POST['add_region'];
   $status=$_POST['status'];
  
   try{
 $sql='INSERT INTO our_region(add_region,status) VALUES(:add_region,:status)';  
      $stmt=$connect->prepare($sql);
      $stmt->bindParam(":add_region",$add_region);
      $stmt->bindParam(":status",$status);
      $stmt->execute();
      if($stmt->rowCount()){
               ?>
        echo"<script>alert('New record has created successfully!');
               window.location.href=('our-regions.php');
               exit();
        </script>";
        <?php
      }else{
             ?>
        echo"<script>alert('New record hasnot created successfully!');
               window.location.href=('our-regions.php');
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