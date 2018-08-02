 <?php 
  include("config.php");

    $id=$_GET['id'] ? intval($_GET['id']) : 0;

  try{
    $sql="SELECT * FROM team_member WHERE id=:id LIMIT 1";
    $stmt=$connect->prepare($sql);
    $stmt->bindParam(":id",$id,PDO::PARAM_INT);
    $stmt->execute(); 
  }catch(Exception $e){
    echo "Error ".$e->getMessage();
    exit();
  }
  if(!$stmt->rowCount()){
      header("Location: index.php");
      exit();
  }
  $members=$stmt->fetch();
//   var_dump($product);
//   exit();
 
 ?>


<?php include("header/htmlheader.php");?>
<body>
<div class="company-branches">
    <div class="new-branch-button-div">

<section class="company-setting-section">
<!-- Add new Region modal -->
<div class="modal add-new-branch-modal fade open in" tabindex="-1" role="dialog" aria-labelledby="" style="display: block; background: rgba(0, 0, 0, 0.3);">
    <div class="modal-dialog" role="document" >
    <div class="modal-content">
        <div class="modal-header">
          <a href="team-member.php"><button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button></a>
            <h4 class="model-title">ADD NEW BRANCH</h4>
        </div>

		    	<form action="" method="POST" enctype="multipart/form-data">
				    	<div class="modal-body new-branch-modal-body">
                       <input type="hidden" name="id" value="<?= $members['id']?>">
				    		<input type="text" name="full_name" value="<?= $members['full_name']  ?>" placeholder="Full Name" class="member-fullname-input">
				    		<input type="text" name="email" value="<?= $members['email']  ?>" placeholder="Member email">
				    		<input type="text" name="member_phone" value="<?= $members['member_phone']  ?>" placeholder="Member Phone no." class="member-phone-number-input">
				    		

							<div class="contact-setting-body service-to-perform">
								<div class="radio-button">
									<input type="radio" value="admin" name="radio1" value="<?= $members['radio1']  ?>" id="provider-location" checked>
									<label for="provider-location">Admin</label>
								</div>
								<div class="radio-button">
									<input type="radio" value="user" name="radio1" value="<?= $members['radio1']  ?>" id="customer-location" >
									<label for="customer-location">User</label>
								</div>
								<div style="clear: both;"></div>
							</div>
						
				   
				    	</div>
				    	<div class="modal-footer">
				    		<button data-dismiss="modal" aria-label="Close">Cancel</button>
				    		<button name="add_update">Update</button>
				    	</div>
				    	</form>

    </div>
    </div>
</div>
</section>
</div>
	<!-- Scripts -->
	<script type="text/javascript" src="./Assets/JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap-select.js"></script>
	<script type="text/javascript" src="./Assets/JS/owl.carousel.js"></script>
	<script type="text/javascript" src="./Assets/SummerNote/summernote.js"></script>
	<!-- Map Script -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl8dMQnzkz9yxw17yL_YwXGZGyXZp2Ip8&callback=initMap" type="text/javascript"></script>
	<!-- end map script -->
	<script type="text/javascript" src="./Assets/JS/script.js"></script>
	<script type="text/javascript">
		$('.company-settings-tab a').click(function() {
			location.href = $(this).attr('href');
		});
	</script>
</body>
</html>

<?php

 // var_dump($_POST);
if($_POST){
   $id =(int) $_POST['id'];
   $full_name=trim($_POST['full_name']);
   $email= trim($_POST['email']);
   $member_phone=(float)$_POST['member_phone'];
   $radio1=(int)$_POST['radio1'];

    
   try{
 $sql='UPDATE team_member SET full_name=:full_name,email=:email,member_phone=:member_phone, radio1=:radio1 WHERE id=:id';  
      $stmt=$connect->prepare($sql);
      $stmt->bindParam(":full_name",$full_name);
      $stmt->bindParam(":email",$email);
      $stmt->bindParam(":member_phone",$member_phone);
      $stmt->bindParam(":radio1",$radio1);
      $stmt->bindParam(":id",$id);
      $stmt->execute();
      if($stmt->rowCount()){
        header("Location:team-member.php?id=".$id."&status=updated");
        exit();
      }else{
       header("Location:edit.php?id=".$id."&status=fail_update");
     exit();
    }
    
   }catch(Exception $e){
       echo "Error ".$e->getMessage();
       exit();
   }
}


?>