<?php
  // session_start();
 require 'config.php';
if(isset($_SESSION['user_name']))
{
	header("Location: company-profile-settings.php");
}


 if (isset($_POST['loginsys'])){
 	  $errMsg='';
     $user_name=$_POST['user_name'];
     $password =$_POST['password'];

     if($user_name == '')
     	 $errMsg='Enter Your user name';
     if($password == '')
     	$errMsg='Enter Your password';

     if($errMsg == ''){
     	try{
     		$stmt=$connect->prepare('SELECT id,company_name,first_name,last_name,user_name,email,password,
		phone_number,address,country,state,city,area,postal_code,selectpicker FROM provider WHERE user_name=:user_name');
     		$stmt->execute(array(
              ':user_name'=>$user_name
     		));
     		$data=$stmt->fetch(PDO::FETCH_ASSOC);
     		// var_dump($data);
     		//  exit;
     		if($user_name == $data['user_name']){
     	           	 $_SESSION['id'] = $data['id'];
					   $_SESSION['company_name'] = $data['company_name'];
				   	   $_SESSION['first_name'] = $data['first_name'];
					   $_SESSION['last_name'] = $data['last_name'];
					   $_SESSION['user_name'] = $data['user_name'];
					   $_SESSION['email']=$data['email'];
					   $_SESSION['phone_number']=$data['phone_number'];
					   $_SESSION['address']=$data['address'];
					   $_SESSION['country']=$data['country'];
					   $_SESSION['state']=$data['state'];
					   $_SESSION['city']=$data['city'];
					   $_SESSION['area']=$data['area'];
					   $_SESSION['postal_code']=$data['postal_code'];
					   $_SESSION['selectpicker']=$data['selectpicker'];

					   $_SESSION['loggedinAsProvider'] = "Yes";
					  
					    header('Location: company-profile-settings.php');
						exit();
						// company-profile-settings.php
						//https://www.facebook.com/
     		}
     		// if($data == false){
     		// 	$errMsg = "User user name not found.";
     		// }
     		else{
     			
     		 $stmt=$connect->prepare('SELECT id,first_name,last_name,user_name,email,password FROM customer WHERE user_name=:user_name AND password=:password');
     		$stmt->execute(array(
              ':user_name'=>$user_name,
              ':password'=>$password
     		));
     		$data=$stmt->fetch(PDO::FETCH_ASSOC);

           if($data == true){
                       $_SESSION['id'] = $data['id'];
				   	   $_SESSION['first_name'] = $data['first_name'];
					   $_SESSION['last_name'] = $data['last_name'];
					   $_SESSION['user_name'] = $data['user_name'];
					   $_SESSION['email']=$data['email'];

					   $_SESSION['loggedinAsCustomer'] = "Yes";
					header('Location:company-profile-settings.php');

					   echo "customer is loggin";
						exit();

               }else{
               	 echo "check your username or password";
               }

			   }
     		}catch(PDOException $e){
             $errMsg=$e->getMessage();
     	 }
     }
     
     
 }

    

?> 
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
</head>
<body>
	<section class="home-section">			
  				<div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				    	<div class="modal-header">
				    		<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				    		<h4 class="model-title">SIGN IN</h4>
				    	</div>
	    <?php
                   if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				         }
		?>
				    	<div class="tab-content">
				   <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div class="form-login">
				    			<div class="login-username">
				    				<i class="fa fa-user fa-lg"></i>
				     <input type="text" name="user_name" placeholder="Username" >
				    			</div>
				    			<div class="login-username">
				    				<i class="fa fa-lock fa-lg"></i>
				   <input type="password" name="password" placeholder="Password">
				    			</div>
				    			<button type="submit" name="loginsys">Submit</button>
				    			<a href="#">Dont have an account?</a>
				    			<a href="#">Forgot Password</a><br>
				    		</div>	
				    		</form>
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