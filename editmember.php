<?php include("header/htmlheader.php");
   include("action_member.php");
?>
<body>
<div class="company-branches">
<section class="company-setting-section">
<!-- Add new Region modal -->
<div class="modal add-new-branch-modal fade open in" tabindex="-1" role="dialog" aria-labelledby="" style="display: block; background: rgba(0, 0, 0, 0.3);">
    <div class="modal-dialog" role="document" >
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            <h4 class="model-title"> <a href="team-member.php">ADD NEW MEMBER</a></h4>
        </div>
           <?php
            if (isset($_GET["update"])) {
                       //php 7
                        $id=$_GET["id"] ?? null;
                        $where =array("id"=>$id,);
              $row = $member->select_members("team_member",$where);
                 
                   ?>   
           <form action="action_member.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body new-branch-modal-body">
        
           <!--                <div class="team-member-image">
                                <img id="profile-image" src="./Assets/Images/no_img.jpg">
                                <span class="delete-profile-image" href="#" data-toggle="modal" data-target=".bs-example-modal-"><a href="team-member.php">x</a></span> 
                                <input type="file" name="member_image" id="chooseImage">
                                <label for="chooseImage">Select Image</label>
                            </div> -->
                   <!--    <input type="file" name="member_image" id="chooseImage"> -->
                     <tr>
                        <td><input type="hidden"  value="<?php echo $row['id'];?>"  name="id"></td>
                      </tr>
                            <br>
                            <input type="text" name="full_name" value="<?php echo $row["full_name"] ?>" placeholder="Full Name" class="member-fullname-input">
                            <input type="text" name="email" value="<?php echo $row["email"] ?>" placeholder="Member email">
                          
                       <input type="text" name="member_phone" value="<?php echo $row["member_phone"] ?>" placeholder="Member Phone no." class="member-phone-number-input">

                             <input type="text" name="description" value="<?php echo $row["description"] ?>" placeholder="Member description" class="member-phone-number-input">

                            <div class="contact-setting-body service-to-perform">
                                <div class="radio-button">
                                    <input type="radio" value="admin"  name="radio1" id="provider-location" checked>
                                    <label for="provider-location">Admin</label>
                                </div>
                                <div class="radio-button">
                                    <input type="radio" value="user" name="radio1" id="customer-location" >
                                    <label for="customer-location">User</label>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" aria-label="Close"><a href="team-member.php">Cancel</a></button>
                            <button name="edit_member">Update</button>
                        </div>
                        </form>                        
                     <?php

                              }

                     ?>

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