<?php


   include("config.php");

if(isset($_POST['update_region'])){

   $id =(int) $_POST['id'];
   $add_region=trim($_POST['add_region']);
   $status= trim($_POST['status']);
    
   try{

      $sql="UPDATE our_region SET add_region=:add_region,status=:status WHERE id=:id"; 
      $stmt=$connect->prepare($sql);
      $stmt->bindParam(":id",$id);
      $stmt->bindParam(":add_region",$add_region);
      $stmt->bindParam(":status",$status);
      $stmt->execute();
      if($stmt->rowCount()){
        header("Location:our-regions.php?id=".$id."&status=updated");
        exit();
      }
      header("Location:our-regions.php?id=".$id."&status=fail_update");
      exit();
   }catch(Exception $e){
       echo "Error ".$e->getMessage();
       exit();
   }
}

?>