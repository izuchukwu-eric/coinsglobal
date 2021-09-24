<?php
  include('signup_process.php');
  // use PHPMailer\PHPMailer\PHPMailer;
  // use PHPMailer\PHPMailer\SMTP;
  // use PHPMailer\PHPMailer\Exception;
  
  // require 'phpmailer/PHPMailer.php';
  // require 'phpmailer/SMTP.php';
  // require 'phpmailer/Exception.php';
  // require 'vendor/autoload.php';
  // if($_SESSION['username'] == "" || $_SESSION['email'] == "")
  // {
  //   header('location: signup.php');
  //     // print_r($_SESSION);
  // }

  //update the users verified status to true
//   if(isset($_GET['uid'])){
//     $uid = $_GET['uid'];
//     $verified= true;
//     $insert_user = "UPDATE user_signup SET verified='$verified' WHERE username='$uid'";
    
//     $run_user = mysqli_query($connect,$insert_user);
    
// }
  
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="zxx"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Coinsglobal is a cryptocurrency investment company ">
  
  <meta name="author" content="Coinsglobal">

  <title>Welcome page</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    
    .form-div{
      margin: 50px auto 50px;
      padding: 25px 15px 10px 15px;
      border: 1px solid #06D6A0;
      border-radius: 5px;
      font-size: 1.1em;
    }
    .form-div.welcome{
      margin-top: 100px;
      margin-bottom: 150px;
    }
  </style>

  <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'c72ad3113d178229e17598cc3ddbda05568d2042';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class="preloader">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  
<!--
Fixed Navigation
==================================== -->
<section class="top-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="currency-status">
                    <li>
                        <a href="#">
                            <i class="tf-ion-arrow-down-b down-status"></i>
                            <span>BTC/USD</span>
                            <span>15046.07</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup up-status"></i>
                            <span>ETH/USD</span>
                            <span >843.0005</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup up-status"></i>
                            <span>BCH/USD</span>
                            <span>2648.1377</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup up-status"></i>
                            <span>BTG/USD</span>
                            <span>278.0000</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup down-status"></i>
                            <span>DASH/USD</span>
                            <span>1131.8100</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup down-status"></i>
                            <span>XRP/USD</span>
                            <span>2.1956</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup up-status"></i>
                            <span>ZEC/USD</span>
                            <span>2.1956</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="header  navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/coinsglobal.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="tf-ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="About.html">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="Rules.html">Rules</a>
                          </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.html">F.A.Q</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signup.php">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
</section>

<div class="container-fluid ">
  <div id="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div welcome ">
            <h3>Registration Completed</h3>
            <a href="logout_process.php" style="color: red;">logout</a>
            <div class="alert alert-success">
            Thank you for joining our program.
            You are now an official member of this program. 
            You can login to your account to start investing with us and use all the services that are available for our members.
            <strong>Important: Do not provide your login and password to anyone!</strong>
            </div>
        </div>
    </div>
</div>
</div>

               

<footer id="footer" class="bg-one">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <h3>Our Services</h3>
            <ul>
              <li><a href="#">Easy and Secure</a></li>
              <li><a href="#">Instant Payment</a></li>
              <li><a href="#">Strong Network</a></li>
              <li><a href="#">Professional team</a></li>
              <li><a href="#">24/7 Support</a></li>
              <li><a href="#">Stable Income</a></li>
            </ul>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">FAQ’s</a></li>
              <li><a href="#">Support</a></li>
            </ul>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3">
              <h3>Contacts</h3>
              <ul>
                <li><a href="">Email:</a></li>
                <li><a href="mailto:coinsglobalinvestment@gmail.com">coinsglobalinvestment@gmail.com</a></li>
  
              </ul>
            </div>
        </div>
      </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
      <h5>Copyright 2017 @ Coinsglobal</h5>
    </div>
  </footer> <!-- end footer -->

    <!-- end Footer Area
    ========================================== -->

    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html>