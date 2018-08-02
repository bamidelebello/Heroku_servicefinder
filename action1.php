<?php



//To check for input values
    include("config.php");

 if(isset($_POST['sunday_submit']))
   {
      

      $bussiness_sunday1=$_POST['bussiness_sunday1'];
      $bussiness_sunday2=$_POST['bussiness_sunday2'];
 
       try{
  $sql="INSERT INTO sunday(bussiness_sunday1,bussiness_sunday2)VALUES(:bussiness_sunday1,:bussiness_sunday2)";
	        $stmt=$connect->prepare($sql);
	        $stmt->bindParam(":bussiness_sunday1",$bussiness_sunday1);
	        $stmt->bindParam(":bussiness_sunday2",$bussiness_sunday2);
            $stmt->execute();
       if($stmt->rowCount()){

       	   ?>
        echo"<script>alert('Sunday record has created successfully!');
               window.location.href=('businness-hours.php');
               exit();
        </script>";
        <?php

        }else{

		?>
		  echo "<script>alert('Is not successfully!');
		         window.location.href=('businness-hours.php');
		         exit();
		  </script>";
		  <?php

		}
      }catch(Exception $e){
      echo "Error".$e->getMessage();
      exit();
     }
  }


  if(isset($_POST['add_saturday'])){

      $bussinese_saturday1=$_POST['bussinese_saturday1'];
      $bussinese_saturday2=$_POST['bussinese_saturday2'];

         try{
  $sql="INSERT INTO saturday(bussinese_saturday1,bussinese_saturday2)VALUES(:bussinese_saturday1,:bussinese_saturday2)";
	        $stmt=$connect->prepare($sql);
	        $stmt->bindParam(":bussinese_saturday1",$bussinese_saturday1);
	        $stmt->bindParam(":bussinese_saturday2",$bussinese_saturday2);
            $stmt->execute();
       if($stmt->rowCount()){

       	   ?>
        echo"<script>alert('saturday record has created successfully!'); 
               window.location.href=('businness-hours.php');
               exit();
        </script>";
        <?php

        }else{

		?>
		  echo "<script>alert('Is not successfully!');
		         window.location.href=('businness-hours.php');
		         exit();
		  </script>";
		  <?php

		}
      }catch(Exception $e){
      echo "Error".$e->getMessage();
      exit();
     }

  }



  if(isset($_POST['add_friday'])){

     $bussiness_friday1=$_POST['bussiness_friday1'];
     $bussiness_friday2=$_POST['bussiness_friday2'];

              try{
  $sql="INSERT INTO friday(bussiness_friday1,bussiness_friday2)VALUES(:bussiness_friday1,:bussiness_friday2)";
	        $stmt=$connect->prepare($sql);
	        $stmt->bindParam(":bussiness_friday1",$bussiness_friday1);
	        $stmt->bindParam(":bussiness_friday2",$bussiness_friday2);
            $stmt->execute();
       if($stmt->rowCount()){

       	   ?>
        echo"<script>alert('Friday record has created successfully!'); 
               window.location.href=('businness-hours.php');
               exit();
        </script>";
        <?php

        }else{

		?>
		  echo "<script>alert('Is not successfully!');
		         window.location.href=('businness-hours.php');
		         exit();
		  </script>";
		  <?php

		}
      }catch(Exception $e){
      echo "Error".$e->getMessage();
      exit();
     }
  }

  if(isset($_POST['add_thursday'])){

  	$bussiness_thursday1=$_POST['bussiness_thursday1'];
  	$bussiness_thursday2=$_POST['bussiness_thursday2'];



              try{
  $sql="INSERT INTO thursday(bussiness_thursday1,bussiness_thursday2)VALUES(:bussiness_thursday1,:bussiness_thursday2)";
	        $stmt=$connect->prepare($sql);
	        $stmt->bindParam(":bussiness_thursday1",$bussiness_thursday1);
	        $stmt->bindParam(":bussiness_thursday2",$bussiness_thursday2);
            $stmt->execute();
       if($stmt->rowCount()){

       	   ?>
        echo"<script>alert('Thursday record has created successfully!'); 
               window.location.href=('businness-hours.php');
               exit();
        </script>";
        <?php

        }else{

		?>
		  echo "<script>alert('Is not successfully!');
		         window.location.href=('businness-hours.php');
		         exit();
		  </script>";
		  <?php

		}
      }catch(Exception $e){
      echo "Error".$e->getMessage();
      exit();
     }
  }

  if(isset($_POST['add_wednessday'])){

  	$bussiness_wednessday1=$_POST['bussiness_wednessday1'];
  	$bussiness_wednessday2=$_POST['bussiness_wednessday2'];


  	     try{
  $sql="INSERT INTO wednessday(bussiness_wednessday1,bussiness_wednessday2)VALUES(:bussiness_wednessday1,:bussiness_wednessday2)";
	        $stmt=$connect->prepare($sql);
	        $stmt->bindParam(":bussiness_wednessday1",$bussiness_wednessday1);
	        $stmt->bindParam(":bussiness_wednessday2",$bussiness_wednessday2);
            $stmt->execute();
       if($stmt->rowCount()){

       	   ?>
        echo"<script>alert('Wednessday record has created successfully!'); 
               window.location.href=('businness-hours.php');
               exit();
        </script>";
        <?php

        }else{

		?>
		  echo "<script>alert('Is not successfully!');
		         window.location.href=('businness-hours.php');
		         exit();
		  </script>";
		  <?php

		}
      }catch(Exception $e){
      echo "Error".$e->getMessage();
      exit();
     }
  }



 if(isset($_POST['add_tuesday'])){

 	$bussness_tuesday1=$_POST['bussness_tuesday1'];
	$bussness_tuesday2=$_POST['bussness_tuesday2'];

	 try{
  $sql="INSERT INTO tuesday(bussness_tuesday1,bussness_tuesday2)VALUES(:bussness_tuesday1,:bussness_tuesday2)";
	        $stmt=$connect->prepare($sql);
	        $stmt->bindParam(":bussness_tuesday1",$bussness_tuesday1);
	        $stmt->bindParam(":bussness_tuesday2",$bussness_tuesday2);
            $stmt->execute();
       if($stmt->rowCount()){

       	   ?>
        echo"<script>alert('Tuesday record has created successfully!'); 
               window.location.href=('businness-hours.php');
               exit();
        </script>";
        <?php

        }else{

		?>
		  echo "<script>alert('Is not successfully!');
		         window.location.href=('businness-hours.php');
		         exit();
		  </script>";
		  <?php

		}
      }catch(Exception $e){
      echo "Error".$e->getMessage();
      exit();
     }
 }


 if(isset($_POST['add_monday'])){


 	$from_monday=$_POST['from_monday'];
    $to_monday=$_POST['to_monday'];

    	 try{
  $sql="INSERT INTO monday(from_monday,to_monday)VALUES(:from_monday,:to_monday)";
	        $stmt=$connect->prepare($sql);
	        $stmt->bindParam(":from_monday",$from_monday);
	        $stmt->bindParam(":to_monday",$to_monday);
            $stmt->execute();
       if($stmt->rowCount()){

       	   ?>
        echo"<script>alert('Monsday record has created successfully!'); 
               window.location.href=('businness-hours.php');
               exit();
        </script>";
        <?php

        }else{

		?>
		  echo "<script>alert('Is not successfully!');
		         window.location.href=('businness-hours.php');
		         exit();
		  </script>";
		  <?php

		}
      }catch(Exception $e){
      echo "Error".$e->getMessage();
      exit();
     }
 }
?>