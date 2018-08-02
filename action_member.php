<?php

 

  /**
  * 
  */
   ob_start();
  include('config.php');
  class DataMember extends Database
  {
    
  
     public function member_insertion($table,$fileds)
     {

       $user_name=$_SESSION['user_name'];
       $member_image=$_FILES['member_image']['name'];
       $temp_dir=$_FILES['member_image']['tmp_name'];
       $imageSize=$_FILES['member_image']['size'];

       $upload_dir1='members/';
       $imgExt=strtolower(pathinfo($member_image,PATHINFO_EXTENSION));
       $valid_extensions=array('jpeg','jpg','png','gif','pdf');
       $member_image=$user_name."cover".".".$imgExt;
       move_uploaded_file($temp_dir,$upload_dir1.$member_image);

      $sql = "";
      $sql .= "INSERT INTO ".$table;
      $sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
      $sql .= "('".implode("','", array_values($fileds))."')";
      $query = mysqli_query($this->connection,$sql);
      if($query){
      return true;
      }
    }

  public function fetch_members($table)
  {
    $sql="SELECT * FROM ".$table;
    $array=array();
    $query=mysqli_query($this->connection,$sql);
    while ($row =mysqli_fetch_assoc($query)) {
       $array[]=$row;
    }
        return $array;
  }

  public function select_members($table,$where)
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

      public function update_members($table,$where,$fields)
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

   public function delete_records($table,$where)
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


    if(isset($_POST["delete"])){
      $id=$_POST["id"] ?? null;
       $where=array("id"=>$id);
      if($member->delete_records("team_member",$where)){
             ?>
        echo"<script>alert('New record Record Deleted Successfully!');
               window.location.href=('team-member.php');
               exit();
           </script>";
        <?php
       }
    }

  
  
   $member = new DataMember();
   if(isset($_POST['add_member'])){

    $My_member= array(
      "member_image"=> $_FILES['member_image']['name'],
      "full_name"=>$_POST["full_name"],
      "email"=>$_POST["email"],
      "member_phone"=>$_POST["member_phone"],
      "description"=>$_POST["description"],
      "radio1"=>$_POST["radio1"]
    );
  if($member->member_insertion("team_member",$My_member)){
       echo"<script>alert('New record has created successfully!');
               window.location.href=('team-member.php');
               exit();
           </script>";
      
   }else{
    echo "not true okay";
   }
 }




    if(isset($_POST["edit_member"])){
      $id=$_POST["id"];
      $where =array("id" => $id);
      $myArray =array(
          "full_name"=>$_POST["full_name"],
          "email"=>$_POST["email"],
          "member_phone"=>$_POST["member_phone"],
          "description"=>$_POST["description"],
          "radio1"=>$_POST["radio1"]
      );
      $member->update_members("team_member",$where,$myArray);
           ?>
        echo"<script>alert('New Record Updated Successfully');
               window.location.href=('team-member.php');
               exit();
           </script>";
        <?php
  
    }





?>