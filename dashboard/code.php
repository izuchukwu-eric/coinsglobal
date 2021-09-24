<?php
    session_start();
    include("config.php");
    if(!$_SESSION['username'] && !$_SESSION['email'])
    {
      header('Location: ../login.php');
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    //this is for the deposit request
    if(isset($_POST['save_btn'])){
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $token =$_SESSION['token'];
        $plan = $_SESSION['plan'];
        $amount = $_SESSION['amount'];
        $coin = $_SESSION['coin'];


        if($_SESSION['plan'] == 'Standard Plan (1.5% Daily Profit)'){
            $subtotal = $amount + $amount * 1.5/100 * 3;
         }
         elseif($_SESSION['plan'] == 'Premium Plan (2.0% Daily Profit)'){
             $subtotal = $amount + $amount * 2.0/100 * 15;
         }
         elseif($_SESSION['plan'] == 'Ultimate Plan (2.5% Daily Profit)'){
             $subtotal = $amount + $amount * 2.5/100 * 30;
         }
         elseif($_SESSION['plan'] == 'Retirement Plan (3.0% Daily Profit)'){
             $subtotal = $amount + $amount * 3.0/100 *  300;
         }
         
        $query = "INSERT INTO deposit_request (username,email,plan,amount,subtotal,coin,token) VALUES ('$username','$email','$plan','$amount','$subtotal','$coin','$token')";

        $query_run = mysqli_query($connect,$query);

        if($query_run)
        {
            $_SESSION['success'] = "Your deposit has been saved, and will be activated once you make the transaction";
            header('Location: confirmdeposit.php');
        }
        else
        {
            $_SESSION['status'] = "Deposit Failed!";
            header('Location: confirmdeposit.php');
        }

    }






    // this is for the withdrawal request
    if(isset($_POST['withdraw_btn'])) {
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $coin = $_POST['coin'];
        $wallet = $_POST['wallet'];
        $amount = $_POST['amount'];


        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $sanitized_wallet = test_input($wallet);
       
        $query = "INSERT INTO withdrawal_request (username,email,coin,wallet,amount) VALUES ('$username','$email','$coin','$sanitized_wallet','$amount')";
        $query_run = mysqli_query($connect,$query);
        

        // $connect->query($query) or die($connect->error);

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
          $mail->Subject='Your withdrawal request is been processed';
          $mail->setFrom('investments.massage@gmail.com', 'CoinsGlobal Investment');
          $mail->isHTML(true);
          $mail->AddEmbeddedImage(dirname(__FILE__) . '/coinsglobal.png', 'coinsglobal');
          $mail->Body="
          <img style='width: 10rem;' src='cid:coinsglobal'>
          <p align=left>Hello $username </p>
          <p>Your withdrawal request has been recieved and its been processed.</p>
          <span>Amount:$$amount </span><br/>
          <span>Withdrawal Method: $coin </span><br/>
          <span>Wallet Address: $wallet </span>
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

          $_SESSION['success'] = "Your withdrawal request is been processed, you will receive a confirmation mail soon";

        }
        else
        {
            $_SESSION['status'] = "Withdrawal Failed!";
        }

        header('Location: withdrawal.php');


      }


      /*
      this is to update the users account details
      */
    if(isset($_POST['updatebtn'])) {
        $id = $_POST['edit_id'];
        $firstname = $_POST['edit_firstname'];
        $lastname = $_POST['edit_lastname'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];

        $query = "UPDATE user_signup SET first_name='$firstname', last_name='$lastname', username='$username', email='$email', password_user='$password' WHERE id='$id' ";
        $query_run = mysqli_query($connect,$query);

        if($query_run){
            $_SESSION['success'] = "Update Successful, please login again to see changes";
            header('Location: account.php');
        }
        else{
            $_SESSION['status'] = "Update Failed!";
            header('Location: account.php');
        }
    }








?>