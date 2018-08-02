<?php

  include('config.php');

   if(isset($_POST['login'])){
       $errMeg='';

       $user_name=$_POST['user_name'];
       $password=$_POST['password']; 

       if($user_name == '')
       	 $errMeg='Enter User_Name';
       if($password == '')
       	$errMeg='Enter Password';

       if($errMeg == ''){

        try{

        	$stmt=$connect->prepare('SELECT auth_id,user_name,password FROM authenticate WHERE user_name=:user_name');
        	$stmt->execute(array('user_name' =>$user_name));
        	$data=$stmt->fetch(PDO::FETCH_ASSOC);

        	if($data == false){
        		$errMeg ='User $user_name Not Found';
        	}
     		else {
			if($password == $data['password']) {
				$_SESSION['username'] = $data['username'];
				$_SESSION['password'] = $data['password'];
				

				header('Location: dashboard.php');
				exit;
			}
			else
				$errMsg = 'Password not match.';
				}
        	 

        }catch(PDOException $e){

          $errMeg= $e->getMessage();

        }
        
       }
  
   }



?>