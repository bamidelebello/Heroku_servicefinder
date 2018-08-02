<?php 
  // include("db.php");

  // write a query to
//SELECT * FROM brand INNER JOIN product ON brand.brand_id = product.brand_id

// tuesday wednessday thursday friday saturday sunday
// tuesday wednessday thursday friday saturday sunday
// =wednessday.id =thursday.id =friday.id=saturday.id=sunday.id
// // select * from TableA A 
// // inner join TableB B on A.Column=B.Column 
// // inner join TableC C on A.Column=C.Column

  try{
    $sql="SELECT * FROM monday M
     INNER JOIN tuesday T ON M.id = T.id
     INNER JOIN wednessday W ON M.id = W.id
     INNER JOIN thursday th ON M.id = th.id
     INNER JOIN friday fr ON M.id = fr.id
     INNER JOIN saturday sa ON M.id = sa.id
     INNER JOIN sunday su ON M.id = su.id
    
     ";
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
		<h2>BUSINESS HOURS</h2><br><br>
		<div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Mon</th>
						<th>Tue</th>
						<th>Wed</th>
						<th>Thu</th>
						<th>Fri</th>
						<th>Sat</th>
						<th>Sun</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span><a><?= $product['from_monday']?></a> AM</span><br>
							<span>TO</span><br>
							<span><?= $product['to_monday']?> PM</span><br>
						</td>
						<td>
							<span><?= $product['bussness_tuesday1']?> AM</span><br>
							<span>TO</span><br>
							<span><?= $product['bussness_tuesday2']?> PM</span><br>
						</td>
						<td>
							<span><?= $product['bussiness_wednessday1']?> AM</span><br>
							<span>TO</span><br>
							<span><?= $product['bussiness_wednessday2'] ?> PM</span><br>
						</td>
						<td>
							<span><?= $product['bussiness_thursday1'] ?> AM</span><br>
							<span>TO</span><br>
							<span><?= $product['bussiness_thursday2'] ?> PM</span><br>
						</td>
						<td>
							<span><?= $product['bussiness_friday1'] ?> AM</span><br>
							<span>TO</span><br>
							<span><?= $product['bussiness_friday2'] ?> PM</span><br>
						</td>
						<td>
							<span><?= $product['bussinese_saturday1']?> AM</span><br>
							<span>TO</span><br>
							<span><?= $product['bussinese_saturday2'] ?> PM</span><br>
						</td>
						<td>
							<span><?= $product['bussiness_sunday1'] ?> AM</span><br>
							<span>TO</span><br>
							<span><?= $product['bussiness_sunday2'] ?> PM</span><br>
						</td>
					</tr>
				</tbody>
			</table><br><br>
		</div>
