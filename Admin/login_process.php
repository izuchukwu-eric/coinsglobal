<?php
session_start();
include('config.php');




if(isset($_POST['login_btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

       
  //login in the admin
  
  $get_user = "SELECT * FROM `admin` WHERE username='$username' OR password_user='$password' ";
   $run_user = mysqli_query($connect, $get_user);
   
   
  if(mysqli_fetch_array($run_user)){
    //login success
    $_SESSION['username'] = $username;
    $_SESSION['password_user'] = $password;
    
    header('location: ./admin/index.php');
  }else{
    echo "<script>alert('Wrong Credentials!')</script>";
  
  }

  
}

?>