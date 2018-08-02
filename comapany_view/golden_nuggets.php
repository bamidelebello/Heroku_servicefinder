<?php

// $providerName=$_GET['company_name']; 

//$providerName;
$company_name = $_GET['providerName'];

try{
// echo($company_name);
// exit();
    $sql="select * from provider where company_name = :company_name";
    $result=$connect->prepare($sql);
    $result->execute(array(
              ':company_name'=>$company_name,
          ));
      $services=$result->fetch(PDO::FETCH_ASSOC);

      $product=$services;//->fetchAll();
      // var_dump($services);
      // exit();
}catch(Exception $e){+-
    echo "Error".$e->getMessage();
    exit();
}
// if(!$services->rowCount()){
//       // header("Location: index.php");
//       exit();
//   } 
 // $product=$services;//->fetchAll();
  // var_dump($product);
  // echo preg_replace('?', $first_name, $result->queryString);



try{
// echo($company_name);
// exit();
    $sql="select * from myprofile";
    $result=$connect->prepare($sql);
    $result->execute();
      $service=$result->fetch(PDO::FETCH_ASSOC);
      // var_dump($service);
      exit();
}catch(Exception $e){
    echo "Error".$e->getMessage();
    exit();
}




?>		
		<div class="left-brief-detail">
			<div>
				<div class="company-image-overlay">
					<img src="/Service-Finder/imgmyprofile/<?= $service['image_profile'] ?>" alt="<?= $product['name']?>">
					<div class="company-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
				</div>
				<h5><?= $product['first_name']?></h5>
				<ul>
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-linkedin"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
				</ul>

				  <!-- when is loggin as a customer or provider -->

			<!-- 		<?php
						if($_SESSION['loggedinAsCustomer'] == "Yes")
						{
							echo "<button>Write a review</button>";
						}
						
					?> -->
				
				<span class="provider-approval">
					<i class="fa fa-times"></i>
					<span>Unverified Provider</span>
				</span>
			</div>
		  </div>
        


		<div class="right-more-detail">
			<h2><?= $product['company_name'] ?></h2>
			<span class="profile-service-type">Multi Cuisine Restaurant</span>
			<div class="profile-page-category-type">
				<strong>Categories: </strong>
				<a href="#">Resturants</a>
			</div>
			<div class="sharing-div">
				<ul>
					<li><a href="#"><i class="fa fa-heart"></i>Add fo Fav</a></li>
					<li><a href="#"><i class="fa fa-briefcase"></i>Invite for job</a></li>
					<li style="margin-top: 10px;"><a data-target=".add-new-branch-modal" data-toggle="modal" href="#"><i class="fa fa-hand-o-right"></i>Request a quote</a></li>
				</ul>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i>Share</a></li>
					<li><a href="#"><i class="fa fa-twitter"></i>Share</a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i>Share</a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i>Share</a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i>Share</a></li>
					<li><a href="#"><i class="fa fa-digg"></i>Share</a></li>
				</ul>
				<div style="clear: both;"></div>
			</div>
			<p><?= $product['biography'] ?></p>
		</div>
		<div style="clear: both;"></div>
  