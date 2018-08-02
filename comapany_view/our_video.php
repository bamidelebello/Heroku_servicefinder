	 <?php 
  // include("db.php");


  try{
    $sql="SELECT * FROM  provider_profile ";
    $stmt=$connect->prepare($sql);
    $stmt->execute(); 
  }catch(Exception $e){
    echo "Error ".$e->getMessage();
    exit();
  }
  if(!$stmt->rowCount()){
      header("Location: index.php");
      exit();
  }
  $product=$stmt->fetch();
  // var_dump($product);
  // exit();
 
 ?>
			<h2>OUR VIDEO</h2><br><br>
			<div class="profile-page-video">
				<iframe src="<?= $product['video_url']?>" frameborder="0" allowfullscreen></iframe>
			</div>
		