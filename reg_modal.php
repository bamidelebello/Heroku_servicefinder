<?php 

  include("config.php");

   $id=$_GET['id'] ? intval($_GET['id']) : 0;


  try{
    $sql="SELECT * FROM our_region WHERE id=:id LIMIT 1";
    $stmt=$connect->prepare($sql);
    $stmt->bindParam(":id",$id,PDO::PARAM_INT);
    $stmt->execute(); 
  }catch(Exception $e){
    echo "Error ".$e->getMessage();
    exit();
  }

  if(!$stmt->rowCount()){
     // header("Location: our-regions.php");
      exit();
  }
  $region=$stmt->fetch();
  // var_dump($product);
  // exit();
 
 ?>



<?php include("header/htmlheader.php");?>
<body>

<div class="company-branches">
    <div class="new-branch-button-div">
    
<!-- <button class="new-branch-button" data-target=".add-new-branch-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD NEW BRANCH</button> -->
    </div>

<section class="company-setting-section">
<!-- Add new Region modal -->
<div class="modal add-new-branch-modal fade open in" tabindex="-1" role="dialog" aria-labelledby="" style="display: block; background: rgba(0, 0, 0, 0.3);">
    <div class="modal-dialog" role="document" >
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><a href="our-regions.php">X</a></span></button>
            <h4 class="model-title">ADD NEW BRANCH</h4>
        </div>

             <form method="POST" action="region_update.php"> 

                  <input type="hidden" name="id" value="<?= $region['id']?>" >
                        <div class="modal-body new-branch-modal-body">
                       <input type="text" name="add_region" value="<?=  $region['add_region']?>" placeholder="Region">
                            <div style="clear: both;"></div>
                        </div>
                   
                 <center>
                    <select class="selectpicker" value=""  name="status" title="Status">
                     <option value="Active"><?= $region['status'] ?></option>
                     </select></center>
                           <br>

                        <div class="modal-footer">
                            <button data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button name="update_region">Update New Region</button>
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

