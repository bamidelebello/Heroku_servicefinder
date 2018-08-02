<?php


  	$get_team=$connect->prepare("SELECT * FROM  team_member");
  	$get_team->setFetchMode(PDO::FETCH_ASSOC);
  	$get_team->execute();

  	 while ($row =$get_team->fetch()) {
  	 	  extract($row);
  	 	  ?>
	
			<div class="each-team-member">
				<img src="/Service-Finder/Images/<?= $row['member_image']?>">
				<h4><?=  $row['full_name'] ?></h4>
				<p><?= $row['description'] ?></p>
				<div>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
			</div>
		


  	 	  <?php
  	 }

?>

