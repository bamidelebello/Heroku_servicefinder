<?php

 include("config.php");



if(isset($_POST['service_add'])){

		$service_name = $_POST['service_name'];
		$cost_type = $_POST['cost_type'];
		$service_cost =$_POST['service_cost'];
		$selectpicker=$_POST['selectpicker'];
		$summer_note=$_POST['summer_note'];
	
     $sql="INSERT INTO  service(service_name,cost_type,service_cost,selectpicker,summer_note)VALUES('{$service_name}','{$cost_type}','{$service_cost}','{$selectpicker}','{$summer_note}')";
         $stmt=$connect->prepare($sql);
         $stmt->execute();
         exit();
}


  if(isset($_GET['delete'])){

    $id =$_GET['id'];
  	 $sql="DELETE FROM service WHERE id=".$id;
  	 $stmt=$connect->prepare($sql);
  	 $stmt->execute();
  	 header("Location:my-services.php");
  	 exit();
  }





    	












?>