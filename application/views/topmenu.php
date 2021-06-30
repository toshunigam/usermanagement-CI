<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle hidden-md-up"></a>
    <!-- Navbar Right Menu-->
    <div class="navbar-custom-menu">
      <ul class="top-nav" style="float: left !important; width: 100%;">
        <!--Notification Menu-->
	  
		  <!-- Dashboard Menu-->
          <li class="dropdown" id="drop-mange">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>Dashboard</b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>
            </a>
            <ul class="dropdown-menu settings-menu">
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Home </span></a></li>
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Email </span></a></li>
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Invoice </span></a></li>
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Report </span></a></li>
			  <?php if($this->session->userdata('usertype')=='Super Admin'){ ?>
			  <li><a href="<?php echo site_url('index.php/roles/grid'); ?>"><i class="icon-arrow-right"></i><span> Permission </span></a></li>
			  <?php } ?>
            </ul>
          </li>

          <!-- User Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>Menu</b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>

            </a>
            <ul class="dropdown-menu settings-menu">
				<li><a href="#"><i class="icon-arrow-right"></i><span> Home </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Email </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Invoice </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Report </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Permission </span></a></li>
            </ul>
          </li>
		  <?php if($this->session->userdata('usertype')=='staff' || $this->session->userdata('usertype')=='Super admin'){ ?>
           <!-- Taxi Dispatcher Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>Taxi Dispatcher </span>
            </a>
          </li>
		  <?php } ?>
		  <?php if(is_access('zones',$this->session->userdata('usertype'))){ ?>
          <!-- Zones Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>  Zones </b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>

            </a>
			<ul class="dropdown-menu settings-menu">
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Home </span></a></li>
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Email </span></a></li>
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Invoice </span></a></li>
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Report </span></a></li>
			  <li><a href="#"><i class="icon-arrow-right"></i><span> Permission </span></a></li>
            </ul>
          </li>
		  <?php } ?>
		  <?php if(is_access('bookings',$this->session->userdata('usertype'))){ ?>
          <!-- Bookings Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>  Bookings </b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>

            </a>
            <ul class="dropdown-menu settings-menu">
			<?php if(is_access('bookings',$this->session->userdata('usertype'),'is_listing')){ ?>
			  <li><a href="<?php echo site_url('index.php/bookings/grid'); ?>"><i class="icon-arrow-right"></i><span> Bookings List </span></a></li>
			<?php } ?>
			  <?php if(is_access('bookings',$this->session->userdata('usertype'),'is_add')){ ?>
			  <li><a href="<?php echo site_url('index.php/bookings/add'); ?>"><i class="icon-arrow-right"></i><span> Create Booking </span></a></li>
			  <?php } ?>
            </ul>
          </li>
		  <?php } ?>
		  <?php if(is_access('subscription',$this->session->userdata('usertype'))){ ?>
          <!-- Subscription Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>  Subscription </b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>

            </a>
			<?php //var_dump(is_access('subscription','is_listing'));?>
            <ul class="dropdown-menu settings-menu">
				<?php if(is_access('subscription',$this->session->userdata('usertype'),'is_listing')){ ?>
			  <li><a href="<?php echo site_url('index.php/subscription/grid'); ?>"><i class="icon-arrow-right"></i><span> Subscription Listing </span></a></li>
				<?php } ?>
				<?php if(is_access('subscription',$this->session->userdata('usertype'),'is_add')){ ?>
			  <li><a href="<?php echo site_url('index.php/subscription/add'); ?>"><i class="icon-arrow-right"></i><span> Add Subscription </span></a></li>
			  <?php } ?>
            </ul>
          </li>
		  <?php } ?>
		  <?php if(is_access('driver',$this->session->userdata('usertype'))){ ?>
          <!-- Driver management Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span> Driver Management </b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>
            </a>
            <ul class="dropdown-menu settings-menu">
			<?php if(is_access('driver',$this->session->userdata('usertype'),'is_listing')){ ?>
				<li><a href="<?php echo site_url('index.php/driver/grid'); ?>"><i class="icon-arrow-right"></i><span> Driver Listing </span></a></li>
			<?php } ?>
			</ul>
          </li>
		  <?php } ?>
		  <?php if(is_access('customer',$this->session->userdata('usertype'))){ ?>
          <!-- Customer Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>  Customers </b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>

            </a>
            <ul class="dropdown-menu settings-menu">
				<li><a href="#"><i class="icon-arrow-right"></i><span> Home </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Email </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Invoice </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Report </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Permission </span></a></li>
            </ul>
          </li>
		  <?php } ?>
		<?php if(is_access('users',$this->session->userdata('usertype'))){ ?>
          <!-- HR managment Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>   HR Management  </b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>

            </a>
            <ul class="dropdown-menu settings-menu">
			<?php if(is_access('users',$this->session->userdata('usertype'),'is_listing')){ ?>
				<li><a href="<?php echo site_url('index.php/users/staffgrid'); ?>"><i class="icon-arrow-right"></i><span> User List </span></a></li>
			<?php  } ?>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Email </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Invoice </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Report </span></a></li>
				<li><a href="#"><i class="icon-arrow-right"></i><span> Permission </span></a></li>
            </ul>
          </li>
		<?php } ?>
		<?php if(is_access('organisation',$this->session->userdata('usertype'))){ ?>
		  <!-- Company Info Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span>   Company Info  </b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>

            </a>
            <ul class="dropdown-menu settings-menu">
			<?php if(is_access('organisation',$this->session->userdata('usertype'),'is_listing')){ ?>
			  <li><a href="<?php echo site_url('index.php/organisation/info'); ?>"><i class="icon-arrow-right"></i><span> Company List </span></a></li>
			<?php } ?>
			<?php if(is_access('organisation',$this->session->userdata('usertype'),'is_view')){ ?>
			  <li><a href="<?php echo site_url('index.php/organisation/profile'); ?>"><i class="icon-arrow-right"></i><span> Company Profile </span></a></li>
			<?php } ?>
            </ul>
          </li>
		<?php } ?>
		<?php if(is_access('vehicle',$this->session->userdata('usertype'))){ ?>
		  <!-- Vehicle Managment Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span> Vehicle Management </b> <!-- <i class=" icofont icofont-simple-down"></i> --></span>

            </a>
            <ul class="dropdown-menu settings-menu">
			<?php if(is_access('vehicle',$this->session->userdata('usertype'),'is_listing')){ ?>
			  <li><a href="<?php echo site_url('index.php/vehicle/grid'); ?>"><i class="icon-arrow-right"></i><span> Vehicle List </span></a></li>
			<?php } ?>
			<li><a href="#"><i class="icon-arrow-right"></i><span> Vehicle Status </span></a></li>	
			<li><a href="#"><i class="icon-arrow-right"></i><span> Alcohol Test </span></a></li>	
            </ul>
          </li>
		<?php } ?>

          <!-- User Menu-->
          <li class="dropdown">
            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
              <span><img class="rounded-circle " src="<?php echo base_url();?>assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
              <span><?php echo $this->session->userdata('username'); ?> <i class=" icofont icofont-simple-down"></i></span>

            </a>
            <ul class="dropdown-menu settings-menu">
              <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
              <li><a href="<?php echo site_url('index.php/signup/profile'); ?>"><i class="icon-user"></i> Profile</a></li>
              <li class="p-0">
                <div class="dropdown-divider m-0"></div>
              </li>
              <li><a href="lock-screen.html"><i class="icon-lock"></i> Change Password</a></li>
              <li><a href="<?php echo site_url('index.php/signup/logout');?>"><i class="icon-logout"></i> Logout</a></li>

            </ul>
          </li>
        </ul>

 <!-- search end -->
</div>
</nav>