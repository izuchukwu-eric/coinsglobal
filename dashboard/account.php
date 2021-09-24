<?php
  include("../login_process.php");
   if(!$_SESSION['username'] && !$_SESSION['email'])
    {
      header('Location: ../login.php');
    }

    // if((time() - $_SESSION['last_login_timestamp']) > 900) //after 15mins of inactivity of the user
    // {
    //   header('Location: logout_process.php');
    // }
?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Coinsglobal is a cryptocurrency investment company">
    <meta name="author" content="CoinsGlobal">
    <title>Account - Dashboard</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/coin.jpg">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->

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
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right mt-2">      
            <div class="text-white">
                    <span>Welcome, <?php echo $_SESSION['username']?></span>
                </div>   
              <!-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li> -->
            </ul>
            <ul class="nav navbar-nav float-right">
              <!-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li> -->
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/account2.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/account1.png" alt="avatar"><span class="user-name text-bold-700 ml-1"></span><?php echo $_SESSION['username']?></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="account.php"><i class="ft-user"></i> Edit Profile</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout_process.php"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo" style="width: 12rem;" alt="Coinsglobal  logo" src="theme-assets/images/logo/coinsglobal.png"/>
              <h3 class="brand-text"></h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="index.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="deposit.php"><i class="ft-save"></i><span class="menu-title" data-i18n="">Make Deposit</span></a>
          </li>
          <li class="nav-item"><a href="withdrawal.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Withdraw Funds</span></a>
          </li>
          <li class=" nav-item"><a href="history.php"><i class="ft-clock"></i><span class="menu-title" data-i18n="">Transaction History</span></a>
          </li>
          <li class=" nav-item"><a href="referral.php"><i class="ft-link"></i><span class="menu-title" data-i18n="">Referrals</span></a>
          </li>
          <li class=" nav-item"><a href="plans.php"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Investment Plans</span></a>
          </li>
          <li class=" active"><a href="account.php"><i class="ft-user"></i><span class="menu-title" data-i18n="">Account Settings</span></a>
          </li>
          <li class=" nav-item"><a href="logout_process.php"><i class="ft-power"></i><span class="menu-title" data-i18n="">Logout</span></a>
          </li>
        </ul>
      </div><a class="btn btn-block btn-glow btn-upgrade-pro mx-1" style="background-color: #007F5F; color: #ffffff; " href="https://coinsglobal.com" target="_blank">VISIT COINSGLOBAL!</a>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Account Details</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Account
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Line Awesome section start -->
<section id="line-awesome-icons">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Edit Account Details</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
                <div class="card-content collapse show">
				<form method="POST" action="code.php">
            <div class="card-body">

            <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                {
                  echo '<h6 style="color: green"> '.$_SESSION['success'].' </h6>';
                  unset($_SESSION['success']);
                }

                if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                {
                  echo '<h6 style="color: red"> '.$_SESSION['status'].' </h6>';
                  unset($_SESSION['status']);
                }
            
            ?>

					<input type="hidden" name="edit_id" value="<?php echo $_SESSION['id']?>">
					<div class="form-group">
							<label> Firstname </label>
							<input type="text" name="edit_firstname" value="<?php echo $_SESSION['first_name']?>" class="form-control" >
						</div>
					<div class="form-group">
							<label> Lastname </label>
							<input type="text" name="edit_lastname" value="<?php echo $_SESSION['last_name']?>" class="form-control" >
						</div>
				   		<div class="form-group">
							<label> Username </label>
							<input type="text" name="edit_username" value="<?php echo $_SESSION['username']?>" class="form-control" >
						</div>
						<div class="form-group">
							<label> Email Address </label>
							<input type="email" name="edit_email" value="<?php echo $_SESSION['email']?>" class="form-control">
						</div>
						<div class="form-group">
							<label> Password </label>
							<input type="password" name="edit_password" value="<?php echo $_SESSION['password_user']?>" class="form-control" >
						</div>
					      <a href="index.php" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn" style="background-color: #007F5F; color: #ffffff; " name="updatebtn">Update</button>
                      
				     </div>
				   </form> 
                </div>
             </div>
       </div>
  </div>
     
</section>
<!-- // Line Awesome section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://coinsglobal.com" target="_blank">CoinsGlobal</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://coinsglobal.com/contact.php" target="_blank"> Support</a></li>
        </ul>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>