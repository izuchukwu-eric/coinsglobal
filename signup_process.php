<?php
session_start();
include("config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php' ;
require 'phpmailer/Exception.php';
// require 'vendor/autoload.php';


if (isset($_POST['signup-btn'])){
	$upline  = $_POST['upline'];
	$upline_email = $_POST['upline_email'];
	$country = $_POST['country'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$email2 = $_POST['email2'];
	
	$email_query = "SELECT * FROM user_signup WHERE email='$email' ";
	$email_query_run = mysqli_query($connect, $email_query);

	if(mysqli_num_rows($email_query_run) > 0) {

		$_SESSION['error'] = "Email Already in use, please try another one";

	}

	$username_query = "SELECT * FROM user_signup WHERE username='$username' ";
	$username_query_run = mysqli_query($connect, $username_query);

	if(mysqli_num_rows($username_query_run) > 0) {

		$_SESSION['error_user'] = "Username Already in use, please try another one";

	}
	else{

		//the next code is for checking the form data
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

 
		//if validation is satified then create a token for the user 
	
		function loopToken(){
			function getToken(){
				return md5(time());
			}
		
			$token = getToken();
			$verified = false;
			$connect = mysqli_connect("localhost","root","","coins_db");
		
			//this is to check that the token is unique
			$get_user_token = "select token from user_signup";
			$run_user_token = mysqli_query($connect,$get_user_token);
			$column_user_token = mysqli_fetch_array($run_user_token);
				
			if(in_array($token,$column_user_token) != true){
										
				$insert_user = "INSERT INTO user_signup (first_name,last_name,username,email,country,password_user,upline,token,verified) VALUES
				('$GLOBALS[first_name]','$GLOBALS[last_name]','$GLOBALS[username]','$GLOBALS[email]','$GLOBALS[country]','$GLOBALS[password]','$GLOBALS[upline]','$token','$verified')";
				
				// $connect->query($insert_user) or die($connect->error);
				 $run_user = mysqli_query($connect,$insert_user);
				 
				 if($run_user){
					//send a confirmation mail
					$mail = new PHPMailer();
					$mail->isSMTP();   
					// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
					$mail->Host='smtp.gmail.com';
					$mail->SMTPAuth= "true";
					$mail->SMTPSecure= "tls";
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
					$mail->Subject='Registration Successful:';
					$mail->setFrom('investments.massage@gmail.com', 'CoinsGlobal Investment');
					$mail->isHTML(true);
					$mail->AddEmbeddedImage(dirname(__FILE__) . '/coinsglobal.png', 'coinsglobal');
					$mail->Body="
					<img style='width: 10rem;' src='cid:coinsglobal'>
					<p>Hello $GLOBALS[username]!</p>
					<p>Thanks for Registering on CoinsGlobal Investment.</p>
					<p>CoinsGlobal Investment helps you make informed decisions,
						get invested, know exactly where you stand.
						From investment to retirement, we offer a variety of plans to help you achieve financial freedom. Our plans are:
					</p>
					<p>
						<b>STANDARD PLAN</b><br/>
						<span>1.5% daily for 3days</span><br/>
						<span>Minimum $200</span><br/>
						<span>Maximum unlimited</span><br/>
						<span>Instant Payments</span><br/>
						<span>Capital return</span>
					</p>
					<p>
						<b>PREMIUM PLAN</b><br/>
						<span>2.0% daily for 13days</span><br/>
						<span>Minimum $3000</span><br/>
						<span>Maximum unlimited</span><br/>
						<span>Instant Payments</span><br/>
						<span>Capital return</span>
				</p>
					<p>
						<b>ULTIMATE PLAN</b><br/>
						<span>2.5% daily 30days</span><br/>
						<span>Minimum $6000</span><br/>
						<span>Maximum unlimited</span><br/>
						<span>Instant Payments</span><br/>
						<span>Capital return</span>
					</p>
					<p>
						<b>RETIREMENT PLAN</b><br/>
						<span>3.0% daily 300days</span><br/>
						<span>Minimum $15000</span><br/>
						<span>Maximum unlimited</span><br/>
						<span>Instant Payments</span><br/>
						<span>Capital return</span>
					</p>
					<p>Support Team.</p>
					<span>CoinsGlobal Investment</span> 
					";
					$mail->addAddress("$GLOBALS[email]");
					if($mail->send()) {
					// echo "Email sent!";
					header('location: welcomepage.php');
					}else{
					echo "An Error Occured, Pls check your connection!";
					}
					$mail->smtpClose();
				}

				
				
							

					
										
				if($GLOBALS['upline'] != ''){
					//send an email to the upline
    		
					$mail = new PHPMailer();
					// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
					$mail->isSMTP();  
					$mail->Host='smtp.gmail.com';
					$mail->SMTPAuth=true;
					$mail->SMTPSecure= "tls";
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
					$mail->Subject= 'someone just registered using your referral link';
					$mail->setFrom('investments.massage@gmail.com', 'CoinsGlobal Investment');
					$mail->isHTML(true);
					$mail->AddEmbeddedImage(dirname(__FILE__) . '/coinsglobal.png', 'coinsglobal');
					$mail->Body="
					<img style='width: 10rem;' src='cid:coinsglobal'>
					<p align=left>Hello $GLOBALS[upline], </p>
					<p>$GLOBALS[first_name] $GLOBALS[last_name] just registered using your referral link, you will be entitled to 5% of his/her deposit</p>
					<p>Thank you for using the referral program</p>
					<p>
						<a href='http://coinsglobals.com/login.php'>
								<button style='background-color: #007F5F; color: #ffffff; padding: 15px 10px; border: none; border-radius: 10px;'>
									<span>Login to your Dashboard</span>
								</button>
						</a>
					</p>
					<p>Support Team.</p>
					<span>CoinsGlobal Investment</span> ";
					$mail->addAddress("$GLOBALS[upline_email]");
						if($mail->send()) {
							echo "Email sent!";	
						}else{
							echo "Error!";
						}
						$mail->smtpClose();  

					}
							
								
			} 
			elseif(in_array($token,$column_user_token) == true){
				function getToken2(){
						return md5(time());
						
				}
	
				$token = getToken2();
				loopToken();
			}
		}
		loopToken();
			
    }
}



	




				
	

?>