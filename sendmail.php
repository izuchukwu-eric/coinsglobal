<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

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
    $mail->setFrom($email, $name);
    $mail->addReplyTo($email, $name);
    $mail->isHTML(true);
    $mail->Subject='Contact Form Submission: '.$subject;
    $mail->Body='<p>Name: '.$name.'<br/>Email: '.$email.'<br/>Message: '.$message.'</p>';
    $mail->addAddress('coinsglobalinvestment@gmail.com');
    if($mail->send()) {
        $_SESSION['message'] = "Thanks ".$name." for contacting us. we'll get back to you soon!";
      }else{
        $_SESSION['error'] = "Sorry ".$name." something went wrong, try again later!";
      }
      $mail->smtpClose();
    header('Location: contact.php');
}
?>