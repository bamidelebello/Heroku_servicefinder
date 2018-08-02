<?php include("header/htmlheader.php");
   include("operation_login.php");
   include("extra.php");
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
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            <h4 class="model-title">ADD NEW BRANCH</h4>
        </div>

        <form method="post" action="operation_login.php">

        <div class="modal-body new-branch-modal-body">
            <input type="text" name="address" placeholder="Address">

            <select class="selectpicker" name="country" data-live-search="true" data-header="Select branch country" title="Country">
                        <?php foreach ($country as $countries) { ?>
                        <option data-tokens="ketchup mustard"><?php echo $countries; ?></option>
                    <?php } ?>
            </select>
            <select class="selectpicker" name="city" data-live-search="true" data-header="Select branch city" title="City">
                    <?php foreach ($state as $states) { ?>
                        <option data-tokens="ketchup mustard"><?php echo $states; ?></option>
                    <?php } ?>
            </select>
            <input type="text" name="app" placeholder="App/Suite #" class="app-suite-input">
            <input type="text" name="state" placeholder="State">
            <input type="text" name="postal_code" placeholder="Postal code">
            <div style="clear: both;"></div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" aria-label="Close">Cancel</button>
            <button name="add_branch">Add New Branch</button>
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