
<?php
    
//session_start();
    // $authid = select auth_id from authenicate where user_name = $user_name;

     		//insert into provider(auth_id) values($authid)
      
         	 
     include("extra.php");
     require 'config.php';

       //require 'action.php';
   if(isset($_POST['regisrer_info'])){
	 $errorMsg='';
      //get data from input 
		$company_name=$_POST['company_name'];
		$first_name= $_POST['first_name'];
		$last_name= $_POST['last_name'];
		$user_name= $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password=md5($password);
		$confirm_password = $_POST['confirm_password'];
		$phone_number = $_POST['phone_number'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$area = $_POST['area'];
		$postal_code = $_POST['postal_code'];
		$selectpicker	= $_POST['selectpicker'];
		// $authid	= '';
          
       //  use errormes varable to display diff type of error if user not type anythin

		if($company_name == '')
		 		$errorMsg='enter your conpany name';
		if($first_name == '')
		 		$errorMsg='enter first name';
		 if($last_name =='')
		 		$errorMsg='enter last name';
		 if($user_name =='')
			 $errorMsg='enter user name';
		 if($email =='')
			 $errorMsg='enter email is requred';
		 if($password == '')
		 		$errorMsg='password and confirm_password is required';
		 if($phone_number=='')
				 $errorMsg='enter phone no is required';
		 if($address=='')
				 $errorMsg='enter address is required';
		 if($country=='')
		 		$errorMsg='enter country is required';
		 if($state=='')
		 		$errorMsg='enter state is required';
		 if($city=='')
		 		$errorMsg='enter city is required';
		 if($area=='')
		 		$errorMsg='enter area is required';
		 if($postal_code=='')	
		 		$errorMsg='enter pcode is required';
		if($selectpicker == '')
				$errorMsg='enter selectpicker is required';


   if($errorMsg == ''){
			try{ 


	    $query=$connect->prepare('INSERT INTO authenticate(user_name,password) VALUES(:user_name,:password)');
     	$query->execute(array(
              ':user_name'=>$user_name,
              ':password'=>$password
                ));
     	
	 // $data=$connect->prepare('SELECT auth_id FROM authenticate WHERE user_name=:user_name');
  //    		$data->execute(array(
  //             ':user_name'=>$user_name
  //    		));
  //    		$auth_id=$data->fetch(PDO::FETCH_BOUND);
  //    		print_r($auth_id);
  //    		 exit;


     	 global $connect;
         $results=$connect->prepare('select * from authenticate order by auth_id ASC');
         $results->execute();
         $auth_id=$results->fetch(PDO::FETCH_BOUND);
         // print_r($data);
         // exit;
         $results->closeCursor();

	$stmt=$connect->prepare('INSERT INTO provider(company_name,first_name,last_name,user_name,email,password,
		phone_number,address,country,state,city,area,postal_code,selectpicker)VALUES
		(:company_name,:first_name,:last_name,:user_name,:email,:password,:phone_number,:address,:country,:state,:city,:area,:postal_code,:selectpicker)');
				$stmt->execute(array(
					':company_name' =>$company_name,
			        ':first_name'=>$first_name,
				    ':last_name'=>$last_name,
	                ':user_name'=>$user_name,
				    ':email'=>$email,
					':password'=>$password,
					':phone_number'=>$phone_number,
					':address'=>$address,
			        ':country'=>$country,
					':state'=>$state,
				    ':city'=>$city,
					':area'=>$area,
				    ':postal_code'=>$postal_code,
					':selectpicker'=>$selectpicker	    		              			    
			       ));
	 if($stmt->rowCount()){
       	   ?>
        echo"<script>alert('New record has created successfully!');
               window.location.href=('RegisterPage.php');
               exit();
        </script>";
        <?php
        }
      //  if($stmt >= 1){
      // $query=$connect->prepare('INSERT INTO authenticate(user_name,password) VALUES(:user_name,:password)');
     	// 	$query->execute(array(
      //         ':user_name'=>$user_name,
      //         ':password'=>$password
     	// 	));

      //   }
	    }catch(PDOException $e){
				echo $e->getMessage();
		 }
     }
}
  

?>

<!DOCTYPE html>
<html>
<head>

	<title>Service Finder</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/bootstrap-select.css">
	<link rel="stylesheet" type="text/css" href="./Assets/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="./Assets/SummerNote/summernote.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/main.css">
	<style type="text/css">
		body{
			height: 100px;
		}
	</style>
</head>
<body>
	<section class="home-section">
		<div class="modals-section">
			
				    	<div class="tab-wrapper">
							<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#customer" aria-controls="customer" role="tab" data-toggle="tab">Customer</a></li>
						    	<li role="ipresentation"><a href="#provider" aria-controls="provider" role="tab" data-toggle="tab">Provider</a></li>
						  	</ul>


							<div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="customer">
							    	<div class="social-media-register">
							    		<div>
											<a href="#" style="background-color: rgb(59, 89, 152);">
							    				< class="fa fa-facebook"></i>
							    				<span>Facebook</span>
							    			</a>							    			
							    		</div>
							    		<div>
							    			<a href="#" style="background-color: rgb(29, 161, 242);">
							    				<i class="fa fa-twitter"></i>
							    				<span>Twitter</span>
							    			</a>
							    		</div>
							    		<div>
							    			<a href="#" style="background-color: rgb(231, 71, 60);">
							    				<i class="fa fa-google"></i>
							    				<span>Google</span>
							    			</a>
							    		</div>
							    	</div><br><br>
							    	<div class="form-register">
<?php
							


  if(isset($_POST['add_sustomer'])){
            $CusterrorMsg='';

    /** First Version with assignment 

     $first_name=$_POST['first_name'];
     $last_name=$_POST['last_name'];
     $user_name=$_POST['user_name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $confirm_password=$_POST['confirm_password'];

	**/

	/**
		Secon Version with Normal array and forloop

		 $inputs = [
      	$_POST['first_name'],
      	$_POST['last_name'],
      	$_POST['user_name'],
      	$_POST['password'],
       	$_POST['confirm_password']
      ];

   
   
     for ($i=0; $i < count($inputs) ; $i++) { 
     	if($input[$i] == '')
     	{
     		$CusterrorMsg = "Enter your  ";
     	}
     }


	**/



      $inputs = [
      	'firstname' => $_POST['first_name'],
      	'lastname'  => $_POST['last_name'],
      	'username'  => $_POST['user_name'],
      	'email' 	=> $_POST['email'],
      	'password'  => $_POST['password'],
      	'confirmpassword'  => $_POST['confirm_password'],
      ];

      


     if($inputs['password'] == $inputs['confirm_password'])
     {

      	foreach ($inputs as $name => $value) {
	    	$CusterrorMsg = "Enter your " . $name ;
	    	if($name == $inputs['confirmpassword']){ break; }
	    };
     
     }
     	// if ($inputs['password'] === $inputs['confirm_password']) {
     	// 	foreach ($inputs as $name => $value) {
		    // 	$CusterrorMsg = "Enter your " . $name ;
		    // };
		    // // echo "Am here presently";
		    // // var_dump($inputs['confirm_password'] && $inputs['password']);
     	// }else{
     	// 	$CusterrorMsg = "Password and Confirm password does not match!";
     	// }

     // if($inputs['password'] == $inputs['confirm_password'])
     // {
     	
     // }

   //   if($inputs['first'] == '')
		 //  $CusterrorMsg='enter your first name';
   //   if($last_name == '')
		 //  $CusterrorMsg='enter your last name';	
   //    if($user_name == '')
		 //  $CusterrorMsg='enter your user name';	
	  // if($email == '')
		 //  $CusterrorMsg='enter your email';	
	  // if($password == '')
		 //  $CusterrorMsg='enter your password';
	  // if($confirm_password == '')
		 //  $CusterrorMsg='enter your password';	


    if($CusterrorMsg == '' || $CusterrorMsg == null ){
     try{


   $sql="INSERT INTO customer(first_name,last_name,user_name,email,password)VALUES(:first_name,:last_name,:user_name,:email,:password)";
        $stmt=$connect->prepare($sql);
        $stmt->execute(array(
					':first_name'=>$inputs['firstname'],
				    ':last_name'=> $inputs['lastname'],
	                ':user_name'=>$inputs['username'],
				    ':email'=>$inputs['email'],
					':password'=>$inputs['password']	    		              			    
			       ));
      if($stmt->rowCount()){
             ?>
        echo"<script>alert('New record has created successfully!');
               window.location.href=('LoginPage.php');
               exit();
        </script>";
        <?php

        exit;
        
       }else{
          ?>
        echo"<script>alert('New record has not created successfully!');
               window.location.href=('LoginPage.php');
               exit();
        </script>";
        <?php
       }
       
     }catch(Exception $e){
       echo "Error  ".$e->getMessage();

        }

     }


  }
			    		 if(isset($CusterrorMsg)){
				 	echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$CusterrorMsg.'</div>';
				}
				
			?>
							    		<form method="POST" action="">
								    		<input type="text" name="first_name" placeholder="First Name" style="margin-right: 3%;">
								    		<input type="text" name="last_name" placeholder="Last Name">
								    		<input type="text" name="user_name" placeholder="Username" style="margin-right: 3%;">
								    		<input type="text" name="email" placeholder="Email">
								    		<input type="password" name="password" placeholder="Password" style="margin-right: 3%;">
								    		<input type="password" name="confirm_password" placeholder="Confirm Password">
								    		<div style="clear: both;"></div>
								    		<button type="submit" name="add_sustomer" value="Store">Sign up</button>
							    		</form>
							    		<a href="LoginPage.php">Login Here</a>
							    	</div>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="provider">
							    	<div class="social-media-register">
							    		<div>
											<a href="#" style="background-color: rgb(59, 89, 152);">
							    				<i class="fa fa-facebook"></i>
							    				<span>Facebook</span>
							    			</a>							    			
							    		</div>
							    		<div>
							    			<a href="#" style="background-color: rgb(29, 161, 242);">
							    				<i class="fa fa-twitter"></i>
							    				<span>Twitter</span>
							    			</a>
							    		</div>
							    		<div>
							    			<a href="#" style="background-color: rgb(231, 71, 60);">
							    				<i class="fa fa-google"></i>
							    				<span>Google</span>
							    			</a>
							    		</div>
							    	</div><br><br>

			<div style="margin-right: 1%;" align="left">
			<?php
				if(isset($errorMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errorMsg.'</div>';
				}
			?>

	    	<div class="form-register provider">
	    		<form method="post" action="RegisterPage.php">
	    		<input type="text" name="company_name" placeholder="Company Name">
	    		<input type="text" name="first_name" placeholder="First Name" style="margin-right: 3%;">
	    		<input type="text" name="last_name" placeholder="Last Name">
	    		<input type="text" name="user_name" placeholder="Username"  style="margin-right: 3%;">
	    		<input type="text" name="email" placeholder="Email">
	    		<input type="password" name="password" placeholder="Password" style="margin-right: 3%;">
	    		<input type="password" name="confirm_password" placeholder="Confirm Password">
	    		<input type="text" name="phone_number" placeholder="Phone Number" style="margin-right: 3%;">
	    		<input type="text" name="address" placeholder="Address">
	    		<input type="text" name="country" placeholder="Country" style="margin-right: 3%;">
	    		<input type="text" name="state" placeholder="State">
	    		<input type="text" name="city" placeholder="City" style="margin-right: 3%;">
	    		<input type="text" name="area" placeholder="Area">
	    		<input type="text" name="postal_code" placeholder="Postal Code" style="margin-right: 3%;">
	    		<select class="selectpicker" name="selectpicker">
	    	  <optgroup label="Picnic">
	    				
				    	<?php
					foreach ( $items as $item) { 	?>
					<option><?php echo $item ?></option>    						
		             <?php } ?>

				  	</optgroup>
	    		</select>
	    		<div style="clear: both;"></div>
	    		<button type="submit" name="regisrer_info">Sign up</button>
	    		<a href="#">Already Registered</a>
	    	    <a href="LoginPage.php">Login Here</a>
	    		</form>
	    	</div>
	           </div>
			  </div>
				 </div>
					</div>   
			<!-- Login modal -->
			<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  				<div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">SIGN IN</h4>
				    	</div>
				    	<div class="tab-content">
							<div class="form-login">
				    			<div class="login-username">
				    				<i class="fa fa-user fa-lg"></i>
				    				<input type="text" name="" placeholder="Username">
				    			</div>
				    			<div class="login-username">
				    				<i class="fa fa-lock fa-lg"></i>
				    				<input type="text" name="" placeholder="Password">
				    			</div>
				    			<button type="submit">Submit</button>
				    			<a href="#">Dont have an account?</a>
				    			<a href="#">Forgot Password</a><br>
				    		</div>	
				    		<div class="social-media-register">
				    			<div>
									<a href="#" style="background-color: rgb(59, 89, 152);">
							   			<i class="fa fa-facebook"></i>
						 				<span>Facebook</span>
					    			</a>							    			
					    		</div>
							    <div>
									<a href="#" style="background-color: rgb(29, 161, 242);">
					    				<i class="fa fa-twitter"></i>
					    				<span>Twitter</span>
					    			</a>
							    </div>
								<div>
					    			<a href="#" style="background-color: rgb(231, 71, 60);">
					    				<i class="fa fa-google"></i>
					    				<span>Google</span>
							    	</a>
							   	</div>
				    		</div>			    		
				    	</div>
				    </div>
			  	</div>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="./Assets/JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap.js"></script>
	<script type="text/javascript" src="./Assets/JS/bootstrap-select.js"></script>
	<script type="text/javascript" src="./Assets/JS/owl.carousel.js"></script>
	<script type="text/javascript" src="./Assets/SummerNote/summernote.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl8dMQnzkz9yxw17yL_YwXGZGyXZp2Ip8&callback=initMap" type="text/javascript"></script>
	<script type="text/javascript" src="./Assets/JS/script.js"></script>	
</body>
</html>
