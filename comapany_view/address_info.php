<?php

//SELECT * FROM brand INNER JOIN product ON brand.brand_id = product.brand_id
  try{

    $sql="SELECT * FROM address_location INNER JOIN contact_detail ON address_location.id = contact_detail.id";
    $result=$connect->query($sql);
  }catch(Exception $e){
    echo "Error ".$e->getMessage();
    exit();
  }
 if(!$result->rowCount()){
      header("Location: index.php");
      exit();
  }
  $product=$result->fetch();

?>


			<h2>ADDRESS INFO</h2><br><br>
			<!-- <div class="below-usage-title"></div> -->
			<!-- <p class="below-usage-logo">Best Service Deals</p>  -->
			<div class="service-detail service-detail1">
				<div class="rounded-icon">
					<i class="fa fa-map-marker"></i>
				</div><br>
				<h6>Address</h6>
				<p><?= $product['address'] ?></p>
			</div>

			<div class="service-detail service-detail2">
				<div class="rounded-icon">
					<i class="fa fa-phone"></i>
				</div><br>
				<h6>Telephone</h6>
				<p>
					<b>Tel: </b>
				  <?= $product['mobile'] ?>
				</p>
			</div>
			<div class="service-detail service-detail3">
				<div class="rounded-icon">
					<i class="fa fa-fax"></i>
				</div><br>
				<h6>Fax</h6>
				<!-- <p><a href="tel:+1 234 567 89">+1 234 567 89</a></p> -->
				<p>
			      <?= $product['fax'] ?>
				</p>
			</div>
			<div class="service-detail service-detail4">
				<div class="rounded-icon">
					<i class="fa fa-street-view"></i>
				</div><br>
				<h6>GPS</h6>
				<?= $product['postal_code'] ?>
			</div>
			<div class="service-detail service-detail5">
				<div class="rounded-icon">
					<i class="fa fa-envelope"></i>
				</div><br>
				<h6>Email</h6>
				<p><a href="mailto:abc@gmail.com"><?= $product['email_address'] ?></a></p>
			</div>
			<div class="service-detail service-detail6">
				<div class="rounded-icon">
					<i class="fa fa-globe"></i>
				</div><br>
				<h6>Web</h6>
				<p><a href="kfcchicken.com"><?= $product['website']?></a></p>
			</div>
			<div style="clear: both;"></div>
