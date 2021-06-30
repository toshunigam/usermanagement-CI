<?php
$utype=array('customer'=>'customer','staff'=>'staff','organisation'=>'organisation','super admin'=>'super admin',);
?>
<!-- Container-fluid starts -->
<div class="container-fluid" style="width: 100%; margin-top: 50px;">
	<!-- Row Starts -->
	<!-- Row end -->
    <div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header"><h3 class="card-header-text">Create User here</h3></div>
				<div class="card-block">
					<form id="main" class="form-horizontal" action="<?php echo site_url('index.php/users/adduser'); ?>" method="post" novalidate>
						<div class="md-group-add-on p-relative">
						 	<div class="input-wrapper">
								<label for="username">Full Name</label>
								<input type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username');?>" autocomplete="off" />
								<span class="messages"><?php echo form_error('username'); ?></span>
							</div>
						</div>
						<div class="md-group-add-on p-relative">
						 <span class="md-add-on">
							<i class="icofont icofont-email"></i>
						 </span>
							<div class="md-input-wrapper">
								<label for="email">Email address</label>
								<input type="email" class="form-control"  name="email" id="email" value="<?php echo set_value('email');?>" />
								<span class="messages"><?php echo form_error('email'); ?></span>
							</div>
						</div>
						<div class="md-group-add-on p-relative">
						 <span class="md-add-on">
							<i class="icofont icofont-ui-password"></i>
						 </span>
							<div class="md-input-wrapper">
								<label for="password">Enter Password</label>
								<input type="password" class="form-control"  name="password" id="password" value="<?php echo set_value('password');?>" />
								<span class="messages"><?php echo form_error('password'); ?></span>
							</div>
						</div>
						<div class="md-group-add-on p-relative">
						 <span class="md-add-on">
							<i class="icofont icofont-key"></i>
						 </span>
							<div class="md-input-wrapper">
								<label for="confirm-password">Enter Confirm password</label>
								<input type="password" class="form-control"  name="confirm-password" id="confirm-password" value="<?php echo set_value('confirm-password');?>" />
								<span class="messages"><?php echo form_error('confirm-password'); ?></span>
							</div>
						</div>
						<div class="group-add-on p-relative">
							<span class="md-add-on">
								<i class="icofont icofont-businessman"></i>
							</span>
							<div class="input-wrapper">
								<label for="confirm-password">Select User type</label>
								<?php echo form_dropdown('usertype', $utype, set_value('usertype'),'class="form-control"'); ?>
								<span class="messages"><?php echo form_error('usertype'); ?></span>
							</div>
						</div>
						<label for="confirm-password">&nbsp;</label>
						
						<div class="input-wrapper">
							<button type="submit" class="btn btn-primary waves-effect waves-light">Submit
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Container-fluid ends -->
