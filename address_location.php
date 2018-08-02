<?php
 include("config.php");

if($_POST){

  try{

		$address=$_POST['address'];
		$area=$_POST['area'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$postal_code=$_POST['postal_code'];
		$country=$_POST['country'];
		$longitude=$_POST['longitude'];
		$latitude=$_POST['latitude'];

		$sql="INSERT INTO address_location(address,area,city,state,postal_code,country,longitude,latitude)VALUES(:address,:area,:city,:state,:postal_code,:country,:longitude,:latitude)";
		 $stmt=$connect->prepare($sql);
		 $stmt->bindParam(":address",$address);
		 $stmt->bindParam(":area",$area);
		 $stmt->bindParam(":city",$city);
		 $stmt->bindParam(":state",$state);
		 $stmt->bindParam(":postal_code",$postal_code);
		 $stmt->bindParam(":country",$country);
		 $stmt->bindParam(":longitude",$longitude);
		 $stmt->bindParam(":latitude",$latitude);
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
        echo"<script>alert('New record has not created successfully!');
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