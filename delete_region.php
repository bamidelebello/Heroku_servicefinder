<?php

include('config.php');


if(isset($_GET['id'])){


     try{
        // DELETE FROM our_region WHERE id=:id
    	 $sql="DELETE FROM our_region WHERE id=:id";
    	 $stmt=$connect->prepare($sql);
    	 $stmt->bindParam(":id",$_GET['id'],PDO::PARAM_INT);
    	 $stmt->execute();
      if($stmt->rowCount()){
      	   ?>
        echo"<script>alert('region has deleted successfully!');
               window.location.href=('our-regions.php');
               exit();
           </script>";
        <?php
      	    exit();
      }	 
    }catch(Exception $e){

     echo "Error ".$e->getMessage();
    }

 }




?>