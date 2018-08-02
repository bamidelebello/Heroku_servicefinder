<?php

 include("config.php");

 class DataService extends Database{

    public function insert_service($table,$fileds)
	{//insert into table_name(,,) values ('m_name','qty');
          //print
			$sql = "";
			$sql .= "INSERT INTO ".$table;
			$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
			$sql .= "('".implode("','", array_values($fileds))."')";
			$query = mysqli_query($this->connection,$sql);
			if($query){
			return true;
			}
	}


    public function service_records($table)
	{
		$sql="SELECT * FROM ".$table;
		$array=array();
		$query=mysqli_query($this->connection,$sql);
		while ($row =mysqli_fetch_assoc($query)) {
			$array[]=$row;
		}
        return $array;
	}

	public function update_service($table,$where,$fields)
	{
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
			// id = '5' AND m_name = 'something'
			$condition .= $key . "='" . $value . "' AND ";
			}
			$condition = substr($condition, 0, -5);
			foreach ($fields as $key => $value) {
			//UPDATE table SET m_name = '' , qty = '' WHERE id = '';
			$sql .= $key . "='".$value."', ";
			}
			$sql = substr($sql, 0,-2);
			$sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
			if(mysqli_query($this->connection,$sql)){
			return true;
			}
	  }

	 public function delete_service($table,$where)
	 {
	  	$sql="";
	  	$condition="";
	  	foreach ($where as $key => $value) {
	      $condition .=$key .="='".$value."' AND ";
	  	}
	  	  $condition=substr($condition, 0,-5);
	      $sql = "DELETE  FROM ".$table." WHERE ".$condition;
	     if (mysqli_query($this->connection,$sql)) {
	     	 return true;
	     }
	  }


	public function service_informations($table,$where)
	{
		$sql="";
		$condition="";
		foreach ($where as $key => $value) {
			# id ='5' and m_name='something'
			$condition .= $key . "='" . $value . "' AND ";
		}
	   	$condition = substr($condition, 0, -5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->connection,$sql);
		$row = mysqli_fetch_array($query);
		return $row;

	}
	
}
        $obj1 = new DataService;
		if(isset($_POST["add_service"])){
		$myArray = array(
		"service_name" => $_POST["service_name"],
		"cost_type" => $_POST["cost_type"],
		"service_cost" => $_POST["service_cost"],
		"service_group" => $_POST["service_group"],
		"summer_note" => $_POST["summer_note"]
		);
		if($obj1->insert_service("service",$myArray)){
			  ?>
        echo"<script>alert('New record Record Deleted Successfully!');
               window.location.href=('my-services.php');
               exit();
           </script>";
        <?php
		//header("location:my-services.php?msg=Record Inserted");
    }
 }

    // $row = $obj1->service_informations("service",$where);
    //  var_dump($row);


    

   
    if(isset($_GET["delete"])){
     $id=$_GET["id"] ?? null;
       $where=array("id"=>$id);
      if($obj1->delete_service("service",$where)){
      	 ?>
        echo"<script>alert('New record Record Deleted Successfully!');
               window.location.href=('my-services.php');
               exit();
           </script>";
        <?php
      // header("location:my-services.php?msg=Record Deleted Successfully");
       }
  }

    if(isset($_POST["edit"])){
    	$id=$_POST["id"];
    	$where =array("id" => $id);
    	$myArray =array(
         "service_name" => $_POST["service_name"],
		"cost_type" => $_POST["cost_type"],
		"service_cost" => $_POST["service_cost"],
		"service_group" => $_POST["service_group"],
		"summer_note" => $_POST["summer_note"]
    	);
    	$obj1->update_service("service",$where,$myArray);
    	// header("location:my-services.php?msg=Record Updated Successfully");
    		?>
		  echo "<script>alert('Is successfully! updated');
		         window.location.href=('my-services.php');
		         exit();
		  </script>";
		  <?php
    }

?>