<!DOCTYPE html>
<html>
<head>
  <title>User Management </title>

  <!-- start here link -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/innerpage.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fixeddesign.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker2.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker3.css" />



</head>
<body>

<header>


<div class="main-header">

<div class="header-main-navigation">
<div id="mainNavigation">
    <div class="main-logo-section">
		<div class="logo-content-wd">
			<a href="javascript:void(0);" title="Homepage">Users </a>
		</div>
    </div>

	<div class="main-top-menu">
		<div class="collapse navbar-collapse btnCollapse main-parent">
			<ul class="nav navbar-nav">
				<li class="active hztl-menu-li homeBtn" style=""><a href="<?php echo site_url('index.php/users/staffgrid'); ?>" id="homebtnlogo"><i class="icon ion-android-home"></i></a></li>

				<li class="dropdown hztl-menu-li hrmanagBtn main-hr">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">User-Managment <span class="fa fa-angle-down"></span></a>
				</li>

       <!-- start here hr  under li -->
            <li class="submenu-hr-managment hr-cust"> <a href="<?php echo site_url('index.php/users/adduser'); ?>">Create Users </a> </li>

            <!-- start here submenu-Customer li -->
            <li class="submenu-Customer submenu-Customer-close"> <a href="#"><i class="icon ion-android-close"></i> </a> </li>
            <!-- end here submenu-Customer li -->


 

      </ul>
    </div>

  </div>


	<div class="header-main-login">
		<div class="login-content-wd">
			<ul> 
				<li class="ih-menu"> <a class="question2" href="javascript:void(0)" id="loginradial" title="Login"> <i class="icon ion-android-settings"></i></a></li>
			</ul>
		</div>
</div>

</div>

</div>
</div>
<div class="radial_set" id="radial_1">
    <div class="radial_icons">
     <a href="<?php echo site_url('index.php/users/staffgrid'); ?>" id="R-icon1" title="User"> <i class="icon ion-android-contacts nicons1"></i></a>

      <a href="javascript:void(0)" id="R-icon2" title="Notification"> <i class="icon ion-android-notifications"></i></a>

      <a href="javascript:void(0)" id="R-icon3" title="Admin Note"> <i class="icon ion-android-clipboard"></i></a>

      <a href="javascript:void(0)" id="R-icon4" title="Settings"> <i class="icon ion-android-settings"></i></a>

      <a href="<?php echo site_url('index.php/signup/logout'); ?>" id="R-icon5" title="Logout"> <i class="fa fa-sign-out"> </i></a>

      <a href="javascript:void(0)" id="R-icon6" title="Mail Box"><i class="icon ion-email-unread"></i></a>

      <a href="javascript:void(0)" id="R-icon8" title="Record"> <i class="icon ion-android-unlock"></i></a>

      <a href="javascript:void(0)" id="R-icon9" title="Help"> <i class="icon ion-ios-help"></i></a>  

       <a href="javascript:void(0)" id="R-icon10" title="Language"> <i class="fa fa-language" aria-hidden="true"></i></a>

       <a href="javascript:void(0)" id="R-icon11" title="Status"> <i class="icon ion-podium"></i></a>

      <a href="javascript:void(0)" id="plus_hide"> <div id="R-icon7"> 
		<i class="icon ion-android-close"></i> </div> </a>

    </div>
</div>
</header>
