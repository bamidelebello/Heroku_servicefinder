
<?php include("optservice.php"); ?>
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
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            <h4 class="model-title">ADD NEW SERVICE</h4>
        </div>
    
             <?php
            if (isset($_GET["update"])) {
                       //php 7
                        $id=$_GET["id"] ?? null;
                        $where =array("id"=>$id,);
                    $row = $obj1->all_records("service",$where);
                   ?>                 
        <form method="post" action="optservice.php">
         
                        <div class="modal-body new-service-modal">

                    <input type="text" name="service_name" value="<?php echo $row['service_name']; ?>" placeholder="Service name">
                            <label><b>SERVICE COST</b></label><br>

                   <input id="fixed-price" type="radio"  value="<?php echo $row['']; ?>" name="cost_type" checked>
                            <label for="fixed-price">Fixed Price</label>

                            <input id="fixed-price" type="radio" value="<?php echo $row['']; ?>" name="cost_type">
                            <label for="fixed-price">None Fixed</label>

                            <input id="fixed-price" type="radio" value="<?php echo $row['']; ?>" name="cost_type">
                            <label for="fixed-price">Equal Price</label>
                            <br><br>
                            <input type="text" name="service_cost" value="<?php echo $row['']; ?>" placeholder="Service Cost">

                            <select class="selectpicker" name="service_group"
                              data-live-search="true" title="Service Group">
                                <option data-tokens="ketchup mustard"><?php echo $row['']; ?></option>
                            </select>
                            <br><br>
                            <textarea id="summernote1" class="form-control" name="summer_note"><?php echo $row['']; ?></textarea>
                            <div style="clear: both;"></div>
                        </div>

                        <div class="modal-footer">
                            <button data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button name="update">Add Update</button>
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