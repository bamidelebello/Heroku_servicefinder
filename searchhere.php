<?php

  include_once("config.php");

if(isset($_POST['searchmany'])){
	 $id = $_POST['id'];
     $stmt=$connect->prepare("SELECT * FROM provider WHERE id = :id");
	 $stmt->bindValue(1,":id",PDO::PARAM_STR);
	 $stmt->execute(array(
              ':id'=>$id
          ));
	 if(!$stmt->rowCount() == 0){
	 	while ($row =$stmt->fetch()) {
	 		echo $row['id'];
	 	    echo $row['address'];
	 	}
	 }else{
	 	echo "not sound";
	 }
}
?>
