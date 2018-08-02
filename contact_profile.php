<?php

 include("config.php");
 if($_POST){
    $land_line=trim($_POST['land_line']);
    $mobile=(int)$_POST['mobile'];
	$email_address=trim($_POST['email_address']);
	$skype=trim($_POST['skype']);
	$website=trim($_POST['website']);

	try{
		$sql='INSERT INTO contact_profile(land_line,mobile,email_address,skype,website) VALUES
		(:land_line,:mobile,:email_address,:skype,:website)';
		$stmt=$connect->prepare($sql);
		$stmt->bindParam(":land_line",$land_line);
		$stmt->bindParam(":mobile",$mobile);
		$stmt->bindParam("email_address",$email_address);
		$stmt->bindParam(":skype",$skype);
		$stmt->bindParam(":website",$website);
		$stmt->execute();
		if($stmt->rowCount()){
		  ?>
        echo"<script>alert('New record has created successfully!');
               window.location.href=('company-profile-settings.php');
               exit();
        </script>";
        <?php
			exit();
		}else{
	     ?>
        echo"<script>alert('Is not successfully!');
               window.location.href=('company-profile-settings.php');
               exit();
        </script>";
        <?php
		}
	}catch(Exception $e){
			echo "Error ".$e->getMessage();
			exit();
		}
 }else{
 	  header("Location:company-profile-settings.php?status=fail_create");
 	  exit();
 }

?>