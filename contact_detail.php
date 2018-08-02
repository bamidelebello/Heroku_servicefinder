<?php

//var_dump($_POST);


    include("config.php");
   if(isset($_POST['secret']) && ($_POST['secret'] == 'contactdetail')){
     
      try{


    $land_line=$_POST['land_line'];
    $mobile=$_POST['mobile'];
    $website_address=$_POST['email_address'];
    $skype=$_POST['skype'];
    $website=$_POST['website'];
    $fax=$_POST['fax'];

       $sql="INSERT INTO  contact_detail(land_line,mobile,email_address,skype,website,fax) VALUES(:land_line,:mobile,:email_address,:skype,:website,:fax)";
            $stmt=$connect->prepare($sql);
            $data=['land_line'=>$land_line,'mobile'=>$mobile,'email_address'=>$email_address, 'skype'=>$skype, 'website'=>$website,'fax'=>$fax];
            $result=$stmt->execute($data);
           if($result->rowCount()){
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
        echo "Error ".$e->getskype();
        exit();
      }
           
            
      }

?>