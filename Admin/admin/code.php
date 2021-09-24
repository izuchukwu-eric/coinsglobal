<?php
session_start();
require 'includes/config.php';

// $connect = mysqli_connect("localhost","root","","coins_db");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


    //this is used to update the admins login details
    if(isset($_POST['updatebtn'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $query = "UPDATE `admin` SET username='$username', password_user='$password' WHERE id='$id' ";
        $query_run = mysqli_query($connect,$query);

        if($query_run){
            $_SESSION['success'] = "Update Successful, please login again to see changes";
            header('Location: settings.php');
        }
        else{
            $_SESSION['status'] = "Update Failed!";
            header('Location: settings.php');
        }
        
    }

    //this is used to delete a user 
    if(isset($_POST['delete_btn'])) {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM user_signup WHERE id='$id' ";
        $query_run = mysqli_query($connect, $query);

        if($query_run)
        {
            $_SESSION['success'] = "A user has been deleted successfully";
            header('Location: manage_users.php');
        }
        else
        {
            $_SESSION['status'] = "Delete Failed!";
            header('Location: manage_users.php');
        }
    }


    //this is to delete a deposit request
    if(isset($_POST['delete'])) {
        $id = $_POST['request_id'];

        $query = "DELETE FROM deposit_request WHERE id='$id' ";
        $query_run = mysqli_query($connect, $query);

        if($query_run)
        {
            $_SESSION['success'] = "A request has been deleted successfully";
            header('Location: deposit_requests.php');
        }
        else
        {
            $_SESSION['status'] = "Delete Failed!";
            header('Location: deposit_requests.php');
        }
    }



     //this is to delete a withdrawal request
     if(isset($_POST['btn_delete'])) {
        $id = $_POST['withdraw_id'];

        $query = "DELETE FROM withdrawal_request WHERE id='$id' ";
        $query_run = mysqli_query($connect, $query);

        if($query_run)
        {
            $_SESSION['success'] = "A request has been deleted successfully";
            header('Location: withdrawal_requests.php');
        }
        else
        {
            $_SESSION['status'] = "Delete Failed!";
            header('Location: withdrawal_requests.php');
        }
    }


     //this is to accept a withdrawal request
     if(isset($_POST['accept_btn'])) {
        $id = $_POST['accept_id'];
        $username = $_POST['accept_username'];
        $email = $_POST['accept_email'];
        $coin = $_POST['accept_coin'];
        $wallet = $_POST['accept_wallet'];
        $amount = $_POST['accept_amount'];
        $verified = true;

        $query = "UPDATE withdrawal_request SET verified=$verified WHERE id='$id' ";
        $query_run = mysqli_query($connect, $query);

        if($query_run)
        {    
        //this is to send the confirmation mail
        require 'phpmailer/PHPMailer.php';
        require 'phpmailer/SMTP.php';
        require 'phpmailer/Exception.php';

        $mail = new PHPMailer;
        $mail->isSMTP();  
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port=587;
        $mail->SMTPAutoTLS = false;
        $mail->SMTPOptions = array(
          'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
          );

          $mail->Username='investments.massage@gmail.com';
          $mail->Password='investment2002';
          $mail->Subject='Withdrawal Approval';
          $mail->setFrom('investments.massage@gmail.com', 'CoinsGlobal Investment');
          $mail->AddEmbeddedImage(dirname(__FILE__) . '/coinsglobal.png', 'coinsglobal');
          $mail->isHTML(true);
          $mail->Body="
          <img style='width: 10rem;' src='cid:coinsglobal'>
          <p align=left>Hello $username! </p>
          <p>Your withdrawal request has been approved successfully, your $coin has been sent to your $coin wallet address</p>
          <span>Amount: $$amount </span><br/>
          <span>Wallet Address: $wallet </span>
          <p>
          <a href='http://coinsglobal.com/login.php'>
              <button style='background-color: #007F5F; color: #ffffff; padding: 10px 20px; border: none; border-radius: 10px;'>
               <span>Login</span>
              </button>
          </a>
        </p>
          <p>Thank you for using our services! if you face any problem feel free to contact us anytime.</p>
          <p>Support Team.</p>
          <span>CoinsGlobal Investment</span>
          ";
          $mail->addAddress($email);
          if($mail->send()) {
            echo "Email sent!";
          }else{
            echo "Error!";
          }
          $mail->smtpClose();

          $_SESSION['success'] = "A request has been accepted successfully";

        }
        else
        {
            $_SESSION['status'] = "Accept Failed!";
        }

        header('Location: withdrawal_requests.php');

    }


     //this is to accept a deposit request
     if(isset($_POST['btn_accept'])) {
        $id = $_POST['deposit_id'];
        $username = $_POST['deposit_username'];
        $email = $_POST['deposit_email'];
        $token = $_POST['deposit_token'];
        $amount = $_POST['deposit_amount'];
        $coin = $_POST['deposit_coin'];
        $verified = true;

        $query = "UPDATE deposit_request SET verified=$verified WHERE id='$id' ";
        $query_run = mysqli_query($connect, $query);


        if($query_run)
        {
            
          //this is to send the confirmation mail
          require 'phpmailer/PHPMailer.php';
          require 'phpmailer/SMTP.php';
          require 'phpmailer/Exception.php';

          $mail = new PHPMailer;
          $mail->isSMTP();  
          $mail->Host='smtp.gmail.com';
          $mail->SMTPAuth=true;
          $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
          $mail->Port=587;
          $mail->SMTPAutoTLS = false;
          $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
  
            $mail->Username='investments.massage@gmail.com';
            $mail->Password='investment2002';
            $mail->Subject='Your account has been funded';
            $mail->setFrom('investments.massage@gmail.com', 'CoinsGlobal Investment');
            $mail->AddEmbeddedImage(dirname(__FILE__) . '/coinsglobal.png', 'coinsglobal');
            $mail->isHTML(true);
            $mail->Body="
            <img style='width: 10rem;' src='cid:coinsglobal'>
            <p align=left>Hello $username! </p>
            <p>Your account has been funded with $coin </p>
            <span>Amount: $$amount </span>
            <p>
            <a href='http://coinsglobal.com/login.php'>
                <button style='background-color: #007F5F; color: #ffffff; padding: 10px 20px; border: none; border-radius: 10px;'>
                 <span>Login</span>
                </button>
            </a>
            </p>
            <p>Thank you for using our services! if you face any problem feel free to contact us anytime.</p>
            <p>Support Team.</p>
            <span>CoinsGlobal Investment</span>
            ";
            $mail->addAddress($email);
            if($mail->send()) {
                echo "Email sent!";
              }else{
                echo "Error!";
              }
              $mail->smtpClose();
            
            $_SESSION['success'] = "A request has been accepted successfully";
        }
        else
        {
            $_SESSION['status'] = "Accept Failed!";
        }

        header('Location: deposit_requests.php');

    }

?>