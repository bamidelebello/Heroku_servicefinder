<?php

       if($user_name != null and $password != null ){
          echo "fine";
        }else{
          echo "not at all";
        }






  require 'config.php';

  if(isset($_POST['login'])) {
    $errMsg = '';

    // Get data from FORM
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == '')
      $errMsg = 'Enter username';
    if($password == '')
      $errMsg = 'Enter password';

    if($errMsg == '') {
      try {
        $stmt = $connect->prepare('SELECT id, fullname, username, password, secretpin FROM pdo WHERE username = :username');
        $stmt->execute(array(
          ':username' => $username
          ));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        //print_r($data);

        if($data == false){
          $errMsg = "User $username not found.";
        }
        else {
          if($password == $data['password']) {
            $_SESSION['name'] = $data['fullname'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['secretpin'] = $data['secretpin'];
                          
            header('Location: dashboard.php');
            exit;
          }
          else
            $errMsg = 'Password not match.';
        }
      }
      catch(PDOException $e) {
        $errMsg = $e->getMessage();
      }
    }
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
        
        $stmt=$connect->prepare('SELECT * FROM provider WHERE user_name=:user_name AND password=:password');
        $stmt->execute(array(
              ':user_name'=>$user_name,
              ':password'=>$password
        ));
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
      

        if($password == $data['password'] AND $user_name == $data['user_name']){
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
            // $_SESSION['loggedinAsProvider'] = "Yes";
             $_SESSION['ÏsProviderLoggedIn'] = "Yes";
          header('Location:company-profile-settings.php');
            exit();
        }
        // if($data == false){
        //  $errMsg = "User user name not found.";
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