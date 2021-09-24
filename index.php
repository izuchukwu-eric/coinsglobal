<?php
session_start();

if(isset($_GET['ref'])){
    $_SESSION['ref'] = $_GET['ref'];
}
else{
    session_unset();
}



?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Coinsglobal is a cryptocurrency investment company ">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta name="author" content="Coinsglobal">

  <title>Coinsglobal</title>

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

<body id="body" class="body">

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
                    <marquee>
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
                </marquee>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
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


 <!--
Welcome Slider
==================================== -->

<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center mb-4 mb-lg-0">
				<div class="video-player">
					<img class="img-fluid rounded" src="images/crypto.jpg" alt="">
					<a class="play-icon">
						<i class="tf-ion-ios-play" data-video="https://youtu.be/OiDCXdmEe6U"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="block">
					<h2>Bitcoin is a remarkable cryptographic achievement</h2>
					<p>It is a decentralized digital currency without a central bank or single administrator that can be sent from user to user on the peer-to-peer bitcoin network without the need of intermediaries.
                        Bitcoins are created as a reward for a process known as mining.
                    </p>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a data-scroll href="About.html" class="btn btn-main">Explore Us</a>		
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>	

<section class="counter section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-3">
                <div class="counters-item">
                    <span>$50B+</span>
                    <p>Bitcoin Served</p>
                </div>
            </div>
            <div class="col-md-3 col-3">
                <div class="counters-item">
                    <span>10M+</span>
                    <p>Server Build</p>
                </div>
            </div>
            <div class="col-md-3 col-3">
                <div class="counters-item">
                    <span>68</span>
                    <p>Countries Supported</p>
                </div>
            </div>
            <div class="col-md-3 col-3">
                <div class="counters-item kill-border">
                    <span>10M</span>
                    <p>Active Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
Start About Section
==================================== -->
<section class="about-2 section bg-gray" id="about">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 align-self-center mb-4 mb-md-0">
                <div class="align-self-center">
    				<h2>About our Company</h2>
    				<p>Coinsglobal is a reliable and genuine platform created for the benefit of every one to raise investors above fraudulent activities to achieve wealth and happiness by investing and getting back your investments</p>
                    <p>Coinsglobal is the company of beneficial short-term and long-term investments aimed at making a profit by investing in constantly growing shares. </p>
                    <span>Address: 4 Hartington Road, Twickenham, London England, TW1 3EN</span>
                    <a href="About.html" class="btn btn-main">Learn More</a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div>
                    <h2>Company Documents</h2>
                   <a href="images/Coinsglobal.pdf"><img src="images/doc.jpg" alt="" style="width: 15.5rem; height: 18rem; margin-left: 3rem;"></a>
                </div>
            </div> 
            <div class="col-12 col-md-4">
                <div>
                    <h2 class="ml-5">Letter of thanks </h2>
                   <a href="images/award.jpg"><img src="images/award.jpg" alt="" style="width: 15.5rem; height: 18rem; margin-left: 3rem;"></a>
                </div>
            </div> 	 	
		</div>
	</div>
</section>

  <!-- End section -->
			
			
			

<!--
Start About Section
==================================== -->
<section class="service-2 section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="title text-center">
          <h4>Invest with us</h4>
          <h2>How To Invest</h2>
          <span class="border"></span>
        <p>In a wide variety of investment companies, it is difficult to make the final choice, but only we offer the best conditions.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 p-0">
        <div class="service-item text-center">
            <span class="count">1.</span>
            <h4>Register</h4>
            <p>To become a member of the project, you need to register. Click on the appropriate button on the page and follow the instructions.</p>
        </div>
      </div>
      <div class="col-md-4 p-0">
        <div class="service-item text-center">
          <span class="count">2.</span>
          <h4>Select a service plan</h4>
          <p>It is quite easy to make a deposit - make a deposit by selecting a service plan in your personal account or on the appropriate page.</p>
        </div>
      </div>
      <div class="col-md-4 p-0">
        <div class="service-item text-center">
          <span class="count">3.</span>
          <h4>Get a profit</h4>
          <p>Percentage on the deposit will be accrued after 24hours - this means that you can withdraw your profits almost immediately</p>
        </div>
      </div>
    </div>    <!-- End row -->
  </div>    <!-- End container -->
</section>   <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section-sm">
	<div class="container">
      <center><h2 style="margin-bottom: 3rem; margin-left: 3rem; color: black;" class="refer">Referral System</h2></center>
        <span style="margin-bottom: 5rem;">Getting a bonus from the company is always nice. Especially when it takes a minimum of effort. Just tell everyone about your success in our company and give your individual link to register a new investor. Once your referral makes a deposit, you earn a profit of 5% of the amount. The sub-referral will bring you 1% of the profit.</span>
		<div class="row">
            <div class="col-md-6 p-0">
                <div class="service-item text-center">
                    <span class="count">1.</span>
                    <h4 style="color: black;">Level 1-5%</h4>
                    <p>Your profit from referrals, which you invite by yourself.</p>
                </div>
              </div>
              <div class="col-md-6 p-0">
                <div class="service-item text-center">
                    <span class="count">2.</span>
                    <h4 style="color: black;">Level 2-1%</h4>
                    <p>The profit that will be accrued from sub-referrals – your second-tier partners.</p>
                </div>
              </div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Pricing section
		=========================================== -->
<section class="pricing-table section" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title text-center">
                    <h4>Easy Planing</h4>
                    <h2>Plans</h2>
                    <span class="border"></span>
                    <p>
                        To participate in the investment project, you must make a deposit by selecting one of the proposed service plans. Since we are working with Bitcoin, your investment should also be in the cryptocurrency.
                     </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="pricing-item">
                                    <h3>STANDARD PLAN</h3>
                                    <div class="pricing-body">
                                        <div class="price">
                                            <span>1.5%</span>
                                            <h2>Daily for 3days</h2>
                                        </div>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <p>Min/Max amount:</br> $200 - unlimited.</p>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <p>Deposit: </br> included in payments</p>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <a class="btn btn-main" href="signup.php">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="pricing-item">
                                    <h3>PREMIUM PLAN</h3>
                                    <div class="pricing-body">
                                        <div class="price">
                                            <span>2.0%</span>
                                            <h2>Daily for 15days</h2>
                                        </div>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <p>Min/Max amount:</br> $3000 - unlimited.</p>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <p>Deposit: </br> included in payments</p>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <a class="btn btn-main" href="signup.php">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="pricing-item">
                                    <h3>ULTIMATE PLAN</h3>
                                    <div class="pricing-body">
                                        <div class="price">
                                            <span>2.5%</span>
                                            <h2>Daily for 30days</h2>
                                        </div>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <p>Min/Max amount:</br> $6000 - unlimited.</p>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <p>Deposit: </br> included in payments</p>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <a class="btn btn-main" href="signup.php">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="pricing-item">
                                    <h3>RETIREMENT PLAN</h3>
                                    <div class="pricing-body">
                                        <div class="price">
                                            <span>3.0%</span>
                                            <h2>Daily for 300days</h2>
                                        </div>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <p>Min/Max amount:</br> $15000 - unlimited.</p>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <p>Deposit: </br> included in payments</p>
                                        <div class="progress" data-percent="45%">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <a class="btn btn-main" href="signup.php">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End container -->
</section> <!-- End section -->

<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
           <center><h2>Testimonies from our satisfied clients</h2></center> 
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item">
                            <div class="block">
    							<!-- client info -->
    							<div class="client-details">
    								<p>"Coinsglobal is the best platform i have ever used, the platform makes everything extremely simple to use and easy to understand. I highly recommend this platform to anyone and everyone who wants to triple their investment in little more than 30 days"</p>
    							</div>
    							<!-- /client info -->
    							<!-- client photo -->
                                <div class="media client-meta">
                                  <img class="mr-3 client-thumb" src="images/client-logo/clientimg1.jpg" alt="Generic placeholder image">
                                  <div class="media-body">
                                    <h4 class="mt-0">Ricardo Andres</h4>
                                    <p>Madrid, Spain</p>
                                  </div>
                                </div>
    							
    							<!-- /client photo -->
                            </div>
						</div>
						<!-- /testimonial single -->
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>"I don't think I have seen a more reliable and trustworthy site out there, truly a remarkable site and I am nothing but satisfied with Coinsglobal."</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                  <img class="mr-3 client-thumb" src="images/client-logo/clientimg2.jpg" alt="Generic placeholder image">
                                  <div class="media-body">
                                    <h4 class="mt-0">Stephanie Walker</h4>
                                    <p>California, USA</p>
                                  </div>
                                </div>
                                
                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>"It feels unreal, in just the last month I have made over 15,000 dollars using Coinsglobal. Investing with this site is one of the best decisions I have ever made."</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                  <img class="mr-3 client-thumb" src="images/client-logo/clientimg3.jpg" alt="Generic placeholder image" style="height: 4rem;">
                                  <div class="media-body">
                                    <h4 class="mt-0">Zhong Chang</h4>
                                    <p>Beijing, China</p>
                                  </div>
                                </div>
                                
                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>"Customer service is everything and anything that touches a customer – directly or indirectly. Customer service means servicing customers, and Coinsglobals' is so much more than just solving problems or addressing complaints."</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                  <img class="mr-3 client-thumb" src="images/client-logo/clientimg4.jpg" alt="Generic placeholder image" style="height: 3.5rem;">
                                  <div class="media-body">
                                    <h4 class="mt-0">Bianca Laura</h4>
                                    <p>Warsaw, Poland</p>
                                  </div>
                                </div>
                                
                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>"Let's take most of the money we would've spent on paid advertising and paid marketing and instead of spending it on that, invest it in Coinsglobal and then see the massive result."</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                  <img class="mr-3 client-thumb" src="images/client-logo/clientimg5.jpg" alt="Generic placeholder image" style="height: 4rem;">
                                  <div class="media-body">
                                    <h4 class="mt-0">Marco Ruis</h4>
                                    <p>Lisbon, Portugal</p>
                                  </div>
                                </div>
                                
                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

<!--
Start Blog Section
=========================================== -->
<section class="services section-xs"  id="services">
  <center><h2>Our Proud Sponsors</h2></center>  
	<div class="container">
		<div class="row">
			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6 col-xs-12" >
				<div class="service-block color-bg text-center">
					<div class="service-icon text-center">
						<img src="images/blog/kfc.png" alt="" style="width: 8rem;">
					</div>
				</div>
			</div>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6 col-xs-12" >
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<img src="images/blog/cocacola.png" alt="" style="width: 8rem; ">
					</div>
				</div>
			</div>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6 col-xs-12 mx-auto"  >
				<div class="service-block color-bg text-center">
					<div class="service-icon text-center">
						<img src="images/blog/mastercard.png" alt="" style="width:8rem;">
					</div>
				</div>
			</div>
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12" >
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <img src="images/blog/samsung_logo.png" alt="" style="width: 8rem;">
                    </div>
                </div>
            </div>
            <!-- End Single Service Item -->
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12" >
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <img src="images/blog/paypal.png" alt="" style="width: 8rem;">
                    </div>
                </div>
            </div>
            <!-- End Single Service Item -->
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12" >
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <img src="images/blog/mercedes_logo.png" alt="" style="width: 8rem;">
                    </div>
                </div>
            </div>
            <!-- End Single Service Item -->
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section> 
				

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Open an account for free and start investing Bitcoins now!</h2>
				<p>There is a reason why we have over 10,000,000 active clients investing with us world-wide.</p>
				<a href="signup.php" class="btn btn-main">Get Started</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

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
              <li><a href="index.html">Home</a></li>
              <li><a href="About.html">About</a></li>
              <li><a href="faq.html">FAQ’s</a></li>
              <li><a href="contact.html">Support</a></li>
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
