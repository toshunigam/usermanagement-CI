<?php if(isset($header))
			include($header);?>

<?php if(isset($sidebar))
			include($sidebar);?>


<style type="text/css">
  

header{ display: none; }

</style>




<div class="limiter">
    <div class="container-login100" style="background-image: url('<?php echo base_url();?>assets/images/bg1.jpg'); background-size: cover: ">
	
      <div class="wrap-login100">
	  <?php echo $this->session->flashdata('message'); ?>
        <form class="login100-form validate-form" action="<?php echo site_url('index.php/signup/login'); ?>" method="post">
          
          <h3 style="margin:15px 0; color: white; text-align: center;"> Usermanagement </h3>

          <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="email" placeholder="Username">
            <span class="focus-input100" ></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- end here main-wrapper -->


<?php if(isset($footer))
			include($footer); ?>





