<?php
/**
* 
*/
 
 include("config.php");

class DataOperation extends Database
{
    public function insert_records($table,$fileds)
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
    

  public function fetch_records($table)
  {
    $sql="SELECT * FROM ".$table;
    $array=array();
    $query=mysqli_query($this->connection,$sql);
    while ($row = mysqli_fetch_assoc($query)) {
       $array[]=$row;
    }
        return $array;
   }

   public function select_record($table,$where)
	{
		$sql="";
		$condition="";
		foreach ($where as $key => $value) {
			# id ='5' and m_name='something'
			$condition.=$key=$key."='".$value."' AND ";
		}
	   	$condition = substr($condition, 0, -5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->connection,$sql);
		$row = mysqli_fetch_array($query);
		return $row;

	}

    public function update_record($table,$where,$fields)
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


	  public function delete_record($table,$where)
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
}
  	   $obj = new DataOperation;
		if(isset($_POST["add_branch"])){
		$myArray = array(
		"address" => $_POST["address"],
		"country" => $_POST["country"],
		"city" => $_POST["city"],
		"app" => $_POST["app"],
		"state" => $_POST["state"],
		"postal_code" => $_POST["postal_code"]
		);
		if($obj->insert_records("branch",$myArray)){
            
        ?>
        echo"<script>alert('New record Record Deleted Successfully!');
               window.location.href=('our-branches.php');
               exit();
           </script>";
        <?php

		//header("location:our-branches.php?msg=Record Inserted");

		}else{

	  ?>
        echo"<script>alert('New record Record Deleted Successfully!');
               window.location.href=('our-branches.php');
               exit();
           </script>";
        <?php
		}
 }

 if(isset($_GET["delete"])){
     $id=$_GET["id"] ?? null;
       $where=array("id"=>$id);
      if($obj->delete_record("branch",$where)){
           	  ?>
        echo"<script>alert('New Record Deleted Successfully!');
               window.location.href=('our-branches.php');
               exit();
           </script>";
        <?php
      // header("location:our-branches.php?msg=Record Deleted Successfully");
       }
  }

  if(isset($_POST["edit"])){
    	$id=$_POST["id"];
    	$where =array("id" => $id);
    	$myArray =array(
        "address" => $_POST["address"],
		"country" => $_POST["country"],
		"city" => $_POST["city"],
		"app" => $_POST["app"],
		"state" => $_POST["state"],
		"postal_code" => $_POST["postal_code"]
    	);
    	$obj->update_record("branch",$where,$myArray);
            ?>
        echo"<script>alert('New Record Deleted Successfully!');
               window.location.href=('our-branches.php');
               exit();
           </script>";
        <?php
    //	header("location:our-branches.php?msg=Record Updated Successfully");
    }

?>