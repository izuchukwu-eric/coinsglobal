<?php
session_start();
include("config.php");


   
if (isset($_POST['login'])){
   $email = $_POST['email'];
   $password = $_POST['password'];
  
  
  
 //check for unique password 

 
  //the next code is for checking the form data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

  //if validation is satified then create a token for the user 
  
  
        
         $get_user = "SELECT * FROM user_signup WHERE email='$email' AND password_user='$password'";
         
        $run_user = mysqli_query($connect,$get_user);
        $row_user = mysqli_fetch_array($run_user);
        $user_code = $row_user['token'];
        $user_email = $row_user['email'];
        $user_password = $row_user['password_user'];
        $user_name = $row_user['username'];
        $user_createdate = $row_user['createdate'];
        $user_firstname = $row_user['first_name'];
        $user_lastname = $row_user['last_name'];
        $user_id = $row_user['id'];

        if($user_email  == ""){
          $_SESSION['login_error'] = "Your Email/Password is Incorrect";
        }else{
            $_SESSION['token'] = $user_code;
            $_SESSION['email'] = $user_email;
            $_SESSION['username'] = $user_name;
            $_SESSION['createdate'] = $user_createdate;
            $_SESSION['password_user'] = $user_password;
            $_SESSION['first_name'] = $user_firstname;
            $_SESSION['last_name'] = $user_lastname;
            $_SESSION['id'] = $user_id;
            $_SESSION['last_time'] = date('d/m/y H:i:s');
            // $_SESSION['login_login_timestamp'] = time();

            header('location: dashboard/index.php');
            // echo"<script>alert('window.open('user/dashboard/index.php','_self')')</script>";
            echo"<script>alert('login successful!')</script>";
        }
        
         
      
        
         
        
              
   
}




  

  




        
  

?>