<?php include("header/htmlheader.php");
 include("optservice.php");
?>
<body>
<div class="company-branches">
    <div class="new-branch-button-div">
    
<!-- <button class="new-branch-button" data-target=".add-new-branch-modal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;ADD NEW BRANCH</button> -->
    </div>

<section class="company-setting-section">
<!-- Add new Region modal -->
<div class="modal add-new-branch-modal fade open in" tabindex="-1" role="dialog" aria-labelledby="" style="display: block; background: rgba(0, 0, 0, 0.3);">
    <div class="modal-dialog" role="document" >
    <div class="modal-content" style="float: none;">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            <h4 class="model-title">ADD NEW BRANCH</h4>
        </div>
        
       <?php
            if(isset($_GET["update"])){
            //php 7
            $id = $_GET["id"] ?? null;
            $where = array("id"=>$id,);
            $row = $obj1->service_informations("service",$where);
               
          ?>
                <form method="post" action="optservice.php">
                        <div class="modal-body new-service-modal">

                            <input type="hidden" name="id" value="<?php echo $id; ?>">

         <input type="text" name="service_name" value="<?php echo $row['service_name']; ?>" placeholder="Service name">
                            <label><b>SERVICE COST</b></label><br>

                   <input id="fixed-price" type="radio"  value="<?php echo $row['cost_type']; ?>" name="cost_type" checked>
                            <label for="fixed-price">Fixed Price</label>

                            <input id="fixed-price" type="radio" value="<?php echo $row['none']; ?>" name="cost_type">
                            <label for="fixed-price">None Fixed</label>

                            <input id="fixed-price" type="radio" value="<?php echo $row['equal']; ?>" name="cost_type">
                            <label for="fixed-price">Equal Price</label>
                            <br><br>
                <input type="text" name="service_cost" value="<?php echo $row['service_cost']; ?>" placeholder="Service Cost">

                            <select class="selectpicker" name="service_group"
                              data-live-search="true" title="Service Group">
                                <option data-tokens="ketchup mustard"><?php echo $row['service_group']; ?></option>
                            </select>
                            <br><br>
                            <!-- id="summernote1"  -->
                            <textarea  name="summer_note"><?php echo $row['summer_note']; ?></textarea>
                
                        </div>

                        <div class="modal-footer">
                            <button data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button name="edit">Add Update</button>
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