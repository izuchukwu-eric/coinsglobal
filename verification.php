<?php
require_once('config.php');
if($_GET){
    if(isset($_GET['email'])){
        $email = $_GET['email'];
        if($email == ''){
            unset($email);
        }
      }
      if(isset($_GET['token'])){
        $token = $_GET['token'];
        if($token == ''){
            unset($token);
        }
      }
      if(!empty($email) && !empty($token)){
          $select = $connect->prepare("SELECT id FROM user_signup WHERE email=:email AND token=:token");
          $select->execute(array(
              'email' => $email,
              'token' => $token
          ));

          if($select->fetchColumn() > 0){
              $update = $connect->prepare("UPDATE user_signup SET verified=1, token='' WHERE email=:email");
              $update->execute(array(
                  'email' => $email
              ));
              echo 'success';
          }
      }
}
?>